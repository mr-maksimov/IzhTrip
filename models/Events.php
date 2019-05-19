<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "events".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $create_date
 * @property string $date_event
 * @property string $date_event_finish
 */
class Events extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'events';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content', 'create_date', 'date_event', 'date_event_finish'], 'required'],
            [['title', 'content'], 'string'],
            [['create_date', 'date_event', 'date_event_finish'], 'safe'],
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
            'content' => 'Содержание',
            'create_date' => 'Дата загрузки',
            'date_event' => 'Дата начала',
            'date_event_finish' => 'Дата окончания',
        ];
    }
}
