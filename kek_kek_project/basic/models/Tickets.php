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
 * @property int $considered_by
 * @property string $status
 *
 * @property Users $user
 * @property Rooms $room
 * @property Admins $consideredBy
 */
class Tickets extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tickets';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['room_id', 'user_id', 'date', 'start_time', 'end_time', 'considered_by', 'status'], 'required'],
            [['room_id', 'user_id', 'considered_by'], 'integer'],
            [['date', 'start_time', 'end_time'], 'safe'],
            [['status'], 'string', 'max' => 100],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['user_id' => 'u_id']],
            [['room_id'], 'exist', 'skipOnError' => true, 'targetClass' => Rooms::className(), 'targetAttribute' => ['room_id' => 'room_id']],
            [['considered_by'], 'exist', 'skipOnError' => true, 'targetClass' => Admins::className(), 'targetAttribute' => ['considered_by' => 'a_id']],
        ];
    }

    /**
     * @inheritdoc
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
            'considered_by' => 'Considered By',
            'status' => 'Status',
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getConsideredBy()
    {
        return $this->hasOne(Admins::className(), ['a_id' => 'considered_by']);
    }
}
