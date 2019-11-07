<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();		
	}
	public function login() {
		$this->load->view('auth/login');
	}

	public function logout() {
		$this->load->view('welcome');
	}

	public function signup(){
		$this->load->view('auth/register1');
	}

	
	public function signup_post(){
		$config = array(
			array(
					'field' => 'firstname',
					'label' => 'First Name',
					'rules' => 'required'
			),
			array(
					'field' => 'lastname',
					'label' => 'Last Name',
					'rules' => 'required',					
			),
			array(
					'field' => 'address',
					'label' => 'Address',
					'rules' => 'required'
			),
			array(
				'field' => 'city',
				'label' => 'City',
				'rules' => 'required'
			),
			array(
				'field' => 'state',
				'label' => 'State',
				'rules' => 'required'
			),
			array(
				'field' => 'zip',
				'label' => 'Zip Code',
				'rules' => 'required'
			),
			array(
				'field' => 'birthday',
				'label' => 'Date of Birth',
				'rules' => 'required'
			),
			array(
				'field' => 'id_number',
				'label' => "Driver's License/ID Number",
				'rules' => 'required'
			),
			array(
				'field' => 'phonenumber',
				'label' => "Mobile Phone Number",
				'rules' => 'required'
			),
			array(
					'field' => 'email',
					'label' => 'Email',
					'rules' => 'required|valid_email'
			)
		);
		$this->form_validation->set_rules($config);
		if ($this->form_validation->run() == FALSE)
            {
				$this->load->view('auth/register1');
        	}
        else
            {
				$this->load->model('Auth','');
				$this->Auth->register();
				$sessiondata = array(
					'firstname' => $_POST['firstname'],
					'lastname'  => $_POST['lastname'],
					'address'   => $_POST['address'],
					'city'      => $_POST['city'],
					'state'     => $_POST['state'],
					'zip'       => $_POST['zip'],
					'birthday'  => $_POST['birthday'],
					'id_number' => $_POST['id_number'],					
					'phonenumber'  => $_POST['phonenumber'],
					'email'  => $_POST['email'],					
				);
			
				$this->session->set_userdata($sessiondata);				
				
				$data['randomid'] = mt_rand(10000000000,99999999999);
				// $config = Array(
				// 	'protocol' => 'smtp', 
				// 	'smtp_host' => 'ssl://smtp.googlemail.com', 
				// 	'smtp_port' => 465, 
				// 	'wordrap' => 'true'
				// );
				// $message = 'dfdsfgfsdgds';
				// $this->load->library('email');
				// $this->email->initialize($config);
				// $this->email->set_newline("\r\n");
				// $this->email->from('email@gmail.com','name '); // change it to yours
				// $this->email->to('david.y2272017@gmail.com');// change it to yours
				// $this->email->subject('How do you do');
				// $this->email->message($message);
				// $this->email->send();			

				$this->load->view('auth/register2',$data);
            }
		
	}
	//email verification
	public function signup2(){		
		$this->load->view('auth/register2');
	}
	public function signup2_post(){		
		$digit = $_POST['randomid'];
		$code = $_POST['email_code'];
		$data['randomid'] = mt_rand(10000000000,99999999999);
		if(substr($digit,-6) === $code){			
			$this->load->view('auth/register3',$data);		}
		else{
			$data['code_error'] = 'Your code is invaild';
			$this->load->view('auth/register2',$data);
		}
	}
	//phonenumber verification
	public function signup3(){		 
		$this->load->view('auth/register3');
	}
	public function signup3_post(){		
		$digit = $_POST['randomid'];
		$code = $_POST['phone_code'];
		$data['randomid'] = mt_rand(10000000000,99999999999);
		if(substr($digit,-6) === $code){			
			$this->load->view('auth/register4',$data);		}
		else{
			$data['code_error'] = 'Your code is invaild';
			$this->load->view('auth/register3',$data);
		}
	}
	// id verification
	public function signup4(){
		$this->load->view('auth/register4');
	}
	//
	public function signup5(){
		$this->load->view('auth/register5');
	}
	public function signup5_post(){
		$config = array(
			array(
					'field' => 'username',
					'label' => 'User Name',
					'rules' => 'required'
			),
			array(
					'field' => 'password',
					'label' => 'Password',
					'rules' => 'required',					
			),
			array(
					'field' => 'rpassword',
					'label' => 'Confirm password',
					'rules' => 'required'
			),
			array(
				'field' => 'security_question1',
				'label' => 'Question No 1',
				'rules' => 'required'
			),
			array(
				'field' => 'answer1',
				'label' => 'Answer No 1',
				'rules' => 'required'
			),
			array(
				'field' => 'security_question2',
				'label' => 'Question No 2',
				'rules' => 'required'
			),
			array(
				'field' => 'answer2',
				'label' => 'Answer No 2',
				'rules' => 'required'
			),
			array(
				'field' => 'security_question3',
				'label' => "Driver's License/ID Number",
				'rules' => 'required'
			),
			array(
				'field' => 'answer3',
				'label' => "Answer No 3",
				'rules' => 'required'
			)
		);
		if ($_POST['agree1'] == true && $_POST['agree2'] == true && $_POST['agree3'] == true) {
			if ($this->form_validation->run() == FALSE)
             {
			    $data['error'] = "Confirm password again";
		 		$this->load->view('auth/register5');
		 	}
		    else if($_POST['password'] == $_POST['rpassword']){
		 		$this->load->view('auth/register5');
		    }
          else
             {
				$this->load->model('Auth','');
				$this->Auth->register2();
				redirect("/home");	
			}
		}
		else{
			$data['error'] = "Please check agree items";
			$this->load->view('auth/register5',$data);
		}

	}

	public function forgetpassword(){
		$this->load->view('auth/forgetpassword');
	}

}
