<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Coordinador;
use app\models\ValidarCoordinador;
use yii\helpers\Html;
use yii\helpers\Url;

class SiteController extends Controller
{
    public function actionCrearc()
    {
        $model = new ValidarCoordinador;
        $msg = null;
        if($model->load(Yii::$app->request->post()))
        {
            if($model->validate())
            {
                $table = new Coordinador;
                $verificar = Coordinador::find()->where(['id_coordinador_convenio' =>
                $model->id_coordinador_convenio])->count();
                $table->id_coordinador_convenio = $model->id_coordinador_convenio;
                $table->rut_coordinador_convenio = $model->rut_coordinador_convenio;
                $table->nombre_coordinador_convenio = $model->nombre_coordinador_convenio;
                $table->dv_coordinador_convenio = $model->dv_coordinador_convenio;
                $table->fecha_inicio = $model->fecha_inicio;
                $table->fecha_fin = $model->fecha_fin;
                $table->vigente = $model->vigente;
                $table->esexterno = $model->esexterno;
                $table->unidad_academica = $model->unidad_academica;
                $table->email = $model->email;
                $table->id_institucion= $model->id_institucion;
                if($verificar==0)
                {
                    if ($table->insert())
                    {
                        $msg = "Enhorabuena registro guardado correctamente";
                        $model->id_coordinador_convenio=null;
                        $model->rut_coordinador_convenio=null;
                        $model->nombre_coordinador_convenio=null;
                        $model->dv_coordinador_convenio=null;
                        $model->fecha_inicio=null;
                        $model->fecha_fin=null;
                        $model->vigente=null;
                        $model->esexterno=null;
                        $model->unidad_academica=null;
                        $model->email=null;
                        $model->id_institucion=null;
                    }
                    else
                    {
                        $msg = "Ha ocurrido un error al insertar el registro";
                    }
                }
                else
                {
                    $msg = "El registro ya existe en la base de datos";
                }
            }
            else
            {
                $model->getErrors();
            }
        }
        return $this->render("crearc", ['model' => $model, 'msg' => $msg]);
    }

    public function actionActualizarb()
    {
        $table = new Coordinador;
        $model = $table->find()->orderBy('id_coordinador_convenio')->all();
        return $this->render("actualizarb", ['model' => $model]);
    }

    public function actionActualizarc()
    {
        $model = new ValidarCoordinador;
        $msg = null;
            
        if($model->load(Yii::$app->request->post()))
        {
            if($model->validate())
            {
                $table = Coordinador::findOne($model->id_coordinador_convenio);
                if($table)
                {
                    $table->id_coordinador_convenio = $model->id_coordinador_convenio;
                    $table->rut_coordinador_convenio = $model->rut_coordinador_convenio;
                    $table->nombre_coordinador_convenio = $model->nombre_coordinador_convenio;
                    $table->dv_coordinador_convenio = $model->dv_coordinador_convenio;
                    $table->fecha_inicio = $model->fecha_inicio;
                    $table->fecha_fin = $model->fecha_fin;
                    $table->vigente = $model->vigente;
                    $table->esexterno = $model->esexterno;
                    $table->unidad_academica = $model->unidad_academica;
                    $table->email = $model->email;
                    $table->id_institucion= $model->id_institucion;
                    if ($table->update())
                    {
                        $msg = "El Coordinador ha sido actualizado correctamente";
                        echo "<meta http-equiv='refresh' content='1; ".Url::toRoute("site/actualizarb")."'>";
                    }
                    else
                    {
                        $msg = "El Coordinador no ha podido ser actualizado";
                        echo "<meta http-equiv='refresh' content='1; ".Url::toRoute("site/actualizarb")."'>";
                    }
                }
                else
                {
                    $msg = "El Coordinador seleccionado no ha sido encontrado";
                    echo "<meta http-equiv='refresh' content='1; ".Url::toRoute("site/actualizarb")."'>";
                }
            }
            else
            {
                $model->getErrors();
            }
        }
            
        if (Yii::$app->request->get("id_coordinador_convenio"))
        {
            $id_coordinador_convenio = Html::encode($_GET["id_coordinador_convenio"]);
            if ((int) $id_coordinador_convenio)
            {
                $table = Coordinador::findOne($id_coordinador_convenio);
                if($table)
                {
                    $model->id_coordinador_convenio = $table->id_coordinador_convenio;
                    $model->rut_coordinador_convenio = $table->rut_coordinador_convenio;
                    $model->nombre_coordinador_convenio = $table->nombre_coordinador_convenio;
                    $model->dv_coordinador_convenio = $table->dv_coordinador_convenio;
                    $model->fecha_inicio = $table->fecha_inicio;
                    $model->fecha_fin = $table->fecha_fin;
                    $model->vigente = $table->vigente;
                    $model->esexterno = $table->esexterno;
                    $model->unidad_academica = $table->unidad_academica;
                    $model->email = $table->email;
                    $model->id_institucion= $table->id_institucion;
                }
                else
                {
                    return $this->redirect(["site/index"]);
                }
            }
            else
            {
                return $this->redirect(["site/index"]);
            }
        }
        else
        {
           return $this->redirect(["site/index"]);
        }
        return $this->render("actualizarc", ["model" => $model, "msg" => $msg]);
    }

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
