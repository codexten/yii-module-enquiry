<?php

use codexten\yii\base\Module;
use codexten\yii\modules\enquiry\models\Enquiry;
use codexten\yii\web\CrudController;

return [
    'modules' => [
        'enquiry' => [
            'class' => Module::class,
            'viewPath' => '@moduleEnquiry/views',
            'controllerNamespace' => 'codexten\yii\modules\enquiry\controllers',
            'controllerMap' => [
                'enquiry' => [
                    'class' => CrudController::class,
                    'modelClass' => Enquiry::class,
                ],
            ],
        ],
    ],
];
