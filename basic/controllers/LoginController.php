<?php

namespace app\controllers;

use app\models\Admins;
use app\models\Users;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class LoginController extends Controller{

	public function actionIndex(){

		if(\Yii::$app->request->isPost){
			$email = $POST['email'];
			$password = $POST['password'];

			$user = $this->getUser($email, $password);
			if(!$user){
							echo 's22222222';

				return $this->render('/site/login', ['failure' => true]);
			}
			$_SESSION['user'] = $user;
			echo get_class($user);
			if(is_a($user, Admins::className())){
				echo 'useeeeeeer';
				return $this->redirect(['admincab/index']);
			}
			if(is_a($user, Users::className())){
				echo 'asdjfkas';
				return $this->redirect(['usercab/index']);
			}
			echo "string";
		}
		$_SESSION['user'] = null;
		return $this->render('/site/login');
	}

	function getUser($email, $password){
		var_dump(Admins::findAll([]));
		if ($user = 
			Admins::findOne([
			//s'a_email' => $email,
			//'a_password' => $password
		])) {
			return $user;
		}
		if ($user = 
			Users::findOne([
			'u_e-mail' => $email,
			'u_password' => $password
		])) {
			return $user;
		}
		return null;
	}
}
