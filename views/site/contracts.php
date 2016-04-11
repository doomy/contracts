<?php use yii\helpers\Html; ?>

<div>
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