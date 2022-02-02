<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%income_goods}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%goods}}`
 * - `{{%income}}`
 */
class m220130_145824_create_income_goods_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%income_goods}}', [
            'id' => $this->primaryKey(),
            'goods_id' => $this->integer(),
            'income_id' => $this->integer(),
            'amount' => $this->integer(),
            'cost' => $this->integer(),
        ]);

        // creates index for column `goods_id`
        $this->createIndex(
            '{{%idx-income_goods-goods_id}}',
            '{{%income_goods}}',
            'goods_id'
        );

        // add foreign key for table `{{%goods}}`
        $this->addForeignKey(
            '{{%fk-income_goods-goods_id}}',
            '{{%income_goods}}',
            'goods_id',
            '{{%goods}}',
            'id',
            'CASCADE'
        );

        // creates index for column `income_id`
        $this->createIndex(
            '{{%idx-income_goods-income_id}}',
            '{{%income_goods}}',
            'income_id'
        );

        // add foreign key for table `{{%income}}`
        $this->addForeignKey(
            '{{%fk-income_goods-income_id}}',
            '{{%income_goods}}',
            'income_id',
            '{{%income}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%goods}}`
        $this->dropForeignKey(
            '{{%fk-income_goods-goods_id}}',
            '{{%income_goods}}'
        );

        // drops index for column `goods_id`
        $this->dropIndex(
            '{{%idx-income_goods-goods_id}}',
            '{{%income_goods}}'
        );

        // drops foreign key for table `{{%income}}`
        $this->dropForeignKey(
            '{{%fk-income_goods-income_id}}',
            '{{%income_goods}}'
        );

        // drops index for column `income_id`
        $this->dropIndex(
            '{{%idx-income_goods-income_id}}',
            '{{%income_goods}}'
        );

        $this->dropTable('{{%income_goods}}');
    }
}
