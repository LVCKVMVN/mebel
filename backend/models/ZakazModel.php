<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "zakaz".
 *
 * @property int $id
 * @property int $zakazchik_id
 * @property int $dizainer_id
 * @property int $tovar_id
 * @property int $dost_id
 * @property int $predoplata
 * @property int $polnya_stoimost
 * @property string $data_dost
 *
 * @property ClientModel $zakazchik
 * @property EmployeeModel $dizainer
 * @property TovaryModel $tovar
 * @property DostavkaModel $dost
 */
class ZakazModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'zakaz';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['zakazchik_id', 'dizainer_id', 'tovar_id', 'dost_id', 'predoplata', 'polnya_stoimost', 'data_dost'], 'required'],
            [['zakazchik_id', 'dizainer_id', 'tovar_id', 'dost_id', 'predoplata', 'polnya_stoimost'], 'integer'],
            [['data_dost'], 'safe'],
            [['zakazchik_id'], 'exist', 'skipOnError' => true, 'targetClass' => ClientModel::className(), 'targetAttribute' => ['zakazchik_id' => 'id']],
            [['dizainer_id'], 'exist', 'skipOnError' => true, 'targetClass' => EmployeeModel::className(), 'targetAttribute' => ['dizainer_id' => 'id']],
            [['tovar_id'], 'exist', 'skipOnError' => true, 'targetClass' => TovaryModel::className(), 'targetAttribute' => ['tovar_id' => 'id']],
            [['dost_id'], 'exist', 'skipOnError' => true, 'targetClass' => DostavkaModel::className(), 'targetAttribute' => ['dost_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'zakazchik_id' => 'Заказчик',
            'dizainer_id' => 'Работник',
            'tovar_id' => 'Товар',
            'dost_id' => 'Вид доставки',
            'predoplata' => 'Предоплата',
            'polnya_stoimost' => 'Полная стоимость',
            'data_dost' => 'Ориентеровачная дата доставки',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getZakazchik()
    {
        return $this->hasOne(ClientModel::className(), ['id' => 'zakazchik_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDizainer()
    {
        return $this->hasOne(EmployeeModel::className(), ['id' => 'dizainer_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTovar()
    {
        return $this->hasOne(TovaryModel::className(), ['id' => 'tovar_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDost()
    {
        return $this->hasOne(DostavkaModel::className(), ['id' => 'dost_id']);
    }
}
