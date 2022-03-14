<div class="main-content-inner">
    <div class="col-12 my-5">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between pb-3">
                <h4 class="header-title my-3"><?= date_format(date_create($lap[0]['waktu']),'d F Y') ?></h4>
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
                                                    <input class="form-control" type="hidden" value="<?= $lap[0]['waktu']?>" name="waktu">
                                                    <label for="example-text-input" class="col-form-label">judul</label>
                                                    <input class="form-control" type="text" placeholder="judul transaksi"  name="transaksi">
                                                    <label class="col-form-label">judul kategori</label>
                                                    <input type="hidden" name="jenis" value="Pemasukan">
                                                    <select class="form-control"  name="kategori">
                                                        <?php foreach( $pemasukan as $p ):?>
                                                        <option value="<?= $p['kategori']?>"><?= $p['kategori']?></option>
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
                                                    <input class="form-control" type="hidden" value="<?= $lap[0]['waktu']?>" name="waktu">
                                                    <label for="example-text-input" class="col-form-label">judul</label>
                                                    <input class="form-control" type="text" placeholder="judul transaksi"  name="transaksi">
                                                    <label class="col-form-label">judul kategori</label>
                                                    <input type="hidden" name="jenis" value="Pengeluaran">
                                                    <select class="form-control"  name="kategori">
                                                        <?php foreach( $pengeluaran as $p ):?>
                                                        <option value="<?= $p['kategori']?>"><?= $p['kategori']?></option>
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
                                <th>kategori</th>
                                <th>jenis</th>
                                <th>nominal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($lap as $l) : ?>
                            <tr>
                                <td><?= date_format(date_create($l['waktu']),'d F Y') ?></td>
                                <td><?= $l['kategori']?></td>
                                <td  > <?= $l['jenis']?></td>
                                <td class="<?= ($l['jenis'] == 'Pemasukan') ? "text-success" : "text-danger"?>">Rp. <?= number_format($l['nominal'],0,",",".")?></td>
                                <td>
                                    <a href="" class="badge badge-info text-white" data-toggle="modal" data-target="#edit.<?= $l['transaksi_id']?>" >edit</a> 
                                    <a href="" class="badge badge-info text-white" data-toggle="modal" data-target="#hapus.<?= $l['transaksi_id']?>" >hapus</a> 
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

<div>
    <?php foreach ($lap as $l) : ?>
    <div class="modal fade" id="edit.<?= $l['transaksi_id']?>">
        <div class="modal-dialog">
            <form action="<?= base_url('transaksi/update')?>" method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">edit Pengeluaran</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <input class="form-control" type="hidden" value="<?= $l['transaksi_id']?>" name="transaksi_id">
                            <input class="form-control" type="hidden" value="<?= $l['waktu']?>" name="waktu">
                            <label for="example-text-input" class="col-form-label">judul</label>
                            <input class="form-control" type="text" value="<?= $l['transaksi']?>"  name="transaksi">
                            <label class="col-form-label">judul kategori</label>
                            <input type="hidden" name="jenis" value="Pengeluaran">
                            <select class="form-control"  name="kategori">
                            
                                
                                <?php foreach( $pengeluaran as $p ):?>
                                    <option value="<?= 'Pemasukan-'.$p['kategori']?>"><?= 'Pemasukan - '.$p['kategori']?></option>
                                <?php endforeach; ?>
                                <option value="">-------------------</option>
                                    <?php foreach( $pengeluaran as $p ):?>
                                <option value="<?= 'Pengeluaran-'.$p['kategori']?>"><?= 'Pengeluaran - '.$p['kategori']?></option>
                            <?php endforeach; ?>    
                            </select>
                            <label for="example-text-input" class="col-form-label">nominal</label>
                            <input class="form-control" type="number" value="<?= $l['nominal']?>" name="nominal">
                        
                            
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                        <button type="sumbit" class="btn btn-primary">edit transaksi</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="modal fade" id="hapus.<?= $l['transaksi_id']?>">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus transaksi</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam, repudiandae modi quae adipisci sunt, quaerat nihil est mollitia delectus consequuntur voluptate nesciunt veniam impedit, odio ducimus provident dolore quia obcaecati.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                    <form action=" <?= base_url('transaksi/delete') ?> "method="POST">
                        <input class="form-control" type="hidden" value="<?= $l['transaksi_id']?>" name="transaksi_id">
                        <button type="sumbit" class="btn btn-danger">Hapus transaksi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>