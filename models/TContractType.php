<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "t_contract_type".
 *
 * @property integer $id
 * @property string $contract_type
 *
 * @property TContract[] $tContracts
 */
class TContractType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 't_contract_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['contract_type'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'contract_type' => 'Contract Type',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTContracts()
    {
        return $this->hasMany(TContract::className(), ['contract_type_id' => 'id']);
    }
}
