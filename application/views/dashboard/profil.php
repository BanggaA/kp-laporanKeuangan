<div class="main-content-inner">
    <div class="row py-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-2"><p>Nama</p></div>
                        <div class="col-8"><p><?= $user['name'];?></p></div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-2"><p>username</p></div>
                        <div class="col-8"><p><?= $user['username'];?></p></div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-2"><p>sebagai</p></div>
                        <div class="col-8"><?= ($user['lvl']==1) ? "admin" : ((!$user['userToko']) ? "-" : "manger toko ".$user['userToko']);?></p></div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-2"><p>nomor telepon</p></div>
                        <div class="col-8"><p><?= (!$user['noTelp']) ? "-" : $user['noTelp'];?></p></div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-2"><p>alamat</p></div>
                        <div class="col-8"><p><?= (!$user['alamatUser']) ? "-" : $user['alamatUser'];?></p></div>
                    </div>
                    <hr class="pb-3">
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#edit">edit profil</button>
                    </div>
                </div>      
            </div>
        </div>
    </div>
</div>

<div>
    <div class="modal fade" id="edit">
        <div class="modal-dialog modal-lg">
            <form action="<?= base_url("akun/updateProfil")?>" method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">edit user</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="form-row">
                                <input type="hidden" name="user_id" value="<?= $user['userId']?>">

                                <div class="col-md-4">
                                    <label for="example-text-input" class="col-form-label">Nama</label>
                                    <input class="form-control" type="text" name="name" value="<?= $user['name'] ?>">
                                </div>
                                <div class="col-md-4">
                                    <label for="example-text-input" class="col-form-label">Username</label>
                                    <input class="form-control" type="text"  name="username" value="<?= $user['username'] ?>">
                                </div>
                                <div class="col-md-4">
                                    <label for="example-text-input" class="col-form-label">password</label>
                                    <input class="form-control" type="text"  name="passwd" value="<?= $user['passwd'] ?>">
                                </div>
                            </div>
                            
                            <label for="example-text-input" class="col-form-label">No telepon</label>
                            <input class="form-control" type="text" name="noTelp" value="<?= $user['noTelp'] ?>">
                            <label for="example-text-input" class="col-form-label">Alamat</label>
                            <input class="form-control" type="text" name="alamatUser" value="<?= $user['alamatUser'] ?>">
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
</div>