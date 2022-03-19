<div class="main-content-inner">
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
                            <th>Toko</th>
                            <th>judul</th>
                            <th>kategori</th>
                            <th>jenis</th>
                            <th>nominal</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($transaksi as $l) : ?>
                        <tr>
                            <td><?= date_format(date_create($l['waktu']),'d-m-Y') ?></td>
                            <td><?= $l['toko']?></td>
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
