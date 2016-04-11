<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\Models\TContractSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tcontract-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'contract_type_id') ?>

    <?= $form->field($model, 'contract_status_id') ?>

    <?= $form->field($model, 'company_name') ?>

    <?= $form->field($model, 'contract_subject') ?>

    <?php // echo $form->field($model, 'contract_value') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'active_from') ?>

    <?php // echo $form->field($model, 'active_to') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
