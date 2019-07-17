<?php

namespace codexten\yii\modules\enquiry\migrations;

use yii\db\Migration;

/**
 * Class M190717070153Alter_message_column_from_enquiry_table
 */
class M190717070153Alter_message_column_from_enquiry_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('{{%enquiry}}', 'message', $this->text());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%enquiry}}', 'message');
    }
}
