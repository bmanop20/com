<?php

namespace frontend\controllers;

use Yii;
use frontend\models\ComDep;
use frontend\controllers\ComDepSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ComDepController implements the CRUD actions for ComDep model.
 */
class ComDepController extends Controller
{
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
     * Lists all ComDep models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ComDepSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    

    /**
     * Displays a single ComDep model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = ComDep::find();
        //print_r($model);
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new ComDep model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ComDep();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $searchModel = new ComDepSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
            return $this->redirect(['index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ComDep model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
//        $formatter = new Formatter;
//        $formatter->dateFormat = 'php:Y-m-d';
//        $model->datein = $formatter->asDate($model->datein);
//        echo $model->datein;
//        echo Yii::$app->request->post();
//        echo $formatter->asDate($model->datein);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
//            print_r($model);
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ComDep model.
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
     * Finds the ComDep model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ComDep the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ComDep::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
