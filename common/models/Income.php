<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "income".
 *
 * @property int $id
 * @property string|null $date
 * @property int|null $number
 *
 * @property IncomeGoods[] $incomeGoods
 */
class Income extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'income';
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
     * Gets query for [[IncomeGoods]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIncomeGoods()
    {
        return $this->hasMany(IncomeGoods::className(), ['income_id' => 'id']);
    }
    public static function selectlist(){
        return ArrayHelper::map(self::find()->orderBy('number ASC')->asArray()->all(), 'id', 'number' );
    } 
   
}

