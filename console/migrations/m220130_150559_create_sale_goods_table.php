<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%sale_goods}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%sale}}`
 * - `{{%goods}}`
 */
class m220130_150559_create_sale_goods_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%sale_goods}}', [
            'id' => $this->primaryKey(),
            'sale_id' => $this->integer(),
            'goods_id' => $this->integer(),
            'amount' => $this->integer(),
            'cost' => $this->integer(),
        ]);

        // creates index for column `sale_id`
        $this->createIndex(
            '{{%idx-sale_goods-sale_id}}',
            '{{%sale_goods}}',
            'sale_id'
        );

        // add foreign key for table `{{%sale}}`
        $this->addForeignKey(
            '{{%fk-sale_goods-sale_id}}',
            '{{%sale_goods}}',
            'sale_id',
            '{{%sale}}',
            'id',
            'CASCADE'
        );

        // creates index for column `goods_id`
        $this->createIndex(
            '{{%idx-sale_goods-goods_id}}',
            '{{%sale_goods}}',
            'goods_id'
        );

        // add foreign key for table `{{%goods}}`
        $this->addForeignKey(
            '{{%fk-sale_goods-goods_id}}',
            '{{%sale_goods}}',
            'goods_id',
            '{{%goods}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%sale}}`
        $this->dropForeignKey(
            '{{%fk-sale_goods-sale_id}}',
            '{{%sale_goods}}'
        );

        // drops index for column `sale_id`
        $this->dropIndex(
            '{{%idx-sale_goods-sale_id}}',
            '{{%sale_goods}}'
        );

        // drops foreign key for table `{{%goods}}`
        $this->dropForeignKey(
            '{{%fk-sale_goods-goods_id}}',
            '{{%sale_goods}}'
        );

        // drops index for column `goods_id`
        $this->dropIndex(
            '{{%idx-sale_goods-goods_id}}',
            '{{%sale_goods}}'
        );

        $this->dropTable('{{%sale_goods}}');
    }
}
