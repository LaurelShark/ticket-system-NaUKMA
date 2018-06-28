<?php

namespace app\controllers;

use Yii;
use yii\models\Users;
use yii\models\UsersSearch;
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