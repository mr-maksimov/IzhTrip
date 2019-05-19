<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "landmarks".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $create_date
 */
class Landmarks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'landmarks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content', 'create_date'], 'required'],
            [['title', 'content'], 'string'],
            [['create_date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => '№',
            'title' => 'Заголовок',
            'content' => 'Описание',
            'create_date' => 'Дата добавления',
        ];
    }
}
