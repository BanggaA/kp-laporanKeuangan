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
		need_usr();

		if(userLvl() == 1) {
			$data['title'] = 'Dashboard';
			$data['nav'] = 'Dashboard';
			$data['Pemasukan'] = $this->Toko_m->laporan('','Pemasukan');
			$data['Pengeluaran'] = $this->Toko_m->laporan('','Pengeluaran');

			$data['transaksi'] = $this->Basic->getJoin("tb_transaksi","tb_toko","tb_transaksi.toko = tb_toko.toko_id");

			$this->load->view('general/templates/head',$data);
			$this->load->view('general/templates/nav',$data);
			$this->load->view('admin/dashboard',$data);
			$this->load->view('general/templates/foot');
		}elseif(userLvl() == 2){
			$data['title'] = 'Dashboard';
			$data['nav'] = 'Dashboard';
			$data['Pemasukan'] = $this->Toko_m->laporan(getUserToko(),'Pemasukan');
			$data['Pengeluaran'] = $this->Toko_m->laporan(getUserToko(),'Pengeluaran');
			$data['lap'] = $this->Toko_m->lapToko('',getUserToko());
	
			$this->load->view('general/templates/head',$data);
			$this->load->view('general/templates/nav',$data);
			$this->load->view('manager/dashboard',$data);
			$this->load->view('general/templates/foot');
		}else{
			redirect('akun/block');
		}
	}
}
