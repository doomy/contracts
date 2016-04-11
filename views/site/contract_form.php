<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

$form = ActiveForm::begin();
echo $form->field($contract, 'contract_subject');
echo $form->field($contract, 'company_name');
echo $form->field($contract, 'contract_value');
echo $form->field($contract, 'active_from');
echo $form->field($contract, 'active_to');

echo Html::submitButton('Submit', ['class' => 'btn btn-success']);

?>

