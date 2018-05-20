<?php 

//STATUS: READY
class User { 
    public $user_id = ''; 
    public $user_name = '';
    public $user_pw = '';
    public $user_fname = '';
    public $user_lname = '';
    public $user_role = '';
    
    function logout() { 
    $this->user_id = ''; 
    $this->user_name = ''; 
    $this->user_fname = '';
    $this->user_lname = '';
    $this->user_role = '';
    $this->user_office = '';
    $this->user_pw = '';
    $this->user_sn = '';
    }
} 

?> 