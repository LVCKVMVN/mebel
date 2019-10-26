<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "client".
 *
 * @property int $id
 * @property string $surname
 * @property string $name
 * @property string $patronymic
 * @property int $phone_number
 * @property string $address
 *
 * @property DostavkaModel[] $dostavkas
 * @property Zakaz[] $zakazs
 */
class ClientModel extends \yii\db\ActiveRecord
{
   /* public $fullName;*/
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'client';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['surname', 'name', 'patronymic', 'phone_number', 'address'], 'required'],
            [['phone_number'], 'string'],
            [['surname', 'name', 'patronymic', 'address'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'surname' => 'Фамилия',
            'name' => 'Имя',
            'patronymic' => 'Отчество',
            'fullName' => 'ФИО',
            'phone_number' => 'Номер телефона',
            'address' => 'Адрес',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */

   /* public function getFullName() {
        return $this->surname . ' ' . $this->name;
    }*/


    public function getDostavkas()
    {
        return $this->hasMany(DostavkaModel::className(), ['client' => 'id']);
    }

    // public function getZakazchikname() {  
    //     return $this->ClientModel->surname;
    // }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getZakazs()
    {
        return $this->hasMany(Zakaz::className(), ['zakazchik' => 'id']);
    }
}
