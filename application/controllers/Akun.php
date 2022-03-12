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
		for_admin(); 
        $data['title'] = 'Akun';
		$data['nav'] = 'Akun';
        $data['acc'] = $this->Basic->getAll('tb_user');

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
