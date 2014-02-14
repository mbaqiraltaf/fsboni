<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class ResetForm extends CFormModel {

    public $email;
    private $_identity;


    /**
     * Declares the validation rules.
     * The rules state that email and password are required,
     * and password needs to be authenticated.
     */
    public function rules() {
        return array(
            // email and password are required
            array('email', 'required'),
            array('email', 'email'),
            array('email', 'authenticate'),
        );
    }

    /**
     * Declares attribute labels.
     */
    public function attributeLabels() {
        return array(
            'email' => 'Email Address',
        );
    }

    /**
     * Authenticates the email.
     * This is the 'authenticate' validator as declared in rules().
     */
    public function authenticate($attribute,$params)
    {
        if(!$this->hasErrors())
        {
            $this->_identity=new UserIdentity($this->email, '');
            if(!$this->_identity->authenticate1())
                $this->addError('email','The email address you entered does not exist.Please enter the correct email address');
        }
    }

}
