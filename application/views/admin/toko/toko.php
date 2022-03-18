<div class="main-content-inner">
    <div class="col-12 my-5">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between pb-3">
                <h4 class="header-title my-3">daftar toko</h4>
                <button type="button" class="btn btn-primary btn-xs mt-2 mb-3" data-toggle="modal" data-target="#exampleModalLong">Tambah</button>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalLong">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Tambah toko</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                            </div>
                            <form action="<?= base_url('toko/tambah')?>" method="post">
                                <div class="modal-body">
                                <label for="example-text-input" class="col-form-label">Toko</label>
                                <input class="form-control" type="text" name="toko" >
                                <label for="example-text-input" class="col-form-label">Alamat</label>
                                <input class="form-control" type="text" name="alamat" >
                            
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="sumbit" class="btn btn-primary">tambah</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Table -->
                <div class="data-tables">
                    <table id="dataTable2" class="text-center">
                        <thead class="bg-light text-capitalize">
                            <tr>
                                <th>Id</th>
                                <th>Toko</th>
                                <th>alamat Toko</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach (array_slice($toko,1) as $t) : ?>
                            <tr>
                                <td><?=$t['toko_id']?></td>
                                <td><?=$t['toko']?></td>
                                <td><?=$t['alamat_toko']?></td>
                                <td>
                                    <a href="<?= base_url('toko/detail/'.$t['toko_id'])?>" class="badge badge-primary text-white">detail</a> 
                                    <a href="" class="badge badge-info text-white" data-toggle="modal" data-target="#edit.<?=$t['toko_id']?>">edit</a> 
                                    <a href="" class="badge badge-danger text-white" data-toggle="modal" data-target="#hapus.<?=$t['toko_id']?>">hapus</a> 
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
    <?php foreach ($toko as $t) : ?>
        <div class="modal fade" id="edit.<?=$t['toko_id']?>">
            <div class="modal-dialog modal-lg">
                <form action="<?= base_url("toko/update")?>" method="post">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">edit toko</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="hidden" name="toko_id" value="<?= $t['toko_id']?>">
                                                                
                                <label for="example-text-input" class="col-form-label">No telepon</label>
                                <input class="form-control" type="text" name="toko" value="<?= $t['toko']?>" >
                                <label for="example-text-input" class="col-form-label">Alamat</label>
                                <input class="form-control" type="text" name="alamat_toko" value="<?= $t['alamat_toko']?>">
                                
                                
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
        <div class="modal fade" id="hapus.<?=$t['toko_id']?>">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Hapus Akun</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam, repudiandae modi quae adipisci sunt, quaerat nihil est mollitia delectus consequuntur voluptate nesciunt veniam impedit, odio ducimus provident dolore quia obcaecati.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <form action="<?= base_url('toko/delete')?>" method="post">
                        <input type="hidden" name="toko_id" value="<?= $t['toko_id']?>">
                        
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                        <button type="sumbit" class="btn btn-danger">Hapus toko</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
</div>