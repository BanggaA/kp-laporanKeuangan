<div class="main-content-inner">
    <div class="col-12 my-5">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between pb-3">
                <h4 class="header-title my-3">Data Table Default</h4>
                <button type="button" class="btn btn-primary btn-xs mt-2 mb-3" data-toggle="modal" data-target="#exampleModalLong">Launch demo modal</button>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalLong">
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
                            <tr>
                                <td>2008/11/28</td>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>
                                    <a href="" class="badge badge-info" data-toggle="modal" data-target="#edit.id">edit</a> 
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modals area -->
<div> 
    <div class="modal fade" id="edit.id">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">edit user</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="col-12">
                    <table class="text-center">
                        <thead class="bg-light text-capitalize">
                            <tr>
                                <th>Tanggal</th>
                                <th>kategori</th>
                                <th>jumlah</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2008/11/28</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>
                                    <a href="" class="badge badge-info" data-toggle="modal" data-target="#edit.id.id">edit</a> 
                                    <a href="" class="badge badge-Danger" data-toggle="modal" data-target="#hapus.id.id">hapus</a> 
                                </td>
                            </tr>
                        </tbody>
                    </table>
</div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                </div>
            </div>
        </div>
    </div>
    
    <div> 
                                <div class="modal fade" id="edit.id.id">
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
                                                        <label class="col-form-label">user level</label>
                                                        <select class="form-control">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                        </select>
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
                                <div class="modal fade" id="hapus.id.id">
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
                                                <button type="button" class="btn btn-danger">Hapus Akun</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
</div>