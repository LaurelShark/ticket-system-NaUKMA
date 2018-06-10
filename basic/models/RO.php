<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rooms_occupations".
 *
 * @property int $ro_id
 * @property int $room_id
 * @property int $occupation_id
 *
 * @property Rooms $room
 * @property Occupations $occupation
 */
class RO extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rooms_occupations';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['room_id', 'occupation_id'], 'required'],
            [['room_id', 'occupation_id'], 'integer'],
            [['room_id'], 'exist', 'skipOnError' => true, 'targetClass' => Rooms::className(), 'targetAttribute' => ['room_id' => 'room_id']],
            [['occupation_id'], 'exist', 'skipOnError' => true, 'targetClass' => Occupations::className(), 'targetAttribute' => ['occupation_id' => 'o_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ro_id' => 'Ro ID',
            'room_id' => 'Room ID',
            'occupation_id' => 'Occupation ID',
        ];
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
    public function getOccupation()
    {
        return $this->hasOne(Occupations::className(), ['o_id' => 'occupation_id']);
    }
}
