<?php

namespace frontend\controllers;
use app\models\HouseDetails;
use app\models\HouseLocation;
use app\models\Map;
use app\models\Cities;
use app\models\User;
use app\models\UserDetails;
use Symfony\Component\Finder\Finder;
use yii\web\Controller;

use yii;

/**
 * LocationController implements the CRUD actions for houselocation model.
 */
class OperationController extends Controller
{
    
    public function actionView($id)
   {
      $view=HouseDetails::findOne($id);
     return $this->render('view',['model'=>$view]);   
   }

   public function actionAgreement()
   {       
     return $this->render('agreement');       
   }

    public function actionHome()
    {
        $home = HouseDetails::find()->all();      
        return $this->render('home',['model'=>$home]);
    }
    
    public function actionLoad($id)
    {
        return $this->render('view', [
            'model' => $this->test($id),
        ]);
    }

    public function actionHouseSearch()
    {
        $houseSearch = new houselocation();
    
        if ($houseSearch->load(Yii::$app->request->post())) {
       return $this->actionFind($houseSearch->locality);
       }    
        return $this->render('login', [
           'model' => $houseSearch,
       ]);
    }   

    public function actionBookedHouse()
    {        
      $bookedHouses= new HouseDetails();
      $bookedHouses= $bookedHouses->details();       
       return $this->render('show',['model'=>$bookedHouses]);
    }

    public function actionAllHouse()
    {        
      $allHouse= new HouseDetails();
      $allHouse= $allHouse->allHouse();  
      return $this->render('show',['model'=>$allHouse]);
    }
  
      public function actionHouseDetails($id)
    {         
        $houseDetails =HouseDetails::find()
        ->select('house_details.house_type, house_details.price,house_details.purpose, house_details.access')
        ->from('house_details')
        ->where(['location_id'=>$id]);    
          "<pre>"; print_r($houseDetails);die;       
    }
    
    public function actionTest3($id)
    {
       $test =  new HouseDetails();
       $test->show($id);
 
   return $this->render('display',['model'=>$test]);
       
    }
 

    public function actionDisplay($id)
    {       
        $display =HouseDetails::find()
        ->select('house_details.house_type,house_details.price,house_details.purpose, house_details.access,house_location.city,house_location.state,')
        ->from('house_details')
        ->innerJoin('house_location', 'house_details.location_id= house_location.location_id')       
        ->where(['house_id'=>$id])     
        ->asArray()->all();     
    return $this->render('display',['model'=>$display]);       
    }

    public function actionDisplay2()
    {     
       $disp =HouseLocation::find()->all();   
       return $this->render('view',['model'=>$disp]);       
    }

    public function actionLocation($id)
    {   
       $area = houselocation::find()
        ->where(['city'=>$id]) 
        ->count();    
        $locality = houselocation::find()
        ->where(['city'=>$id]) 
        ->all();
        if($area >0){
            foreach($locality as $data){
            echo   "<option value='".$data->location_id."'>".$data->locality. "</option>";
     }  }  }

    public function actionList($id)
    {  
        $location = houselocation::find()
        ->where(['city'=>$id]) 
        ->count();       
  
        $locality = houselocation::find()
        ->where(['city'=>$id]) 
        ->all();
        if($location >0){
            foreach($locality as $data){
            echo   "<option value='".$data->location_id."'>".$data->locality. "</option>";
     }   }   }

  public function actionLists($id)
  {  
      $countcity = Cities::find()
      ->where(['state_id'=>$id]) 
      ->count();     

      $city = Cities::find()
      ->where(['state_id'=>$id]) 
      ->all();   

      if($countcity>0){
          foreach($city as $data){
          echo   "<option value='".$data->city_id."'>".$data->city. "</option>";
  }  }    } 

     public function actionFind($id)
     {        
        $model = new HouseDetails();
        $model = $model->house($id);        
       return $this->render('home2',['model'=>$model]);
     }

     public function actionShowHouse($id)
     {
         $showHouse= new HouseDetails();
         $showHouse= $showHouse->view($id); 
        return $this->render('display',['model'=>$showHouse]);
      
     }

     public function actionViewUsers()
     {
            $viewUsers = new Map();
            $viewUsers = $viewUsers->Book();      
          return $this->render('book',['model'=>$viewUsers]);          
     }

     public function actionUser($userid)
     {      
           $user = new UserDetails();
           $user=$user->user($userid);
           
           
          return $this->render('display2',['model'=>$user]);

     }     
     public function actionOwnerList()
     {      
      $user = Map::find()
      ->select('map.house_id,house_details.house_type,house_details.price,
      house_details.status,user_details.name,user_details.phone')
      ->innerJoin('house_details','house_details.House_id = map.house_id')
      ->innerJoin('user_details','user_details.id = map.id')         
     
      ->orderBy([ 'map_id' => SORT_DESC,])      
      ->asArray()->all();
      $dt = [];
      foreach($user as $data):
       if(count($dt) == 0){
         array_push ( $dt,$data);
       }
       else
       {
        $i=0;
         for($i=0;$i<count($dt);$i++){
           if($dt[$i]['name'] == $data['name']){
            $dt[$i]['house_type'] = $dt[$i]['house_type'].','.$data['house_type'];
            break;
        }
        }
        if($i == count($dt)){
         array_push ( $dt,$data);
       }
       } 
      endforeach;    
     return $this->render('owner',['model'=>$dt]);
     }     
}
