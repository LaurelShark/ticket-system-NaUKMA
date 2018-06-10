<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rooms".
 *
 * @property int $room_id
 * @property string $room_naming
 * @property string $room_location
 * @property int $room_capacity
 * @property string $room_features
 *
 * @property RoomsOccupations[] $roomsOccupations
 * @property Tickets[] $tickets
 */
class Rooms extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rooms';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['room_naming', 'room_location', 'room_capacity', 'room_features'], 'required'],
            [['room_capacity'], 'integer'],
            [['room_naming', 'room_location', 'room_features'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'room_id' => 'Room ID',
            'room_naming' => 'Room Naming',
            'room_location' => 'Room Location',
            'room_capacity' => 'Room Capacity',
            'room_features' => 'Room Features',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoomsOccupations()
    {
        return $this->hasMany(RoomsOccupations::className(), ['room_id' => 'room_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTickets()
    {
        return $this->hasMany(Tickets::className(), ['room_id' => 'room_id']);
    }
}
