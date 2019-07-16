<?php

namespace codexten\yii\modules\enquiry\migrations;

use yii\db\Migration;

/**
 * Handles the creation of table `{{%enquiry}}`.
 */
class M190715065118Create_enquiry_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%enquiry}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'email' => $this->string(255),
            'mobile' => $this->string(50),
            'message' => $this->string(255),
            'created_at' => $this->integer
(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%enquiry}}');
    }
}
