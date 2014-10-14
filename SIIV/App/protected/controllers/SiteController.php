<?php

class SiteController extends CController
{
	// Add filters that are getting called before executing any action
	public function filters()
    {
        return array(
            'accessControl',
        );
    }
	
	// We're overriding this method
	public function accessRules()
	{
		// Default action is allow.
		// We would like to only allow admin to view our protected page.
		return array(
			array
			(
				'allow',
				'actions'=>array('protected'),
				'users'=>array('admin'),
			),
			
			array
			(
				'deny',
				'actions'=>array('protected'),
				'users'=>array('*'),
			)
		);
	}
	
	public function actionIndex()
	{
		$this -> render('index');
	}
	
	public function actionLogin()
	{
		$model = new LoginForm();
		$form = new CForm('application.views.site.loginForm', $model);
	
		// If form is submitted and data is correct...
		if($form->submitted('submit') && $form->validate())
		{
			$identity = new UserIdentity($model->login,$model->password);
			
			// If we successfuly confirmed user credentials
			if($identity -> authenticate())
			{    
				// ...log in the user and redirect
				Yii::app()->user->login($identity);
				$this -> redirect(array('hola'));
			}
		}

		$this -> render('login', array('form' => $form));
	}
	
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(array('site/index'));
	}
	
	public function actionPublic()
	{
		$this -> render('public');
	}
	
	public function actionProtected()
	{
		$this -> render('protected');
	}
        
        /**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
			echo "Hola";
		}
	}
}