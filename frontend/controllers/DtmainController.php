<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Dtmain;
use frontend\controllers\DtmainSearchController;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DtmainController implements the CRUD actions for Dtmain model.
 */
class DtmainController extends Controller
{
    public $doctor_code = "";
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Dtmain models.
     * @return mixed
     */
    public function actionDoctor(){
        
        
        $d = Yii::$app->request->post('doctor');
        if($d <> ""){
            $m = new \frontend\models\Tetable();
            $m->test = $d;
            $m->save();
        }
        
        
//            $request = Yii::$app->request;
//            $m = new \frontend\models\Tetable();
//            
//            if ($request->isAjax) { $m->test = "Ajax"; }
//            if ($request->isGet)  { $m->test = "Get"; }
//            if ($request->isPost) {$m->test = "Post"; /* the request method is POST */ }
//            if ($request->isPut)  {$m->test = "Put"; /* the request method is PUT */ }
//        $m->save();
    }
    public function actionIndex()
    {
        

        
        $searchModel = new DtmainSearchController();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $doctor = new \frontend\models\Doctor();
        
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'doctor'=>$doctor,
        
        ]);
    }

    /**
     * Displays a single Dtmain model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Dtmain model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Dtmain();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->dtmain_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Dtmain model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->dtmain_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Dtmain model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Dtmain model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Dtmain the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Dtmain::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
