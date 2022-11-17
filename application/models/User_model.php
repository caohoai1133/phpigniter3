<?php

class User_model extends CI_Model{
    public $variable;
    public function __construct()
    {
        parent::__construct();
    }
    public function login($username,$pass){
        
        $this -> db -> select('username,password');
        $this -> db -> from('login');
        $this -> db -> where('username', $username);
        $this -> db -> where('password', $pass);
        $query = $this ->db ->get();
        if($query->num_rows()==1){
      
            echo "<script type='text/javascript'>alert('đăng nhập thành công!');</script>";
        }else{
            echo "<script type='text/javascript'>alert('đăng nhập thất bại!');</script>";
            
        }
        

    }
}
