<?php

namespace codexten\yii\modules\enquiry\controllers;

use Yii;
use codexten\yii\modules\enquiry\models\Enquiry;
use codexten\yii\web\CrudController;

/**
 * EnquiryController implements the CRUD actions for Enquiry model.
 */
class EnquiryController extends CrudController
{
    public $modelClass = Enquiry::class;

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        $actions = parent::actions();

        return $actions;
    }

}
