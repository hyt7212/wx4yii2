<?php
/**
 * Created by PhpStorm.
 * User: SeanHwang
 * Date: 2014/12/12
 * Time: 21:38
 */
namespace app\models;

use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}