<?php

namespace app\controllers;

use Yii;
use app\models\Admins;
use app\models\AdminsSearch;
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
