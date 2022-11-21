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
    public function register($usernamerg,$passrg,$fullname){
        // $sql="insert into user (username,password,fullname) values ($usernamerg,$passrg,$fullname)";
        // $this -> db ->query($sql);
        $data = array(
            "username"=>$usernamerg,
            "password"=>$passrg,
            "fullname"=>$fullname
        );
        $this -> db ->insert("user",$data);
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
    public function checkpass( $username,$oldpass){
        $this ->db -> select('username,password');
        $this -> db ->from('user');
        $this -> db-> where('username',$username);
        $this -> db-> where('password',$oldpass);
        $query = $this ->db ->get();
        if($query->num_rows()==1){
            return $query->num_rows() ; 
        }else{   
            return FALSE;
            
        }

    }
    public function changepass($username,$oldpass,$newpass){
        $data=['password'=>$newpass];
       $this -> db -> where("username",$username);
       $this -> db -> where("password",$oldpass);
       $this ->db ->update("user",$data);
        // $query = $this ->db ->get();
        // if($query->num_rows()==1){
        //     return $query->num_rows() ; 
        // }else{   
        //     return FALSE;
            
        // }
    }
}
