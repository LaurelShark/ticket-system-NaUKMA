<?php
namespace app\commands;
 
use Yii;
use yii\console\Controller;
use \app\rbac\UserGroupRule;

class RbacController extends Controller(){
	public function actionInit(){
		$authManager = \Yii::$app->authManager;

		$simpleUser = $authManager->createRole('simpleUser');
		$admin = $authManager->createRole('admin');
// Create simple, based on action{$NAME} permissions
		$login  = $authManager->createPermission('login');
        $logout = $authManager->createPermission('logout');
        $error  = $authManager->createPermission('error');
        $signUp = $authManager->createPermission('sign-up');
        $index  = $authManager->createPermission('index');
        $view   = $authManager->createPermission('view');
        $update = $authManager->createPermission('update');
        $delete = $authManager->createPermission('delete');
        $delete = $authManager->createPermission('create');

// Add permissions in Yii::$app->authManager
        $authManager->add($login);
        $authManager->add($logout);
        $authManager->add($error);
        $authManager->add($signUp);
        $authManager->add($index);
        $authManager->add($view);
        $authManager->add($update);
        $authManager->add($delete);
        $authManager->add($create);

        // Add rule, based on UserExt->group === $user->group
        $userGroupRule = new UserGroupRule();
        $authManager->add($userGroupRule);

        // Add rule "UserGroupRule" in roles
        $simpleUser->ruleName = $userGroupRule->name;
        $admin->ruleName  = $userGroupRule->name;

        // Add roles in Yii::$app->authManager
        $authManager->add($simpleUser);
        $authManager->add($admin);

        // Add permission-per-role in Yii::$app->authManager
        // User
        $authManager->addChild($simpleUser, $login);
        $authManager->addChild($simpleUser, $logout);
        $authManager->addChild($simpleUser, $error);
        $authManager->addChild($simpleUser, $signUp);
        $authManager->addChild($simpleUser, $index);
        $authManager->addChild($simpleUser, $view);
        $authManager->addChild($simpleUser, $create);

        //Admin
        $authManager->addChild($admin, $delete);
        $authManager->addChild($admin, $update);
        $authManager->addChild($admin, $simpleUser);


 
	}
}