<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property int $id
 * @property string $surname
 * @property string $name
 * @property string $patronymic
 * @property string $datebirth
 * @property int $post
 *
 * @property PostModel $post0
 * @property Zakaz[] $zakazs
 */
class EmployeeModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['surname', 'name', 'patronymic', 'datebirth', 'post'], 'required'],
            [['datebirth'], 'safe'],
            [['post'], 'integer'],
            [['surname', 'name', 'patronymic'], 'string', 'max' => 255],
            [['post'], 'exist', 'skipOnError' => true, 'targetClass' => PostModel::className(), 'targetAttribute' => ['post' => 'id']],
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
            'datebirth' => 'Дата рождения',
            'post' => 'Должность',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPost0()
    {
        return $this->hasOne(PostModel::className(), ['id' => 'post']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getZakazs()
    {
        return $this->hasMany(Zakaz::className(), ['dizainer_id' => 'id']);
    }
}
