<?php

namespace app\models;

use yii\base\Model;
use yii\helpers\VarDumper;

class Signup extends Model
{
    public $id;
    public $username;
    public $password;

    public static function tableName()
    {
        return 'user';


    }


    public function rules()
    {
        return[

             [['username','password'],'required'],
           //  ['username','username'],
            ['username','unique','targetClass'=>'app\models\User'],
            ['password','string','min'=>3,'max'=>33]
        ];
    }

    public function signup()
    {


        $user = new User();
        $user->username =$this->username;
        $user->password =$this->password;

       $user->save();

    }
}
