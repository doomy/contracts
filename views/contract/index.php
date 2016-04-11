<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\Models\TContractSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tcontracts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tcontract-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tcontract', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'contract_type_id',
            'contract_status_id',
            'company_name',
            'contract_subject',
            // 'contract_value',
            // 'created_at',
            // 'active_from',
            // 'active_to',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
