<?php

namespace app\controllers;

use Yii;
use yii\models\Admins;
use yii\models\AdminsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class AdmincabController extends Controller{
	public function actionIndex(){
		return $this->render('index', [
			'user' => $user
		]);
	}
}