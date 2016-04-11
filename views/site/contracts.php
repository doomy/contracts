<?php use yii\helpers\Html;

$this->title = "Contracts";

?>

<div>
    <h1><?= Html::encode($this->title) ?></h1>

    <table>
    <?php
        foreach ($contracts as $contract) { ?>
        <tr>
            <td>
                <?= $contract->contract_subject; ?>
            </td>
        </tr>
   <?php } ?>
    </table>
</div>