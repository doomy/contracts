<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "t_contract".
 *
 * @property integer $id
 * @property integer $contract_type_id
 * @property integer $contract_status_id
 * @property string $company_name
 * @property string $contract_subject
 * @property integer $contract_value
 * @property string $created_at
 * @property string $active_from
 * @property string $active_to
 *
 * @property TContractType $contractType
 * @property TContractStatus $contractStatus
 */
class TContract extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 't_contract';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'contract_type_id', 'contract_status_id', 'company_name', 'created_at', 'active_from', 'active_to'], 'required'],
            [['id', 'contract_type_id', 'contract_status_id', 'contract_value'], 'integer'],
            [['created_at', 'active_from', 'active_to'], 'safe'],
            [['company_name', 'contract_subject'], 'string', 'max' => 255],
            [['id'], 'unique'],
            [['contract_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => TContractType::className(), 'targetAttribute' => ['contract_type_id' => 'id']],
            [['contract_status_id'], 'exist', 'skipOnError' => true, 'targetClass' => TContractStatus::className(), 'targetAttribute' => ['contract_status_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'contract_type_id' => 'Contract Type ID',
            'contract_status_id' => 'Contract Status ID',
            'company_name' => 'Company Name',
            'contract_subject' => 'Contract Subject',
            'contract_value' => 'Contract Value',
            'created_at' => 'Created At',
            'active_from' => 'Active From',
            'active_to' => 'Active To',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContractType()
    {
        return $this->hasOne(TContractType::className(), ['id' => 'contract_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContractStatus()
    {
        return $this->hasOne(TContractStatus::className(), ['id' => 'contract_status_id']);
    }
}
