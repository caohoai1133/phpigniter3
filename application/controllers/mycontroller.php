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
			// echo "<script type='text/javascript'>alert('đăng nhập thành công!');</script>";
			$this->load->view("dashboard.php");
			setcookie("username", $username);
			setcookie('password', md5($pass));
		} else {
			echo "<script type='text/javascript'>alert('đăng nhập thất bại!');</script>";
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
				echo "<script type='text/javascript'>alert('tên đăng nhập đã tồn tại');</script>";
				
			} else {
				$this->User_model->register($usernamerg, $passrg, $fullname);
				echo "<script type='text/javascript'>alert('tạo tài khoảng thành công!');</script>";
			}
		} else {
			echo "<script type='text/javascript'>alert('Nhập lại mật khẩu không trùng khớp!');</script>";
		}
	}
}
