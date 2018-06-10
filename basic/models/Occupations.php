<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "occupations".
 *
 * @property int $o_id
 * @property string $o_date
 * @property string $o_starttime
 * @property string $o_endtime
 *
 * @property RoomsOccupations[] $roomsOccupations
 */
class Occupations extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'occupations';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['o_date', 'o_starttime', 'o_endtime'], 'required'],
            [['o_date', 'o_starttime', 'o_endtime'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'o_id' => 'O ID',
            'o_date' => 'O Date',
            'o_starttime' => 'O Starttime',
            'o_endtime' => 'O Endtime',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoomsOccupations()
    {
        return $this->hasMany(RoomsOccupations::className(), ['occupation_id' => 'o_id']);
    }
}
