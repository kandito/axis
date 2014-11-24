<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		//find user by username
		$user = Users::model()->findByAttributes(array('username' => $this->username));

		if($user === null)
			//if user not exist
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($user->password !== md5($this->password))
			//if password not valid
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else 
		{
			//save id
			$this->_id = $user->id_user;
			//save role state
			
			if($user->role == 1) {
				$this->setState('roles', 'admin');      
			} else { 
				$this->setState('roles', 'user');      
			}
			
			$this->errorCode=self::ERROR_NONE;
		}

		return !$this->errorCode;
	}
}