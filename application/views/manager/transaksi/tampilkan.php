<div class="main-content-inner">
<div class="col-12 my-5">
        <div class="card">
            <div class="card-body">
                <form action="<?=base_url('transaksi/tampilkan')?>" method="post">
                    <Div class="row justify-content-between">
                        <div class="row mx-3">
                            <div class="px-2">
                                <label for="example-date-input" class="col-form-label">awal</label>
                                <input class="form-control" type="date"  name="awal">
                            </div>
                            <div class="px-2">
                            <label for="example-date-input" class="col-form-label">akhir</label>
                                <input class="form-control" type="date" name="akhir">
                            </div>
                        </div>
                        <div class="mx-3">
                        <button type="sumbit" class="btn btn-primary btn-xs mt-5"><span class="ti-pencil"></span> Pemasukan</button>
                        </div>
                    </Div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-12 my-5">
        <div class="card">
            <div class="card-body">
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
                                <td><?= date_format(date_create($l['waktu']),'d m Y') ?></td>
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