<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $u_id
 * @property string $u_name
 * @property string $u_surname
 * @property string $u_e-mail
 * @property string $u_position
 * @property string $u_role
 * @property string $u_password
 *
 * @property Tickets[] $tickets
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['u_name', 'u_surname', 'u_e-mail', 'u_position', 'u_role', 'u_password'], 'required'],
            [['u_name', 'u_surname', 'u_e-mail', 'u_position', 'u_role', 'u_password'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'u_id' => 'U ID',
            'u_name' => 'U Name',
            'u_surname' => 'U Surname',
            'u_e-mail' => 'U E Mail',
            'u_position' => 'U Position',
            'u_role' => 'U Role',
            'u_password' => 'U Password',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTickets()
    {
        return $this->hasMany(Tickets::className(), ['user_id' => 'u_id']);
    }
}
