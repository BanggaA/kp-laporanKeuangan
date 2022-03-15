<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function __construct()
    {
        parent::__construct();

        $this->load->helper(['url']);
        $this->load->model(['Basic','Toko_m']);
    }   


	public function index()
	{
        $data['title'] = 'Transaksi';
		$data['nav'] = 'Transaksi';
		
		$data['pemasukan'] = $this->Toko_m->getkatIn( getUserToko());
		$data['pengeluaran'] = $this->Toko_m->getkatOut( getUserToko());

		$data['lap'] = $this->Toko_m->groupLap(getUserToko());

		$this->load->view('templates/head',$data);
		$this->load->view('templates/nav',$data);
		$this->load->view('dashboard/Transaksi/Transaksi',$data);
		$this->load->view('templates/foot');
	}

	public function detail($id){
		
        $data['title'] = 'Transaksi';
		$data['nav'] = 'Transaksi';

		$data['kat'] = $this->Toko_m->getkatAll(getUserToko());
		$data['pemasukan'] = $this->Toko_m->getkatIn( getUserToko());
		$data['pengeluaran'] = $this->Toko_m->getkatOut( getUserToko());
		$data['lap'] = $this->Toko_m->getLapById(getUserToko(),$id);

		$this->load->view('templates/head',$data);
		$this->load->view('templates/nav',$data);
		$this->load->view('dashboard/Transaksi/detail',$data);
		$this->load->view('templates/foot');
	}




	public function tambah(){
        
        $waktu		= $this->input->POST('waktu');
        $transaksi	= $this->input->POST('transaksi');
        $jenis		= $this->input->POST('jenis');
        $kategori	= $this->input->POST('kategori');
        $nominal	= $this->input->POST('nominal');		

		$this->form_validation->set_rules('waktu', 'waktu', 'required|trim');
		$this->form_validation->set_rules('transaksi', 'transaksi', 'required|trim');
		$this->form_validation->set_rules('jenis', 'jenis', 'required|trim');
		$this->form_validation->set_rules('kategori', 'kategori', 'required|trim');
		$this->form_validation->set_rules('nominal', 'nominal', 'required|trim');
		
		$data = array(
			'waktu' 		=> $waktu,
			'transaksi'   	=> $transaksi,
			'jenis'   		=> $jenis,
			'kategori'   	=> $kategori,
			'nominal'   	=> $nominal,
			'toko' 			=> getUserToko()
		);
	
	
		if (($jenis == 'Pemasukan' || $jenis == 'Pengeluaran') && $this->form_validation->run())  {
			$this->Basic->add('tb_transaksi', $data);
        };
		redirect($_SERVER['HTTP_REFERER'],'refresh');
    }

	public function tambahByTgl(){
        
        $waktu		= $this->input->POST('waktu');
        $transaksi	= $this->input->POST('transaksi');
        $kategori	= $this->input->POST('kategori');
        $nominal	= $this->input->POST('nominal');		

		$this->form_validation->set_rules('waktu', 'waktu', 'required|trim');
		$this->form_validation->set_rules('transaksi', 'transaksi', 'required|trim');
		$this->form_validation->set_rules('kategori', 'kategori', 'required|trim');
		$this->form_validation->set_rules('nominal', 'nominal', 'required|trim');
		
		$arr = explode("-",$kategori);

		$data = array(
			'waktu' 		=> $waktu,
			'transaksi'   	=> $transaksi,
			'jenis'   		=> $arr[0],
			'kategori'   	=> $arr[1],
			'nominal'   	=> $nominal,
			'toko' 			=> getUserToko()
		);
	
	
		if (($arr[0] == 'Pemasukan' || $arr[0] == 'Pengeluaran') && $this->form_validation->run())  {
			$this->Basic->add('tb_transaksi', $data);
        };
		redirect('transaksi');
    }

    public function update(){

        $transaksi_id  	= $this->input->POST('transaksi_id');
        $kategori  		= $this->input->POST('kategori');
        $transaksi		= $this->input->POST('transaksi');
        $nominal		= $this->input->POST('nominal');		
        $transaksi_id  	= $this->input->POST('transaksi_id');
		 

        $this->form_validation->set_rules('kategori', 'kategori', 'required|trim');
		
		$data =[
			'transaksi'   	=> $transaksi,
			'kategori'   	=> $kategori,
			'nominal'   	=> $nominal,
			'toko' 			=> getUserToko()
        ];

        if ($this->form_validation->run()) {
            $this->Basic->update("transaksi_id",$transaksi_id,'tb_transaksi', $data);
            }
		redirect($_SERVER['HTTP_REFERER'],'refresh');

    }

    public function delete(){

        $transaksi_id  	= $this->input->POST('transaksi_id');
        
		$this->Basic->delete("transaksi_id",$transaksi_id, 'tb_transaksi');
		redirect($_SERVER['HTTP_REFERER'],'refresh');
	}

} 
