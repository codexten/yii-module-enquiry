<?php

namespace codexten\yii\modules\enquiry\models;

use codexten\yii\db\ActiveRecord;
use codexten\yii\modules\enquiry\models\query\EnquiryQuery;
use Yii;

/**
 * This is the model class for table "{{%enquiry}}".
 *
 * Database fields:
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $mobile
 * @property string $message
 * @property int $created_at
 */
class Enquiry extends ActiveRecord
{

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%enquiry}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'mobile', 'message'], 'required'],
            [['created_at'], 'integer'],
            ['email', 'email'],
            [['name', 'email', 'message'], 'string', 'max' => 255],
            [['mobile'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('codexten:module:enquiry', 'ID'),
            'name' => Yii::t('codexten:module:enquiry', 'Name'),
            'email' => Yii::t('codexten:module:enquiry', 'Email'),
            'mobile' => Yii::t('codexten:module:enquiry', 'Mobile'),
            'message' => Yii::t('codexten:module:enquiry', 'Message'),
            'created_at' => Yii::t('codexten:module:enquiry', 'Created At'),
        ];
    }


    /**
     * {@inheritdoc}
     * @return EnquiryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EnquiryQuery(get_called_class());
    }

}
