<div class="main-content-inner">
<div class="row py-5">
            <!-- Pemasukan -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between pb-3">
                            <h4 class="header-title my-3">pemasukan</h4>
                            <button type="button" class="btn btn-primary btn-xs mt-3 mb-2" data-toggle="modal" data-target="#tambah">Tambahkan</button>
                            <div class="modal fade" id="tambah">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam, repudiandae modi quae adipisci sunt, quaerat nihil est mollitia delectus consequuntur voluptate nesciunt veniam impedit, odio ducimus provident dolore quia obcaecati.
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="table">
                            <tr>
                                <td>kategori </td>
                                <td class="text-right">
                                    <a href="<?= base_url('Acc/edit/') ?>" class="badge badge-info" data-toggle="modal" data-target="#edit.id">edit</a> 
                                    <div class="modal fade" id="edit.id">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam, repudiandae modi quae adipisci sunt, quaerat nihil est mollitia delectus consequuntur voluptate nesciunt veniam impedit, odio ducimus provident dolore quia obcaecati.
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="<?= base_url('Acc/edit/') ?>" class="badge badge-danger" data-toggle="modal" data-target="#hapus.id">hapus</a> 
                                    <div class="modal fade" id="hapus.id">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam, repudiandae modi quae adipisci sunt, quaerat nihil est mollitia delectus consequuntur voluptate nesciunt veniam impedit, odio ducimus provident dolore quia obcaecati.
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
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
                                <td>Rp. 9.999.999</td>
                            </tr>
                        </table>       
                    </div>      
                </div>
            </div>
        </div>
</div>