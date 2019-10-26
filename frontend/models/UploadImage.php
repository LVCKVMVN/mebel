<?php


namespace frontend\models;

use yii\base\Model;
use yii\web\UploadedFile;


class UploadImage extends Model
{

    public $avatar;

    public function rules()
    {
        return[
            [['avatar'], 'file', 'skipOnEmpty'=> false, 'extensions' => 'png, jpg'],];
    }

    public function upload()
    {
        if($this->validate()) {
            $this->avatar->saveAs('uploads/' . $this->avatar->baseName . '.' . $this->avatar->extension);
            return true;
        }else
            {
            return false;
            }
    }



}