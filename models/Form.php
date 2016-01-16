<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 15.01.2016
 * Time: 23:58
 */

namespace app\models;

//use yii\base\Model;
use yii\db\ActiveRecord;

class Form extends ActiveRecord
{

//    public $name;
//    public $email;

    public static function tableName()
    {
        return 'world_users';
    }

    public function rules()
    {
        return [
            [['name'], 'trim'],
            [['email'], 'required', 'message' => 'Введите пожалуйста {attribute}'],
            ['email', 'email', 'message' => '{attribute} введен не правильно'],
        ];
    }

}