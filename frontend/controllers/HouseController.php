<?php

namespace frontend\controllers;

use app\models\housedetails;
use frontend\models\Details;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * HouseController implements the CRUD actions for housedetails model.
 */
class HouseController extends Controller
{
    /**
     * @inheritDoc
     */
  
    
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all housedetails models.
     *
     * @return string
     */
    public function actionHouse()
    {      
      
   
     return $this->render('index');
       
    }
    public function actionSignin()
    {      
      
   
     return $this->render('signin');
       
    }
    public function actionIndex()
    {
        $searchModel = new Details();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single housedetails model.
     * @param int $House_id House ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($House_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($House_id),
        ]);
    }

    /**
     * Creates a new housedetails model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new housedetails();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'House_id' => $model->House_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing housedetails model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $House_id House ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($House_id)
    {
        $model = $this->findModel($House_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'House_id' => $model->House_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing housedetails model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $House_id House ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($House_id)
    {
        $this->findModel($House_id)->delete();

        return $this->redirect(['index']);
    }
   

    /**
     * Finds the housedetails model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $House_id House ID
     * @return housedetails the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($House_id)
    {
        if (($model = housedetails::findOne(['House_id' => $House_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
