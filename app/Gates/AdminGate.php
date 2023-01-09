<?php
namespace App\Gates;

class AdminGate{
    
    public function check_admin($user)
    {
        if($user->email === 'admin111@gmail.com')
        {
            return true;
        }
        else{
            return false;
        }
    }
  
}