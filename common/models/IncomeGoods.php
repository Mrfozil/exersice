<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "income_goods".
 *
 * @property int $id
 * @property int|null $goods_id
 * @property int|null $income_id
 * @property int|null $amount
 * @property int|null $cost
 *
 * @property Goods $goods
 * @property Income $income
 */
class IncomeGoods extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'income_goods';
    }
    public $date;
    public $amount;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['goods_id', 'income_id', 'amount', 'cost'], 'integer'],
            [['goods_id'], 'exist', 'skipOnError' => true, 'targetClass' => Goods::className(), 'targetAttribute' => ['goods_id' => 'id']],
            [['income_id'], 'exist', 'skipOnError' => true, 'targetClass' => Income::className(), 'targetAttribute' => ['income_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'goods_id' => Yii::t('app', 'Goods name'),
            'income_id' => Yii::t('app', 'Income Number'),
            'amount' => Yii::t('app', 'Amount'),
            'cost' => Yii::t('app', 'Cost'),
        ];
    }

    /**
     * Gets query for [[Goods]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGoods()
    {
        return $this->hasOne(Goods::className(), ['id' => 'goods_id']);
    }

    /**
     * Gets query for [[Income]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIncome()
    {
        return $this->hasOne(Income::className(), ['id' => 'income_id']);
    }
}
