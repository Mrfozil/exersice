<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "sale".
 *
 * @property int $id
 * @property string|null $date
 * @property int|null $number
 *
 * @property SaleGoods[] $saleGoods
 */
class Sale extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sale';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['number'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'date' => Yii::t('app', 'Date'),
            'number' => Yii::t('app', 'Number'),
        ];
    }

    /**
     * Gets query for [[SaleGoods]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSaleGoods()
    {
        return $this->hasMany(SaleGoods::className(), ['sale_id' => 'id']);
    }
}
