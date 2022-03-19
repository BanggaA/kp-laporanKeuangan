<div class="main-content-inner">
    <div class="row my-4">
        <div class="col-md-12">
            <div class="card">
                
            <?php if($this->session->userdata('lvl')==1):?>
                <div class="card-body">
                    <form class="d-flex justify-content-between" action="<?= base_url('transaksi/rekap')?>" method="POST">
                        <div class="row">
                            <div class="col">
                                <label for="example-date-input" class="col-form-label">toko</label>
                                <select class="form-control py-2"  name="toko">
                                    <?php foreach( $toko as $t ):?>
                                    <option value="<?= $t['toko_id']?>"><?= $t['toko']?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col">
                                <label class="col-form-label">rentang waktu</label>
                                <select class="form-control py-2" name="opsi">
                                    <option value="a">Hari ini</option>
                                    <option value="b">Kemarin</option>
                                    <option value="c">7 hari terakhir</option>
                                    <option value="d">Bulan ini</option>
                                    <option value="e">Tahun ini</option>
                                    <option value="f">semua</option>
                                </select>
                            </div>
                        </div>
                        <button type="sumbit" class="btn btn-primary btn-flat btn-xs my-4">Tampilkan</button>
                    </form> 
                </div>      
            <?php elseif($this->session->userdata('lvl')==2):?>
                <div class="card-body">
                    <form class="d-flex justify-content-between" action="<?= base_url('transaksi/rekap')?>" method="POST">
                        <div>
                            <label class="col-form-label">rentang waktu</label>
                            <select class="form-control py-2" name="opsi">
                                <option value="a">Hari ini</option>
                                <option value="b">Kemarin</option>
                                <option value="c">7 hari terakhir</option>
                                <option value="d">Bulan ini</option>
                                <option value="e">Tahun ini</option>
                                <option value="f">semua</option>
                            </select>
                        </div>
                        <button type="sumbit" class="btn btn-primary btn-flat btn-xs my-4">Tampilkan</button>
                    </form> 
                </div>   
            <?php endif;?>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <!-- total -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="pb-3">Total</h5>
                    <table class="table ">
                        <tr>
                            <th>Pemasukan</th>
                            <td>Rp. <?= number_format($lap['pemasukan'],0,",",".")?></td>
                        </tr>
                        <tr>
                            <th>pengeluaran</th>
                            <td>Rp. <?= number_format($lap['pengeluaran'],0,",",".")?></td>
                        </tr>
                        <tr>
                            <th>selisih</th>
                            <td>Rp. <?= number_format($lap['selisih'],0,",",".")?></td>
                        </tr>
                    </table>       
                </div>      
            </div>
        </div>
        <!-- rata rata -->
        
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="pb-3">rata rata</h5>
                    <table class="table ">
                        <tr>
                            <th>Pemasukan/hari</th>
                            <td>Rp. <?= number_format($lap['ratePemasukan'],0,",",".")?></td>
                        </tr>
                        <tr>
                            <th>pengeluaran/hari</th>
                            <td>Rp. <?= number_format($lap['ratePengeluaran'],0,",",".")?></td>
                        </tr>
                    </table>       
                </div>      
            </div>
        </div>
    </div>

    <div class="row mb-4 ">
        <!-- total -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="pb-3">detail pemasukan</h5>
                    <table class="table ">
                        <?php foreach($lap['katIn'] as $key => $value):?>
                        <tr>
                            <td><?= $key ?></td>
                            <td><?= number_format($value,0,",",".") ?></td>
                        </tr>
                        <?php endforeach;?>
                    </table>       
                </div>      
            </div>
        </div>
        <!-- rata rata -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="pb-3">detail pemasukan</h5>
                    <table class="table ">
                        <?php foreach($lap['katOut'] as $key => $value):?>
                        <tr>
                            <td><?= $key ?></td>
                            <td><?= number_format($value,0,",",".") ?></td>
                        </tr>
                        <?php endforeach;?>
                    </table>       
                </div>      
            </div>
        </div>
        
    </div>



</div>