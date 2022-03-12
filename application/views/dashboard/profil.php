<div class="main-content-inner">
    <div class="row py-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-2"><p>Nama</p></div>
                        <div class="col-8"><p><?= (!$user['userToko']) ? "-" : "manger toko ".$user['userToko'];?></p></div>
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
                        <div class="col-8"><p><?= (!$user['noTelp']) ? "-" : "manger toko ".$user['noTelp'];?></p></div>
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
            <form action="" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">edit user</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-4">
                                    <label for="example-text-input" class="col-form-label">Nama</label>
                                    <input class="form-control" type="text" value="Carlos Rath" id="example-text-input">
                                </div>
                                <div class="col-md-4">
                                    <label for="example-text-input" class="col-form-label">Username</label>
                                    <input class="form-control" type="text" value="Carlos Rath" id="example-text-input">
                                </div>
                                <div class="col-md-4">
                                    <label for="example-text-input" class="col-form-label">password</label>
                                    <input class="form-control" type="text" value="Carlos Rath" id="example-text-input">
                                </div>
                            </div>
                            
                            <label for="example-text-input" class="col-form-label">No telepon</label>
                            <input class="form-control" type="text" value="Carlos Rath" id="example-text-input">
                            <label for="example-text-input" class="col-form-label">Alamat</label>
                            <textarea class="form-control form-cos" id="massage" name="massage" placeholder="your message here ......" rows="3"></textarea>
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