<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
    {
        parent::__construct();

        $this->load->helper(['url']);
        $this->load->model(['Basic','Toko_m']);
    }   


	public function index()
	{
        $data['title'] = 'Dashboard';
		$data['nav'] = 'Dashboard';
		$data['Pemasukan'] = $this->Toko_m->laporan(getUserToko(),'Pemasukan');
		$data['Pengeluaran'] = $this->Toko_m->laporan(getUserToko(),'Pengeluaran');
		$data['lap'] = $this->Toko_m->lapToko('',getUserToko());

		$this->load->view('templates/head',$data);
		$this->load->view('templates/nav',$data);
		$this->load->view('dashboard/dashboard',$data);
		$this->load->view('templates/foot');
	}
}
