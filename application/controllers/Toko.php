<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toko extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        for_admin();

        $this->load->helper(['url']);
        $this->load->model(['Basic','Toko_m']);
    }   


	public function index()
	{
        $data['title'] = 'Daftar Toko';
		$data['nav'] = 'Daftar';

        $data['toko'] = $this->Basic->getAll('tb_toko');

		$this->load->view('general/templates/head',$data);
		$this->load->view('general/templates/nav',$data);
		$this->load->view('admin/Toko/Toko',$data);
		$this->load->view('general/templates/foot');
	}

    public function detail($id)
	{
        $data['title'] = 'Detail Toko';
		$data['nav'] = 'Detail';

        $data['Pemasukan'] = $this->Toko_m->laporan($id,'Pemasukan');
        $data['Pengeluaran'] = $this->Toko_m->laporan($id,'Pengeluaran');
        $data['lap'] = $this->Toko_m->lapToko('',$id);
        $data['toko'] = $this->Toko_m->getTokoId($id);
        $data['userToko'] = $this->Toko_m->userToko($id);

        $this->load->view('general/templates/head',$data);
        $this->load->view('general/templates/nav',$data);
        $this->load->view('admin/toko/TokoDetail',$data);
        $this->load->view('general/templates/foot');
	}

    public function tambah(){
        
        $toko       = $this->input->POST('toko');
        $alamat     = $this->input->POST('alamat');

		$this->form_validation->set_rules('toko', 'toko', 'required|trim');
        $this->form_validation->set_rules('alamat', 'alamat', 'required|trim');
		
		$data = array(
			'toko' => $toko,
			'alamat_toko' => $alamat,
		);
	
	
		if ($this->form_validation->run()) {
			$this->Basic->add('tb_toko', $data);
        };
        redirect('toko');
    }

    public function update(){

        $toko_id        = $this->input->POST('toko_id');
        $toko           = $this->input->POST('toko');
        $alamat_toko    = $this->input->POST('alamat_toko');

        $this->form_validation->set_rules('toko', 'toko', 'required|trim');
		$this->form_validation->set_rules('alamat_toko', 'alamat_toko', 'required|trim');
		
		$data =[
            'toko'          => $toko,
            'alamat_toko'   => $alamat_toko,
	
        ];

        if ($this->form_validation->run()) {
            $this->Basic->update("toko_id",$toko_id,'tb_toko', $data);
            }
        redirect('toko');    

    }

    public function delete(){

        $toko_id        = $this->input->POST('toko_id');
        
		$this->Basic->delete("toko_id",$toko_id, 'tb_toko');
		redirect('toko');
	}


}
