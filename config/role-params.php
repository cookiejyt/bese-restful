<?php
/**
 * author     : forecho <caizh@chexiu.cn>
 * createTime : 2015/12/9 17:47
 * description:
 */

return [
    [
        'class' => 'yii\rest\UrlRule',
        'pluralize' => true,
        'controller' => [
            'message',
            'user'
        ],
        'extraPatterns' =>
            [
                "POST login" => 'login',
                "POST logout" => 'logout'
            ],

    ]
];