<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mycontroller extends CI_Controller
{


	public function viewlogin()
	{
		$this->load->view('login.php');
		setcookie("username", "");
		setcookie("password", "");
	}
	public function loginIG()
	{

		$username = $this->input->post('user_name_lg');
		$pass = $this->input->post('passlg');
		$this->load->model('User_model');
		$result = $this->User_model->login($username, $pass);
		if ($result) {
			if(isset($_COOKIE['errorlogin'])){
				unset($_COOKIE['errorlogin']);
			}
			session_start();
			header("location:/IGlogin/Dashboard/dashboard");
			setcookie("username", $username);
			setcookie('password', md5($pass));
			
			$_SESSION["username"]= $username;
			$_SESSION["login_time_stamp"] = time(); 
		} else {
			
			setcookie("errorlogin", "Sai tên đăng nhập hoặc mật khẩu!");
			header("location:/IGlogin/Mycontroller/viewlogin");
			
		}
	}
	public function viewregister()
	{
		$this->load->view("register.php");
	}
	public function register()
	{

		$usernamerg = $this->input->post("user_name_rg");
		$passrg = $this->input->post("passrg");
		$passrg_again = $this->input->post("passrg_again");
		$fullname = $this->input->post("fullname");
		if ($passrg == $passrg_again) {
			$this->load->model('User_model');
			$checkus = $this->User_model->checkusername($usernamerg);
			if ($checkus) {
				setcookie("errorregister", "tên đăng nhập đã tồn tại");
				
				
			} else {
				$this->User_model->register($usernamerg, $passrg, $fullname);
				// echo "<script type='text/javascript'>alert('tạo tài khoảng thành công!');</script>";
				setcookie("successregister","tạo tài khoảng thành công!");
				header("location:/IGlogin/Mycontroller/viewlogin");
			}
		} else {
			setcookie("errorregister", "Nhập lại mật khẩu không trùng khớp!");
			
		}
	}
	
}
