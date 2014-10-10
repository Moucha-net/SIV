<?php

// This is our login form model. It describes all the fields in the form and rules associated with them
class LoginForm extends CFormModel
{
	public $login;
	public $password;

	private $_identity;
	
	// Rules for validating the form
	public function rules()
	{
		return array(
			array('login, password', 'required'),
			array('password', 'authenticate'),
		);
	}
	
	// Our special method to validate user/password pair - see array above
	public function authenticate($attribute,$params)
    {
        $this->_identity=new UserIdentity($this->login,$this->password);
        if(!$this->_identity->authenticate())
            $this->addError('password','Incorrect login or password.');
    }
}