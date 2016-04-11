<?php

use yii\grid\GridView;

$this->title = "Contracts";
$indexes = array();

echo "<h1>{$this->title}</h1>";

echo GridView::widget([
    'dataProvider' => $dataProvider,
]);



?>

