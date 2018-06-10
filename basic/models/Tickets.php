<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tickets".
 *
 * @property int $t_id
 * @property int $room_id
 * @property int $user_id
 * @property string $date
 * @property string $start_time
 * @property string $end_time
 * @property string $confirmation
 *
 * @property Users $user
 * @property Rooms $room
 */
class Tickets extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tickets';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['room_id', 'user_id', 'date', 'start_time', 'end_time', 'confirmation'], 'required'],
            [['room_id', 'user_id'], 'integer'],
            [['date', 'start_time', 'end_time'], 'safe'],
            [['confirmation'], 'string', 'max' => 100],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['user_id' => 'u_id']],
            [['room_id'], 'exist', 'skipOnError' => true, 'targetClass' => Rooms::className(), 'targetAttribute' => ['room_id' => 'room_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            't_id' => 'T ID',
            'room_id' => 'Room ID',
            'user_id' => 'User ID',
            'date' => 'Date',
            'start_time' => 'Start Time',
            'end_time' => 'End Time',
            'confirmation' => 'Confirmation',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['u_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoom()
    {
        return $this->hasOne(Rooms::className(), ['room_id' => 'room_id']);
    }
}
