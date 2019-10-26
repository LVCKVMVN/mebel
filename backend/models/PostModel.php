<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property string $name_post
 * @property int $salary
 *
 * @property EmployeeModel[] $employees
 */
class PostModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_post', 'salary'], 'required'],
            [['salary'], 'integer'],
            [['name_post'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_post' => 'Наименование должности',
            'salary' => 'Заработная плата',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployees()
    {
        return $this->hasMany(EmployeeModel::className(), ['post' => 'id']);
    }
}
