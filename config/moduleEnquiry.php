<?php

use codexten\gnt\site\controllers\EnquiryController;
use codexten\yii\base\Module;
use codexten\yii\modules\enquiry\models\Enquiry;

return [
    'modules' => [
        'enquiry' => [
            'class' => Module::class,
            'controllerNamespace' => 'codexten\yii\modules\enquiry\controllers',
            'controllerMap' => [
                'enquiry' => [
                    'class' => EnquiryController::class,
                    'modelClass' => Enquiry::class
                ],
            ],
        ],
    ],
];
