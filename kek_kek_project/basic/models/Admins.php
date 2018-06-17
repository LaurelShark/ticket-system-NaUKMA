<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "admins".
 *
 * @property int $a_id
 * @property string $a_surname
 * @property string $a_name
 * @property string $a_fathname
 * @property string $a_email
 * @property string $a_password
 *
 * @property Tickets[] $tickets
 */
class Admins extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'admins';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['a_surname', 'a_name', 'a_fathname', 'a_email', 'a_password'], 'required'],
            [['a_surname', 'a_name', 'a_fathname', 'a_email', 'a_password'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'a_id' => 'A ID',
            'a_surname' => 'A Surname',
            'a_name' => 'A Name',
            'a_fathname' => 'A Fathname',
            'a_email' => 'A Email',
            'a_password' => 'A Password',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTickets()
    {
        return $this->hasMany(Tickets::className(), ['considered_by' => 'a_id']);
    }
}
