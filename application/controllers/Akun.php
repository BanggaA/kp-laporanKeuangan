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
        //$data['user'] = $this->Basic->getAll('tb_user');
        $data['toko'] = $this->Basic->getAll('tb_toko');
        $data['user'] = $this->Basic->getJoin("tb_user","tb_toko","tb_user.toko = tb_toko.toko_id");
		$this->load->view('templates/head',$data);
		$this->load->view('templates/nav',$data);
        $this->load->view('dashboard/akun',$data);
		$this->load->view('templates/foot');
	}

	public function profil()
	{
		need_usr(); 
        $data['title'] = 'profil';
		$data['nav'] = 'profil';
        $data['user']=$this->session->userdata();
		$this->load->view('templates/head',$data);
		$this->load->view('templates/nav',$data);
        $this->load->view('dashboard/profil',$data);
		$this->load->view('templates/foot');
	}

	public function login()
	{
		is_login();

		$this->form_validation->set_rules('username', 'username', 'required|trim');
        $this->form_validation->set_rules('passwd', 'passwd', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'login';

			$this->load->view('templates/head',$data);
			$this->load->view('login');
			$this->load->view('templates/foot');          
        } else {
            $this->set_login();
        }
	}

    public function tambah(){
        for_admin(); 
        
        $username   = $this->input->POST('username');
        $passwd     = $this->input->POST('passwd');
        $lvl        = $this->input->POST('lvl');

		$this->form_validation->set_rules('username', 'username', 'required|trim');
        $this->form_validation->set_rules('passwd', 'passwd', 'required|trim');
		$this->form_validation->set_rules('lvl', 'lvl', 'required|trim');
		
		$data = array(
			'username' => $username,
			'passwd' => $passwd,
			'lvl' => $lvl,
		);
	
	
		if ($this->form_validation->run()) {
			$this->Basic->add('tb_user', $data);
        };
        redirect('Akun');
    }

    public function update(){
        for_admin(); 

        $username           = $this->input->POST('username');
        $passwd             = $this->input->POST('passwd');
        $lvl                = $this->input->POST('lvl');
        $user_id            = $this->input->POST('user_id');
        $name               = $this->input->POST('name');
        $no_telepon_user    = $this->input->POST('no_telepon_user');
        $alamat_user        = $this->input->POST('alamat_user');
        $toko               = $this->input->POST('toko');

		$this->form_validation->set_rules('username', 'username', 'required|trim');
        $this->form_validation->set_rules('passwd', 'passwd', 'required|trim');
		$this->form_validation->set_rules('lvl', 'lvl', 'required|trim');
		
		$data =[
            'username'          => $username,
            'passwd'            => $passwd,
            'lvl'               => $lvl,
            'name'              => $name,
            'no_telepon_user'   => $no_telepon_user,
            'alamat_user'       => $alamat_user,
            'toko'              => $toko
        ];
	
	
		if ($this->form_validation->run()) {
            $this->Basic->update("user_id",$user_id,'tb_user', $data);
        }
        redirect('akun');    

    }

    public function updateProfil(){

        $username           = $this->input->POST('username');
        $passwd             = $this->input->POST('passwd');
        $user_id            = $this->input->POST('user_id');
        $name               = $this->input->POST('name');
        $no_telepon_user    = $this->input->POST('noTelp');
        $alamat_user        = $this->input->POST('alamatUser');

		$this->form_validation->set_rules('username', 'username', 'required|trim');
        $this->form_validation->set_rules('passwd', 'passwd', 'required|trim');
		
		$data =[
            'username'          => $username,
            'passwd'            => $passwd,
            'name'              => $name,
            'no_telepon_user'   => $no_telepon_user,
            'alamat_user'       => $alamat_user,
        ];
	
	
		if ($this->form_validation->run()) {
            $this->Basic->update("user_id",$user_id,'tb_user', $data);
            $user = $this->db->get_where('tb_user', ['user_id' => $user_id]) -> row_array();

            $data =['userId','username','name','passwd','noTelp','alamatUser','lvl','userToko'];
            $this->session->unset_userdata($data);

            $data =[
                'userId' => $user['user_id'],
				'username' => $user['username'],
                'name' => $user['name'],
                'passwd' => $user['passwd'],
                'noTelp' => $user['no_telepon_user'],
                'alamatUser' => $user['alamat_user'],
                'lvl' => $user['lvl'],
                'userToko' => $user['toko']
            ];

            $this->session->set_userdata($data);

        }
        redirect('akun/profil');    

    }

	public function delete(){
        $user_id            = $this->input->POST('user_id');
        $this->Basic->delete("user_id",$user_id , 'tb_user');
		redirect('akun');
		
	}

	public function block()
	{
        $data['title'] = 'block';

		$this->load->view('templates/head',$data);
        $this->load->view('block');
		$this->load->view('templates/foot');
	}

	private function set_login()
    {
        $username   = $this->input->POST('username');
        $passwd     = $this->input->POST('passwd');

        $user      = $this->db->get_where('tb_user', ['username' => $username]) -> row_array();
        
        if($user["passwd"] == $passwd){
            
            $data =[
                'userId' => $user['user_id'],
				'username' => $user['username'],
                'name' => $user['name'],
                'passwd' => $user['passwd'],
                'noTelp' => $user['no_telepon_user'],
                'alamatUser' => $user['alamat_user'],
                'lvl' => $user['lvl'],
                'userToko' => $user['toko']
            ];
            $this->session->set_userdata($data);

            if($user['lvl'] == 1){
                redirect('akun/login');

            }elseif($user['lvl'] == 2){
                redirect('akun/test');

            }else{
                redirect('akun/test');

            }

        }else{
            redirect('akun/test');
        }

    }


    public function logout()
    {

        $data = ['username', 'lvl','tt'];
        $this->session->unset_userdata($data);

        $this->session->set_flashdata('notification', 'Anda telah logout');
        redirect('akun/login');
    }
	
	
}
