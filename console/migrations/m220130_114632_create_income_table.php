<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%income}}`.
 */
class m220130_114632_create_income_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%income}}', [
            'id' => $this->primaryKey(),
            'date' => $this->date(),
            'number' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%income}}');
    }
}
