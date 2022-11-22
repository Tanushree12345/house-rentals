<?php

namespace frontend\controllers;

use app\models\Map;
use app\models\Maps;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * NewController implements the CRUD actions for Map model.
 */
class NewController extends Controller
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
     * Lists all Map models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new Maps();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Map model.
     * @param int $map_id
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($map_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($map_id),
        ]);
    }

    /**
     * Creates a new Map model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Map();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'map_id' => $model->map_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Map model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $map_id
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($map_id)
    {
        $model = $this->findModel($map_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'map_id' => $model->map_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Map model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $map_id
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($map_id)
    {
        $this->findModel($map_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Map model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $map_id
     * @return Map the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($map_id)
    {
        if (($model = Map::findOne(['map_id' => $map_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
