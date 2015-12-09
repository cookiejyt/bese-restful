<?php
/**
 * author     : forecho <caizh@chexiu.cn>
 * createTime : 2015/12/9 17:25
 * description:
 */

namespace app\modules\v1\controllers;

use yii\rest\ActiveController;

class UserController extends ActiveController
{
    public $modelClass = 'common\models\User';

}