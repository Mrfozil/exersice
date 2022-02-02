<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\IncomeGoods */

$this->title = Yii::t('app', 'Create Income Goods');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Income Goods'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="income-goods-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
