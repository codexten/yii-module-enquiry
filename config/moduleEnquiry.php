<?php

use codexten\yii\base\Module;
use codexten\yii\modules\enquiry\models\Enquiry;

return [
    'modules' => [
        'enquiry' => [
            'class' => Module::class,
            'viewPath' => '@moduleEnquiry/views',
            'controllerNamespace' => 'codexten\yii\modules\enquiry\controllers',
            'controllerMap' => [
                'enquiry' => [
                    'class' => \codexten\yii\modules\enquiry\controllers\EnquiryController::class,
                    'modelClass' => Enquiry::class,
                ],
            ],
        ],
    ],
];
