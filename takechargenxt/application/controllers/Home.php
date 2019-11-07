<?php

class Home extends CI_Controller {
    public function index()
	{
		$this->load->view('common/header');
		$this->load->view('land/home');
		$this->load->view('common/footer');
	}

}
