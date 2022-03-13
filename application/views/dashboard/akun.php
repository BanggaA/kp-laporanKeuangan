<div class="main-content-inner">
    <div class="col-12 my-5">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between pb-3">
                    <h4 class="header-title my-3">detail akun</h4>
                    <button type="button" class="btn btn-primary btn-xs mt-3 mb-2" data-toggle="modal" data-target="#tambah">Tambahkan</button>
                    <div class="modal fade" id="tambah">
                        <div class="modal-dialog">
                            <form action="<?= base_url('akun/tambah')?>" method="POST">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Tambahkan akun</h5>
                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">username</label>
                                            <input class="form-control" type="text" placeholder="username"  name="username">

                                            <label for="example-text-input" class="col-form-label">password</label>
                                            <input class="form-control" type="text" placeholder="password" name="passwd">
                                        
                                            <label class="col-form-label">user level</label>
                                            <select class="form-control"  name="lvl">
                                                <option value="0">0 - nonaktif</option>
                                                <option value="1">1 - admin</option>
                                                <option value="2">2 - manager</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                        <button type="sumbit" class="btn btn-primary">Kirim</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="data-tables">
                    <table id="dataTable2" class="text-center">
                        <thead class="bg-light text-capitalize">
                            <tr>
                                <th>id</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>No telepon</th>
                                <th>Alamat</th>
                                <th>level user</th>
                                <th>toko</th>
                                <th>aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($user as $u) : ?>
                            <tr>
                                <td><?= $u['user_id']?></td>
                                <td><?= $u['name']?></td>
                                <td><?= $u['username']?></td>
                                <td><?= $u['no_telepon_user']?></td>
                                <td><?= $u['alamat_user']?></td>
                                <td><?= ($u['lvl']==1) ? "admin" : (($u['lvl']==2)?"manager":"nonaktif")  ?></td>
                                <td><?= $u['toko']?></td>
                                <td>
                                    <a class="badge badge-info text-white" data-toggle="modal" data-target="#edit.<?= $u['user_id']?>">edit</a> 
                                    <a class="badge badge-danger text-white" data-toggle="modal" data-target="#hapus.id">hapus</a> 
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

<!-- modals area -->
<div> 
    <?php foreach ($user as $u) : ?>
    <div class="modal fade" id="edit.<?= $u['user_id']?>">
        <div class="modal-dialog modal-lg">
            <form action="<?= base_url("akun/update")?>" method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">edit user</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-4">
                                    <input type="hidden" name="user_id" value="<?= $u['user_id']?>">
                                    <label for="example-text-input" class="col-form-label">Nama</label>
                                    <input class="form-control" type="text" name="name" value="<?= $u['name']?> ">
                                </div>
                                <div class="col-md-4">
                                    <label for="example-text-input" class="col-form-label">Username</label>
                                    <input class="form-control" type="text" name="username" value="<?= $u['username']?>" >
                                </div>
                                <div class="col-md-4">
                                    <label for="example-text-input" class="col-form-label">password</label>
                                    <input class="form-control" type="text" name="passwd" value="<?= $u['passwd']?>" >
                                </div>
                            </div>
                            
                            <label for="example-text-input" class="col-form-label">No telepon</label>
                            <input class="form-control" type="number" name="no_telepon_user" value="<?=$u['no_telepon_user']?>" >
                            <label for="example-text-input" class="col-form-label">Alamat</label>
                            <textarea class="form-control form-cos" name="alamat_user" value="<?= $u['alamat_user']?>" rows="3"></textarea>
                            <label class="col-form-label">user level</label>
                            <select class="form-control" name="lvl" >
                                <option value="0" <?php if($u['lvl']==0) echo 'selected' ?> >0 - nonaktif</option>
                                <option value="1" <?php if($u['lvl']==1) echo 'selected' ?> >1 - admin</option>
                                <option value="2" <?php if($u['lvl']==2) echo 'selected' ?> >2 - manager</option>
                            </select>
                            <?php if($u['lvl']==2):?>
                            <label for="example-text-input" class="col-form-label">toko</label>
                            <select class="form-control" name="toko" >
                                <?php foreach ($toko as $t) : ?>
                                <option value="<?= $t['toko_id']?>" <?= ($u['toko_id']==$t['toko_id']) ? 'selected' : "" ?> ><?= $t['toko_id']." - ".$t['toko'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?php endif; ?>
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
    <div class="modal fade" id="hapus.id">
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
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                    <form action=" <?= base_url('akun/delete/').$u["user_id"] ?> ">
                        <button type="sumbit" class="btn btn-danger">Hapus Akun</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>

</div>
