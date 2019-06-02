<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "feedback".
 *
 * @property int $id
 * @property string $mail
 * @property string $phone
 * @property string $text
 * @property string $name
 * @property string $date
 */
class Feedback extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'feedback';
    }

     public function beforeValidate()
     {
        if($this->getIsNewRecord()){
            $this->date = date('y.m.d');
        }
        return parent::beforeValidate();
     }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mail', 'text', 'name'], 'required'],
            [['mail', 'phone', 'text', 'name'], 'string'],
            [['date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => '№',
            'mail' => 'Почта',
            'phone' => 'Телефон',
            'text' => 'Обращение',
            'name' => 'ФИО',
            'date' => 'Дата',
        ];
    }
}
