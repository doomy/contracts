<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "t_contract_status".
 *
 * @property integer $id
 * @property string $contract_status
 *
 * @property TContract[] $tContracts
 */
class TContractStatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 't_contract_status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['contract_status'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'contract_status' => 'Contract Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTContracts()
    {
        return $this->hasMany(TContract::className(), ['contract_status_id' => 'id']);
    }
}
