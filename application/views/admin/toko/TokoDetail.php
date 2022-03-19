<div class="main-content-inner">
    <!-- pemasukan & pengeluaran -->
    <div class="col-md-12 pt-5">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-2"><p>toko</p></div>
                    <div class="col-8"><p><?= $toko['toko'];?></p></div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-2"><p>alamat</p></div>
                    <div class="col-8"><p><?= ($toko['alamat_toko'])?$toko['alamat_toko']:'-';?></p></div>
                </div>
                <hr>
                <?php if (!$userToko):?>
                <div class="row">
                    <div class="col-2"><p>manager</p></div>
                    <div class="col-8"><p>-</p></div>
                </div>
                <?php else:?>
                <div class="row">
                    <div class="col-2"><p>manager</p></div>
                    <div class="col-8"><p><?= $userToko[0]['username']?></p></div>
                </div>
                    <?php foreach (array_slice($userToko,1) as $uT) : ?>
                <div class="row">
                    <div class="col-2"><p></p></div>
                    <div class="col-8"><p><?= $uT['username']?></p></div>
                </div>
                    <?php endforeach; ?>
                <?php endif;?>
            </div>      
        </div>
    </div>

    <div class="my-5">
        <div class="row">
            <!-- Pemasukan -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="pb-3">Pemasukan</h5>
                        <table class="table ">
                            <tr>
                                <th>Hari ini</th>
                                <td>Rp. <?= number_format($Pemasukan['hari'],0,",",".")?></td>
                            </tr>
                            <tr>
                                <th>Kemari</th>
                                <td>Rp. <?= number_format($Pemasukan['kemarin'],0,",",".")?></td>
                            </tr>
                            <tr>
                                <th>Bulan ini</th>
                                <td>Rp. <?= number_format($Pemasukan['bulan'],0,",",".")?></td>
                            </tr>
                            <tr>
                                <th>Tahun ini</th>
                                <td>Rp. <?= number_format($Pemasukan['tahun'],0,",",".")?></td>
                            </tr>
                        </table>       
                    </div>      
                </div>
            </div>
            <!-- pengeluaran -->
            
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="pb-3">Pengeluaran</h5>
                        <table class="table ">
                            <tr>
                                <th>Hari ini</th>
                                <td>Rp. <?= number_format($Pengeluaran['hari'],0,",",".")?></td>
                            </tr>
                            <tr>
                                <th>Kemari</th>
                                <td>Rp. <?= number_format($Pengeluaran['kemarin'],0,",",".")?></td>
                            </tr>
                            <tr>
                                <th>Bulan ini</th>
                                <td>Rp. <?= number_format($Pengeluaran['bulan'],0,",",".")?></td>
                            </tr>
                            <tr>
                                <th>Tahun ini</th>
                                <td>Rp. <?= number_format($Pengeluaran['tahun'],0,",",".")?></td>
                            </tr>
                        </table>       
                    </div>      
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 my-5">
        <div class="card">
            <div class="card-body">
                <h5 class="pb-3">Transaksi</h5>
            <div class="data-tables">
                    <table id="dataTable2" class="text-center">
                        <thead class="bg-light text-capitalize">
                            <tr>
                                <th>Tanggal</th>
                                <th>judul</th>
                                <th>kategori</th>
                                <th>jenis</th>
                                <th>nominal</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($lap as $l) : ?>
                            <tr>
                                <td><?= date_format(date_create($l['waktu']),'d-m-Y') ?></td>
                                <td><?= $l['transaksi']?></td>
                                <td><?= $l['kategori']?></td>
                                <td class="<?= ($l['jenis'] == 'Pemasukan')? 'text-success':'text-danger' ?>"><?= $l['jenis']?></td>
                                <td>Rp. <?= number_format($l['nominal'],0,",",".")?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
</div>
