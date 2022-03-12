<?php 

function need_usr()
{
    $ci = get_instance();

    if (!$ci->session->userdata('username')) {
        redirect('akun/login');
    }

}

function is_login()
{
    $ci = get_instance();

    if ($ci->session->userdata('username')) {
        redirect('Dashboard');
    }

}

function for_admin()
{
    $ci = get_instance();

    if ($ci->session->userdata('lvl') != 1 ) {
        redirect('akun/block');
    }
}