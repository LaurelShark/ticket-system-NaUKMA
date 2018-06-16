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
			if(!user){
				return $this->render('index', ['failure' => true]);
			}
			$_SESSION['user'] = $user;

			if(is_a($user, Admins::className())){
				return $this->redirect(['admincab/index']);
			}

			if(is_a($user, Users::className())){
				return $this->redirect(['usercab/index']);
			}
		}
		$_SESSION['user'] = null;
		return $this->render('index');
	}

	function getUser($email, $password){
		if ($user = 
			Admins::findOne([
			'a_email' => $email,
			'a_password' => $password
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
