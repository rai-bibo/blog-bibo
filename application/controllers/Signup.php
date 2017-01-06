<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Signup extends CI_Controller {

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
	),
        array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required',
                'errors' => array(
                        'required' => 'the field %s is required.',

                ),

        ));

	public function index()
	{

		$data = array(
			'username' => $this->input->post('username'),
			'password' => sha1($this->input->post('password')),
			'email' => $this->input->post('email')
);
		$this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');
		$this->form_validation->set_rules($this->validation);
		if ($this->form_validation->run() !== FALSE)
                {
			$this->db->insert('users', $data);
                }				
                $this->load->view('templates/header');
		$this->load->view('signup');
		$this->load->view('templates/footer');
	}
}
