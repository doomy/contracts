<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\Models\TContract */

$this->title = 'Create Tcontract';
$this->params['breadcrumbs'][] = ['label' => 'Tcontracts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tcontract-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
