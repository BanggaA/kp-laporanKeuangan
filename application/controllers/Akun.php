<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {

	public function __construct()
    {
        parent::__construct();

        $this->load->helper(['url']);
        $this->load->model('Basic');
    }   


	public function index()
	{
        $data['title'] = 'Akun';
		$data['nav'] = 'Akun';
		$this->load->view('templates/head',$data);
		$this->load->view('templates/nav',$data);

		$this->load->view('templates/foot');
	}
}
