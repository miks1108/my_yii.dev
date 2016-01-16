<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 15.01.2016
 * Time: 23:58
 */

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Form;
//use yii\web\Request;

class FormController extends Controller
{

    public static $request;

    public function actionIndex()
    {
        $users = Form::find()->all();
        return $this->render('index', ['users' => $users]);
    }

    public function actionNew()
    {
        $user = new Form();

        if ($user->load(Yii::$app->request->post()) && $user->validate()) {
            // данные в $model удачно проверены

            // делаем что-то полезное с $model ...

            $user->save();

            $this->redirect(['/form']);

//            return $this->render('index', ['model' => $model]);
        } else {
            // либо страница отображается первый раз, либо есть ошибка в данных
            return $this->renderPartial('new', ['user' => $user]);
        }
    }

    public function actionAddNew()
    {
        $user = new Form();

        if ($user->load(Yii::$app->request->post()) && $user->validate()) {
            // данные в $model удачно проверены

            // делаем что-то полезное с $model ...

            $user->save();

            $this->redirect(['/form']);

//            return $this->render('index', ['model' => $model]);
        } else {
            // либо страница отображается первый раз, либо есть ошибка в данных
            return $this->render('new', ['user' => $user]);
        }
    }

    public function actionDelete() {

        self::$request = Yii::$app->request;

        if(self::$request->getIsGet()) {

            $item_id = self::$request->get('id');

            $user = Form::findOne($item_id);
            $result = $user->delete();

            if(self::$request->getIsAjax()) {
                print json_encode($result);
                die();
            }

        }

        $this->redirect(['/form']);

    }

}