<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "dostavka".
 *
 * @property int $id
 * @property string $type
 * @property int $price_dost
 *
 * @property Zakaz[] $zakazs
 */
class DostavkaModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dostavka';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'price_dost'], 'required'],
            [['price_dost'], 'integer'],
            [['type'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Тип',
            'price_dost' => 'Стоимость',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getZakazs()
    {
        return $this->hasMany(Zakaz::className(), ['dost_id' => 'id']);
    }
}
