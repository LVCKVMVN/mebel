<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tovary".
 *
 * @property int $id
 * @property string $name
 * @property string $info
 * @property string $razmery
 * @property string $price
 *
 * @property Zakaz[] $zakazs
 */
class TovaryModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tovary';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'info', 'razmery', 'price'], 'required'],
            [['name', 'info', 'razmery', 'price'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Наименовани',
            'info' => 'Описание',
            'razmery' => 'Размеры',
            'price' => 'Стоимость',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getZakazs()
    {
        return $this->hasMany(Zakaz::className(), ['tovar_id' => 'id']);
    }
}
