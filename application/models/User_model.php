<?php

class User_model extends CI_Model{
    public $variable;
    public function __construct()
    {
        parent::__construct();
    }
    public function login($username,$pass){
        
        $this -> db -> select('username,password');
        $this -> db -> from('user');
        $this -> db -> where('username', $username);
        $this -> db -> where('password', $pass);
        $query = $this ->db ->get();
        if($query->num_rows()==1){
            return $query->num_rows() ; 
        }else{   
            return FALSE;
            
        }
        

    }
    public function register($usernamerg,$passrg,$passrg_again){
        $sql="insert into user (username,password,fullname) values ($usernamerg,$passrg,$passrg_again)";
        $this -> db ->query($sql);
    }
    public function checkusername($usernamerg){
         
        $this -> db -> select('username');
        $this -> db -> from('user');
        $this -> db -> where('username', $usernamerg);
        $query = $this ->db ->get();
        if($query->num_rows()==1){
            return $query->num_rows() ; 
        }else{   
            return FALSE;
            
        }
    }
}
