<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Income */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="income-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row align-items-center justify-content-around">
        <div class="col-md-3">
            <?= $form->field($model, 'date')->textInput(['type'=>'date']) ?>

        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'number')->textInput(['type'=>'number']) ?>

        </div>
        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
        </div>
    </div>



    <?php ActiveForm::end(); ?>

</div>
