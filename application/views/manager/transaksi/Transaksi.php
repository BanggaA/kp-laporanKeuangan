<div class="main-content-inner">
    <div class="col-12 my-5">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between pb-3">
                <h4 class="header-title my-3">transaksi</h4>

                    <div class="row">
                        <div class="col px-1">
                            <button type="button" class="btn btn-primary btn-xs mt-3 mb-2" data-toggle="modal" data-target="#tambah.pemasukan"><span class="ti-pencil"></span> Pemasukan</button>
                            <div class="modal fade" id="tambah.pemasukan">
                                <div class="modal-dialog">
                                    <form action="<?= base_url('transaksi/tambah')?>" method="POST">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">tambah Pemasukan</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                <label for="example-date-input" class="col-form-label">tanggal</label>
                                                <input class="form-control" type="date" value="<?= date("Y-m-d")?>" name="waktu">
                                                    <label for="example-text-input" class="col-form-label">judul</label>
                                                    <input class="form-control" type="text" placeholder="judul transaksi"  name="transaksi">
                                                    <label class="col-form-label">judul kategori</label>
                                                    <input type="hidden" name="jenis" value="Pemasukan">
                                                    <select class="form-control"  name="kategori">
                                                        <?php foreach( $pemasukan as $kat ):?>
                                                        <option value="<?= $kat['kategori']?>"><?= $kat['kategori']?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                    <label for="example-text-input" class="col-form-label">nominal</label>
                                                    <input class="form-control" type="number" placeholder="" name="nominal">
                                                
                                                    
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                                <button type="sumbit" class="btn btn-primary">tambah</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col px-1">
                            <button type="button" class="btn btn-primary btn-xs mt-3 mb-2" data-toggle="modal" data-target="#tambah.Pengeluaran"><span class="ti-pencil"></span> Pengeluaran</button>
                            <div class="modal fade" id="tambah.Pengeluaran">
                                <div class="modal-dialog">
                                    <form action="<?= base_url('transaksi/tambah')?>" method="POST">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">tambah Pengeluaran</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                <label for="example-date-input" class="col-form-label">tanggal</label>
                                                <input class="form-control" type="date" value="<?= date("Y-m-d")?>" name="waktu">
                                                    <label for="example-text-input" class="col-form-label">judul</label>
                                                    <input class="form-control" type="text" placeholder="judul transaksi"  name="transaksi">
                                                    <label class="col-form-label">judul kategori</label>
                                                    <input type="hidden" name="jenis" value="Pengeluaran">
                                                    <select class="form-control"  name="kategori">
                                                        <?php foreach( $pengeluaran as $kat ):?>
                                                        <option value="<?= $kat['kategori']?>"><?= $kat['kategori']?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                    <label for="example-text-input" class="col-form-label">nominal</label>
                                                    <input class="form-control" type="number" placeholder="" name="nominal">
                                                
                                                    
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                                <button type="sumbit" class="btn btn-primary">tambah</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                
                    
                </div>
                
                <!-- Table -->
                <div class="data-tables">
                    <table id="dataTable2" class="text-center">
                        <thead class="bg-light text-capitalize">
                            <tr>
                                <th>Tanggal</th>
                                <th>Pemasukan</th>
                                <th>Pengeluaran</th>
                                <th>Selisih</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($lap as $l) : ?>
                            <tr>
                                <td><?= date_format(date_create($l['waktu']),'d m Y') ?></td>
                                <td>Rp. <?= number_format($l['pemasukan'],0,",",".")?></td>
                                <td>Rp. <?= number_format($l['pengeluaran'],0,",",".")?></td>
                                <td class="<?= (($l['pemasukan']-$l['pengeluaran'])>0) ? "text-success" : "text-danger"?>">Rp. <?= number_format(($l['pemasukan']-$l['pengeluaran']),0,",",".")?></td>
                                <td>
                                    <a href="<?= base_url('transaksi/detail/') . $l['id']?>" class="badge badge-info text-white" >detail</a> 
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
