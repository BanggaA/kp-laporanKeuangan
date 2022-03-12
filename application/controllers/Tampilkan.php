<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tampilkan extends CI_Controller {

	public function __construct()
    {
        parent::__construct();

        $this->load->helper(['url']);
        $this->load->model('Basic');
    }   


	public function index()
	{
        $data['title'] = 'Tampilkan Transaksi';
		$data['nav'] = 'Tampilkan';
		$this->load->view('templates/head',$data);
		$this->load->view('templates/nav',$data);
		$this->load->view('Dashboard/Tampilkan');
		$this->load->view('templates/foot');
	}
}
