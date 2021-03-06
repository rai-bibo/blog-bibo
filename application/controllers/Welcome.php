<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {

private $validation = array(
        array(
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required'
        ),
        array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required',
                'errors' => array(
                        'required' => 'You must provide a %s.',
                ),
        ));

	public function index()
	{
		$this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');
		$this->form_validation->set_rules($this->validation);
		if ($this->form_validation->run() !== FALSE)
                {
			//reroute to members area
                }				
                $this->load->view('templates/header');
		$this->load->view('welcome_message');
		$this->load->view('templates/footer');
	}
}
