<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toko_m extends CI_Model {

    //kategori

    public function getkatIn($namaToko){
        $data = $this->db->select('*')
        ->from('tb_kategori')
        ->like('jenis', 'Pemasukan')
        ->like('toko', $namaToko)
        ->get()->result_array();
        return $data ;

    }

    public function getkatOut($namaToko){
        $data = $this->db->select('*')
        ->from('tb_kategori')
        ->like('jenis', 'Pengeluaran')
        ->like('toko', $namaToko)
        ->get()->result_array();
        return $data ;
    }

    public function getkatAll($namaToko){
        $this->db->select('*');
        $this->db->from('tb_kategori');
        $this->db->like('toko', $namaToko);
        return $this->db->get()->result_array();
    }
    
    //transaksi

    public function dateLap($toko){
        $this->db->select('waktu');
        $this->db->distinct('');
        $this->db->from('tb_transaksi');
        $this->db->like('toko',$toko);

        return $this->db->get()->result_array();
    }

    public function lapToko($waktu,$toko){
        
        $data = $this->db->select('*')
        ->from('tb_transaksi')
        ->like('toko',$toko)
        ->like('waktu',$waktu)
        ->get()
        ->result_array();
        
        return $data;
    }

    public function groupLap($toko){
        $waktu = $this->dateLap($toko);
        $result = [];
        $c=0;
        foreach ($waktu as $w) {
           $lap = $this->lapToko($w['waktu'],$toko);
           $pemasukan = 0;
           $pengeluaran = 0;
           foreach ($lap as $l){
                if($l['jenis'] == 'Pemasukan') $pemasukan+=$l['nominal'];
                if($l['jenis'] == 'Pengeluaran') $pengeluaran+=$l['nominal'];
           };
            array_push($result,['id'=>$c,'waktu'=>$w['waktu'],'pemasukan'=>$pemasukan,'pengeluaran'=>$pengeluaran]);       
           $c++;
        }
        return $result;
    }

    public function getLapById($toko,$id){
        
        $listWaktu = $this->groupLap($toko);
        $waktu = $listWaktu[$id]['waktu'];
        
        $data = $this->db->select('*')
        ->from('tb_transaksi')
        ->like('tb_transaksi.toko',$toko)
        ->like('waktu',$waktu)
        ->get()
        ->result_array();

        return $data;
    }
}

