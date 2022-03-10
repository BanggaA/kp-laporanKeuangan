<?php 

function need_usr()
{
    $ci = get_instance();

    if (!$ci->session->userdata('name')) {
        redirect('Acc/login');
    }

}

function for_admin()
{
    $ci = get_instance();

    if ($ci->session->userdata('lvl') != 1 ) {
        redirect('Acc/block');
    }
}
