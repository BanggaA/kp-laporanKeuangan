<div class="main-content-inner">
<div class="row py-5">
            <!-- Pemasukan -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between pb-3">
                            <h4 class="header-title my-3">Pemasukan</h4>
                            <button type="button" class="btn btn-primary btn-xs mt-3 mb-2" data-toggle="modal" data-target="#tambah.Pemasukan">Tambahkan</button>
                            <div class="modal fade" id="tambah.Pemasukan">
                                <div class="modal-dialog">
                                <form action="<?= base_url("kategori/tambah")?>" method="post">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">tambah kategori Pemasukan</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <input type="hidden" name="jenis" value="Pemasukan">
                                                    <label for="example-text-input" class="col-form-label">judul kategori</label>
                                                    <input class="form-control" type="text" name="kategori" value="" >
                                                    
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
                        <table class="table">
                        <?php foreach ($pemasukan as $in) : ?>

                            <tr>
                                <td><?= $in['kategori'] ?> </td>
                                <td class="text-right">
                                    <a href="" class="badge badge-info" data-toggle="modal" data-target="#edit.<?= $in['kategori_id'] ?>">edit</a> 
                                    <a href="" class="badge badge-danger" data-toggle="modal" data-target="#hapus.<?= $in['kategori_id'] ?>">hapus</a> 
                                </td>
                            </tr>
                        <?php endforeach?>
                        </table>       
                    </div>      
                </div>
            </div>
            <!-- pengeluaran -->
            
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between pb-3">
                            <h4 class="header-title my-3">Pengeluaran</h4>
                            <button type="button" class="btn btn-primary btn-xs mt-3 mb-2" data-toggle="modal" data-target="#tambah.Pengeluaran">Tambahkan</button>
                            <div class="modal fade" id="tambah.Pengeluaran">
                                <div class="modal-dialog">
                                    <form action="<?= base_url("kategori/tambah")?>" method="post">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">tambah kategori Pengeluaran</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <input type="hidden" name="jenis" value="Pengeluaran">
                                                    <label for="example-text-input" class="col-form-label">judul kategori</label>
                                                    <input class="form-control" type="text" name="kategori" value="" >
                                                    
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
                        <table class="table">
                        <?php foreach ($pengeluaran as $out) : ?>

                            <tr>
                                <td><?= $out['kategori'] ?> </td>
                                <td class="text-right">
                                    <a href="" class="badge badge-info" data-toggle="modal" data-target="#edit.<?= $out['kategori_id'] ?>">edit</a> 
                                    <a href="" class="badge badge-danger" data-toggle="modal" data-target="#hapus.<?= $out['kategori_id'] ?>">hapus</a> 
                                </td>
                            </tr>
                        <?php endforeach?>
                        </table>       
                    </div>      
                </div>
            </div>

        </div>
</div>

<div>
<?php foreach ($kategori as $kat) : ?>
        <div class="modal fade" id="edit.<?=$kat['kategori_id']?>">
            <div class="modal-dialog">
                <form action="<?= base_url("kategori/update")?>" method="post">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">edit kategori</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="hidden" name="kategori_id" value="<?= $kat['kategori_id']?>">
                                <input type="hidden" name="jenis" value="<?= $kat['jenis']?>">
                                                                
                                <label for="example-text-input" class="col-form-label">judul kategori</label>
                                <input class="form-control" type="text" name="kategori" value="<?= $kat['kategori']?>" >
                                 
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                            <button type="sumbit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal fade" id="hapus.<?= $kat['kategori_id'] ?>">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Hapus kategori</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam, repudiandae modi quae adipisci sunt, quaerat nihil est mollitia delectus consequuntur voluptate nesciunt veniam impedit, odio ducimus provident dolore quia obcaecati.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <form action="<?= base_url('kategori/delete')?>" method="post">
                        <input type="hidden" name="kategori_id" value="<?= $kat['kategori_id']?>">
                        
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                        <button type="sumbit" class="btn btn-danger">Hapus kategori</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

</div>