<?php

namespace app\controllers;

use app\models\Article;
use app\models\ArticleBlog;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\ForbiddenHttpException;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use Yii;
use yii\web\UploadedFile;

/**
 * ArticleController implements the CRUD actions for Article model.
 */
class ArticleController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                [
                    'class' => AccessControl::class,
                    'only' => ['create', 'update', 'delete'],
                    'rules' => [
                        [
                            'actions' => ['update', 'create', 'delete'],
                            'allow' =>true,
                            'roles' => ['@']
                        ]
                    ]
                ],
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
     * Lists all Article models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ArticleBlog();
        $dataProvider = $searchModel->search($this->request->queryParams);


        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,


        ]);
    }

    /**
     * Displays a single Article model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView ($slug)
    {
        return $this->render('view', [
            'model' => $this->findModel($slug),
        ]);
    }

    /**
     * Creates a new Article model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Article();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {

                $model->imageFile = UploadedFile::getInstance($model, 'imageFile');

                if ($model->uploadAndSave())
                return $this->redirect(['view', 'slug' => $model->slug]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Article model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($slug)
    {
        $model = $this->findModel($slug);
        if($model->created_by !== Yii::$app->user->id){
            throw new ForbiddenHttpException("You don't have the permission to update this! ");
        }

        // Handle form submission
        if ($model->load(Yii::$app->request->post())) {
            // Retrieve the uploaded image file from the request
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');


            // Check if a new image file was uploaded
            if ($model->imageFile !== null) {
                // Generate a unique filename for the uploaded file
                $filename = $model->imageFile->baseName . '.' . $model->imageFile->extension;

                // Save the uploaded file to the server
                $model->imageFile->saveAs('uploads/' . $filename);



                // Update the 'image' attribute of the article model with the new filename
                $model->setAttribute('image', $filename);

                // Update the 'image' attribute of the article model with the new filename
            }

            // Save the updated article model to the database
            $model->save();

            // Redirect the user to the updated article view page
            return $this->redirect(['view', 'slug' => $model->slug]);
        }

        // Render the update form view
        return $this->render('update', [
            'model' => $model,
        ]);
    }








    /**
     * Deletes an existing Article model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete ($slug)
    {
        $model = $this->findModel($slug);
        if($model->created_by !== Yii::$app->user->id){
            throw new ForbiddenHttpException("You don't have the permission to delete this!");
        }
        $model->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Article model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Article the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($slug)
    {
        if (($model = Article::findOne(['slug' => $slug])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
