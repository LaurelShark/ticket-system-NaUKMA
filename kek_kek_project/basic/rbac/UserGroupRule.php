<?php
namespace app\rbac;
 
use Yii;
use yii\rbac\Rule;

class UserGroupRole extends Rule{
	public $name = 'userGroup';

	public function execute ($user, $item, $params){
		 if (!\Yii::$app->user->isGuest) {
            $group = \Yii::$app->user->identity->group;
            if ($item->name === 'admin') {
                return $group == 'admin';
            } elseif ($item->name === 'simpleUser') {
                return $group == 'simpleUser';
            } 
        }
        return true;
	}
}