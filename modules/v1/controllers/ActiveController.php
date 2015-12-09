<?php
/**
 * author     : forecho <caizh@chexiu.cn>
 * createTime : 2015/12/9 17:10
 * description:
 */

namespace app\modules\v1\controllers;

use Yii;

class ActiveController extends \yii\rest\ActiveController
{
    public $modelClass = '';
    public $request = '';

    public function actions()
    {
        $actions = parent::actions();
        // 注销系统自带的实现方法
//        unset($actions['index'], $actions['update'], $actions['create'], $actions['delete'], $actions['view']);
//        return $actions;
    }

    /**
     * @param \yii\base\Action $action
     * @return bool
     * @throws \yii\web\BadRequestHttpException
     */
    public function beforeAction($action)
    {
        if (parent::beforeAction($action)) {
            $this->request = Yii::$app->request;
            Yii::info('请求地址：' . $this->request->absoluteUrl, 'request');
            Yii::info('请求数据：' . $this->request->rawBody, 'request');
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param \yii\base\Action $action
     * @param mixed $result
     * @return array
     */
    public function afterAction($action, $result)
    {
        $ret = ['data' => $result, 'code' => '200', 'message' => 'ok'];
        Yii::info('请求返回结果：' . \yii\helpers\Json::encode($ret), 'request');
        return $ret;
    }
}