<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	
	public function dashboard($page="dashboard")
	{
		
		if(!file_exists("application/views/teamplate/".$page.".php")){
			echo "Sorry, file does not exist";
		}
		else{
			$data['title']=$page;
			$this->load->view('dashboard.php',$page);
			$this ->load-> view('menu.php',$data);
			// $this->load->view("teamplate/".$page.".php");
		}
	}
	
	public function changepass(){
		session_start();
		$username = $_SESSION['username'];
		$oldpass = $this-> input-> post('old_password');
		$newpass = $this -> input -> post('new_password');
		$newpassag= $this -> input -> post('new_password_again');
		if($newpass!== $newpassag){
			echo "<script type='text/javascript'>alert('Nhập lại mật khẩu không trùng khớp!');</script>";
		}
		else{
			// echo "<script type='text/javascript'>alert('$username, $oldpass, $newpass,$newpassag');</script>";
			$this ->load->model('User_model');
			$checkpass = $this ->User_model->checkpass($username,$oldpass);
			if($checkpass){
				$this->load->model('User_model');
				$this -> User_model-> changepass($username,$oldpass,$newpass);
				echo "<script type='text/javascript'>alert('đổi mật khẩu thành công');</script>";	
			}
			else{
				echo "<script type='text/javascript'>alert('Mật khẩu cũ không đúng');</script>";	
			}
		}
		
		
	}
	public function logout(){
		unset($_SESSION["username"]);
		header("location:/IGlogin/Mycontroller/viewlogin");
	}
	
}