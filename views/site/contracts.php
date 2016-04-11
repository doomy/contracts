<?php

use yii\grid\GridView;

$this->title = "Contracts";
$indexes = array();

echo "<h1>{$this->title}</h1>";

echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'id',
        'contract_type_id',
        'contract_status_id',
        'company_name',
        'contract_subject',
        'contract_value',
        'created_at',
        'active_from',
        'active_to'
    ]
]);



?>

