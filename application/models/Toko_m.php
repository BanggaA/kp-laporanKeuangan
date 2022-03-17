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
    
    public function deArr($arr, $key){
        $result = [];
        foreach ($arr as $a){
            array_push($result,$a[$key]);
        }
        return $result;
    }
    //transaksi

    public function lapSum($toko,$waktu,$jenis){
        return $this->db->select_sum('nominal')
        ->from('tb_transaksi')
        ->like('toko', $toko)
        ->like('waktu', $waktu)
        ->like('jenis', $jenis)
        ->get()
        ->result_array()[0]['nominal'];
    }

    public function laporan($toko,$jenis){
		$tgl    = new DateTime(date('Y-m-d'));
        $tgl=$tgl->modify( '-1 day' )->format("Y-m-d");
        
        $hari = $this->lapSum($toko,date('Y-m-d'),$jenis);
        $kemarin = $this->lapSum($toko,$tgl,$jenis);
        $bulan = $this->lapSum($toko,date('Y-m'),$jenis);
        $tahun = $this->lapSum($toko,date('Y'),$jenis);

        return [
            'hari' =>  ($hari) ? $hari : '0',
            'kemarin' => ($kemarin) ? $kemarin : '0',
            'bulan' =>  ($bulan) ? $bulan : '0',
            'tahun' =>  ($tahun) ? $tahun : '0'
        ];
        
    }
   

    public function rekap ($toko,$opsi){
		$tgl    = new DateTime(date('Y-m-d'));
        $days   = count($this->dateLap($toko));

        switch ($opsi){
            case 'a':
                #hari ini
                $tgl=$tgl->format("Y-m-d");
                $result = $this->rekapLap($toko,$this->lapiter($toko,$tgl,$tgl));
                $result += [
                    'selisih'=>$result['pemasukan']-$result['pengeluaran'],
                    'ratePemasukan'=> $result['pemasukan'] / 1,  
                    'ratePengeluaran'=> $result['pengeluaran'] / 1  
                ];
                return $result;
            case 'b':
                #kemarin
                $tgl=$tgl->modify( '-1 day' )->format("Y-m-d");
                $result = $this->rekapLap($toko,$this->lapiter($toko,$tgl,$tgl));
                $result += [
                    'selisih'=>$result['pemasukan']-$result['pengeluaran'],
                    'ratePemasukan'=> $result['pemasukan'] / 1,  
                    'ratePengeluaran'=> $result['pengeluaran'] / 1  
                ];
                return $result;
            case 'c':
                #7 hari terakhir
                $tgl1=$tgl->format("Y-m-d");
                $tgl2=$tgl->modify( '-7 day' )->format("Y-m-d");
                $result = $this->rekapLap($toko,$this->lapiter($toko,$tgl2,$tgl1));
                $result += [
                    'selisih'=>$result['pemasukan']-$result['pengeluaran'],
                    'ratePemasukan'=> $result['pemasukan'] / 7,  
                    'ratePengeluaran'=> $result['pengeluaran'] / 7 
                ];
                return $result;
                
            case 'd':
                #bulan ini
                $result = $this->rekapLap($toko,$this->lapToko(date('Y-m'),$toko));
                $result += [
                    'selisih'=>$result['pemasukan']-$result['pengeluaran'],
                    'ratePemasukan'=> $result['pemasukan'] / intval(date('t')),  
                    'ratePengeluaran'=> $result['pengeluaran'] / intval(date('t')) 
                ];
                return $result;
            case 'e':
                #tahun ini
                $result = $this->rekapLap($toko,$this->lapToko(date('Y'),$toko));
                $result += [
                    'selisih'=>$result['pemasukan']-$result['pengeluaran'],
                    'ratePemasukan'=> $result['pemasukan'] / 365,  
                    'ratePengeluaran'=> $result['pengeluaran'] / 365
                ];
                return $result;
            case 'f':
                #semua
                $result = $this->rekapLap($toko,$this->lapToko('',$toko));
                $result += [
                    'selisih'=>$result['pemasukan']-$result['pengeluaran'],
                    'ratePemasukan'=> $result['pemasukan'] / $days,  
                    'ratePengeluaran'=> $result['pengeluaran'] / $days 
                ];
                return $result;
        }
    }

    public function rekapLap($toko,$laporan){

        $katin = $this->deArr($this->getkatIn($toko),'kategori');
        $katOut = $this->deArr($this->getkatOut($toko),'kategori');

        $SumI=[];
        $SumO=[];
        $In=0;
        $Out=0;

        foreach ($laporan as $lap){
            if(in_array($lap['kategori'],$katin)){
                if(in_array($lap['kategori'],array_keys($SumI))){
                    $SumI[$lap['kategori']]+= $lap['nominal'];
                    $In++;
                }else{
                    $SumI+= [$lap['kategori'] => $lap['nominal']];
                    $In++;
                }
            }elseif(in_array($lap['kategori'],$katOut)){
                if(in_array($lap['kategori'],array_keys($SumO))){
                    $SumO[$lap['kategori']]+= $lap['nominal'];
                    $Out++;
                }else{
                    $SumO+= [$lap['kategori'] => $lap['nominal']];
                    $Out++;
                }
            }
        }
        arsort($SumI);
        arsort($SumO);

        $result = [
            'pemasukan'=>array_sum($SumI),
            'pengeluaran'=>array_sum($SumO),
            'katIn'=>$SumI,
            'katOut'=>$SumO,
            'in'=>$In,
            'out'=>$Out
            ];

        return $result;
        
    }

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

    public function lapiter($toko,$mulai,$akhir){

        $interval = new DateInterval('P1D');
        $begin = new DateTime( $mulai );
        $end = new DateTime( $akhir );

        $daterange = new DatePeriod($begin, $interval ,$end);
        
        $this->db->select('*')
        ->from('tb_transaksi')
        ->like('toko',$toko)
        ->like('waktu',$akhir);

        foreach($daterange as $date){
            $this->db->or_like('waktu',$date->format("Y-m-d"));
        }

        return $this->db->get()->result_array();
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

