<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Goods;
use common\models\Income;
/* @var $this yii\web\View */
/* @var $model common\models\IncomeGoods */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="income-goods-form ">

     <?php $form = ActiveForm::begin(); ?>
    <div class="row d-flex justify-content-center">
        <div class="col-md-2">
            <?= $form->field($model, 'goods_id')->dropdownList(Goods::selectlist(),['prompt'=>'Select as goods']) ?>
            
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'income_id')->dropdownList(Income::selectlist(),['prompt'=>'Select income number']) ?>
            
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'amount')->textInput(['type'=>'number']) ?>
            
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'cost')->textInput(['type'=>'number']) ?>
                
        </div>

        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
        </div>

    </div>

    <?php ActiveForm::end(); ?>

</div>
