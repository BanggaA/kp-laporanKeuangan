<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toko extends CI_Controller {

	public function __construct()
    {
        parent::__construct();

        $this->load->helper(['url']);
        $this->load->model('Basic');
    }   


	public function index()
	{
        $data['title'] = 'daftar Toko';
		$data['nav'] = 'daftar Toko';

        $data['toko'] = $this->Basic->getAll('tb_toko');

		$this->load->view('templates/head',$data);
		$this->load->view('templates/nav',$data);
		$this->load->view('Toko/Toko',$data);
		$this->load->view('templates/foot');
	}

    public function detail($id)
	{
        $data['title'] = 'daftar Toko';
		$data['nav'] = 'daftar Toko';

        $data['toko'] = $this->Basic->getAll('tb_toko');
        $data['user'] = $this->Basic->getJoin("tb_user","tb_toko","tb_user.toko = tb_toko.toko_id");

		$this->load->view('templates/head',$data);
		$this->load->view('templates/nav',$data);
		$this->load->view('toko/TokoDetail',$data);
		$this->load->view('templates/foot');
	}

    public function tambah(){
        for_admin(); 
        
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
        for_admin(); 

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
        for_admin(); 

        $toko_id        = $this->input->POST('toko_id');
        
		$this->Basic->delete("toko_id",$toko_id, 'tb_toko');
		redirect('toko');
	}


}
