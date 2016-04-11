<?php use yii\helpers\Html;

$this->title = "Contracts";
$indexes = array();


?>

<div>
    <h1><?= Html::encode($this->title) ?></h1>

    <table>
    <tr>
        <?php
            $contract = $contracts[0];
            foreach($contract->attributeLabels() as $index => $label) {
                echo "<th>$label</th>";
                $indexes[] = $index;
            }
        ?>
    </tr>
    <?php
        foreach ($contracts as $contract) { ?>
        <tr>
            <?php foreach($indexes as $index) { ?>
                <td>
                    <?= $contract->$index; ?>
                </td>
            <?php } ?>
        </tr>
   <?php } ?>
    </table>
</div>