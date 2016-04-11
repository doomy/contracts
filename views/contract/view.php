<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\Models\TContract */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tcontracts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tcontract-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'contract_type_id',
            'contract_status_id',
            'company_name',
            'contract_subject',
            'contract_value',
            'created_at',
            'active_from',
            'active_to',
        ],
    ]) ?>

</div>
