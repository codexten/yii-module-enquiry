<?php

namespace codexten\yii\modules\enquiry\controllers;

use codexten\yii\web\CrudController;

class EnquiryController extends CrudController
{
    /**
     * {@inheritDoc}
     */
    public function actions()
    {
        $actions = parent::actions();

        if (in_array('create', $this->enabledActions)) {
            $actions['create']['returnUrl'] = ['create'];
            $actions['create']['messages']['success'] = 'You have successfully send an enquiry to our team. We will respond you as soon as poosible';
        }

        return $actions;
    }

}
