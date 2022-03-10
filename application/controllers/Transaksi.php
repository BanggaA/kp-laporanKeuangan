<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function __construct()
    {
        parent::__construct();

        $this->load->helper(['url']);
        $this->load->model('Basic');
    }   


	public function index()
	{
        $data['title'] = 'Transaksi';
		$data['nav'] = 'Transaksi';
		$this->load->view('templates/head',$data);
		$this->load->view('templates/nav',$data);

		$this->load->view('templates/foot');
	}
}
