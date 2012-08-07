<?php

class myUser extends sfBasicSecurityUser
{

  public function signIn($user)
  {
    $this->setAuthenticated(true);
    $this->setAttribute('user_id', $user->getId());
  }

  public function signOut()
  {
    $this->setAuthenticated(false);    
    $this->clearCredentials();    
  }

  public function getId()
  {
    return $this->getAttribute('user_id', 0);
  }
  
}


