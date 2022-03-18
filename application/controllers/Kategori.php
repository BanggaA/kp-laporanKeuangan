<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        for_manager();
        
        $this->load->helper(['url']);
		$this->load->model(['Basic','Toko_m']);

    }   


	public function index()
	{
        $data['title'] = 'Kategori';
		$data['nav'] = 'Kategori';

        $data['kategori'] = $this->Toko_m->getkatAll(getUserToko());
		$data['pemasukan'] = $this->Toko_m->getkatIn( getUserToko());
		$data['pengeluaran'] = $this->Toko_m->getkatOut( getUserToko());

		$this->load->view('general/templates/head',$data);
		$this->load->view('general/templates/nav',$data);
		$this->load->view('manager/kategori',$data);
		$this->load->view('general/templates/foot');
	}

	public function tambah(){
        
        $kategori       = $this->input->POST('kategori');
        $jenis    		= $this->input->POST('jenis');

		$this->form_validation->set_rules('kategori', 'kategori', 'required|trim');
		
		$data = array(
			'kategori' 	=> $kategori,
            'jenis'   	=> $jenis,
			'toko' 		=> getUserToko()
		);
	
	
		if ($this->form_validation->run()) {
			$this->Basic->add('tb_kategori', $data);
        };
        redirect('kategori');
    }

    public function update(){

        $kategori_id  	= $this->input->POST('kategori_id');
        $kategori  		= $this->input->POST('kategori');
        $jenis    		= $this->input->POST('jenis');
		 

        $this->form_validation->set_rules('kategori', 'kategori', 'required|trim');
		
		$data =[
            'kategori'	=> $kategori,
            'jenis'   	=> $jenis
        ];

        if ($this->form_validation->run()) {
            $this->Basic->update("kategori_id",$kategori_id,'tb_kategori', $data);
            }
        redirect('kategori');    

    }

    public function delete(){

        $kategori_id        = $this->input->POST('kategori_id');
        
		$this->Basic->delete("kategori_id",$kategori_id, 'tb_kategori');
		redirect('kategori');
	}

}
