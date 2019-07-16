<?php

namespace codexten\yii\modules\enquiry\models\query;

use \yii\db\ActiveQuery;
use \codexten\yii\modules\enquiry\models\Enquiry;

/**
 * This is the ActiveQuery class for [[\codexten\yii\modules\enquiry\models\Enquiry]].
 *
 * @see Enquiry
 */
class EnquiryQuery extends ActiveQuery
{
    /**
     * {@inheritdoc}
     * @return Enquiry[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Enquiry|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
