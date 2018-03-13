<?php

class Auth extends CI_Controller
{

	public function logout()
	{

		unset($_SESSION);
		session_destroy();
		redirect("index.php/auth/login", "refresh");
	}
	public function login()
	{
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required|min_length[8]');
		if($this->form_validation->run() == TRUE){

			$username = $_POST['username'];
			$password = md5($_POST['password']); 

			$this->db->select('*');
			$this->db->from('users');
			$this->db->where(array('username' => $username, 'password' => $password));
			$query = $this->db->get();

 			$user = $query->row();

 			if($user->email){


 				$this->session->set_flashdata("success", "You are logged in");

 				$_SESSION['user_logged'] = TRUE;
 				$_SESSION['username'] = $user->username;

 				redirect("index.php/user/profile","refresh");
 			} else{
 				$this->session->set_flashdata("error", "No such account exists in database");
 				redirect("auth/login", "refresh");
 			}
 		}
		$this->load->view('login');
	}
	public function register()
	{
		if(isset($_POST['register'])){
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('password','Password','required|min_length[8]');
			$this->form_validation->set_rules('password','Confirm Password','required|min_length[8]|matches[password]');
			$this->form_validation->set_rules('phone','Phone','required|min_length[11]');

			if($this->form_validation->run() == TRUE){
				echo 'form validated';

				$data = array(
					'username'=>$_POST['username'],
					'email'=>$_POST['email'],
					'password'=>md5($_POST['password']),
					'gender'=>$_POST['gender'],
					'created_date'=>date('Y-m-d'),
					'phone'=>$_POST['phone']
				);
				$this->db->insert('users',$data);

				$this->session->set_flashdata("success","Your account has been registered. You can login now");
				redirect("index.php/Auth/register", "refresh");

			}
		}
		$this->load->view('register');
	}
	public function crud_views()
	{

		$this->load->view('crud_views');

	}

}