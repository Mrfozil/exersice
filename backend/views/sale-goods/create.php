<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SaleGoods */

$this->title = Yii::t('app', 'Create Sale Goods');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sale Goods'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sale-goods-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
