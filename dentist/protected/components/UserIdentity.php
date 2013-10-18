<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;

	public function authenticate()
	{
	  	/** Logs in the user using the given username and password in the model.
	     * @return boolean whether login is successful
         */

		$user=User::model()->findByAttributes(array('id_document'=>$this->username));
		
		if($user===null)
		{
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		}
		else
		{
			if($user->password!==$user->encrypt($this->password))
			{
				$this->errorCode=self::ERROR_PASSWORD_INVALID;
			}
			else
			{
				$this->_id = $user->id_document;
				if(null===$user->last_login_time)
				{
					$lastLogin = time();
				}
				else
				{
					$lastLogin = strtotime($user->last_login_time);
				}
				$this->setState('lastLoginTime', $lastLogin);
				$this->errorCode=self::ERROR_NONE;
			}
		}
		return !$this->errorCode;
	}

	public function getId()
	{
		return $this->_id;
	}
}