<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use common\models\Goods;
use yii\widgets\ActiveForm;
use common\models\Income;
/* @var $this yii\web\View */
/* @var $searchModel common\models\IncomeGoodsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Income Goods');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="income-goods-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <div class="d-flex-justify-content-center">
        
        <?=$this->render('_form',['model'=>$model])?>
    </div>


    <?php
    // print_r($dataProvider->models);
    ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' =>'goods_id',
                'label'=>'Goods',
                'value'=>function($model){
                    return $model->goods->name;
                },
                'filter'=>Goods::selectlist()
            ],
            [
                'attribute'=>'income_id',
                'value'=>function($model){
                    return $model->income?$model->income->number:'';
                }
            ],
            [
               'attribute'=>'amount',
               'format'=>'raw',
               'value'=>function($model){
                return $model->amount?$model->amount:'';
            }   
        ],
        'cost',
        [
            'attribute'=>'date',
            'label'=>'Date',
            'value'=>function($model){
                return $model->income? $model->income->date:'';
            }
        ],
        [
            'attribute'=>'kod',
            'label'=>'Kod',
            'value'=>function($model){
                return $model->goods? $model->goods->kod:'';
            }
        ],
        
        [
            'class' => ActionColumn::className(),
        ],
    ],
]); ?>


</div>
