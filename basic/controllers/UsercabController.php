<?php

namespace app\controllers;

use Yii;
use app\models\Users;
use app\models\UsersSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class UsercabController extends Controller{

	public function actionIndex(){
		return $this->render('index', [
			'user' => $user
		]);
	}
}
