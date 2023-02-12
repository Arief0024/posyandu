<main id="main" class="main">
    
    <div class="row mb-2">
        <div class="col-md-6">
            <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#formModalbayi">
                <i class="fas fa-plus"></i> Tambah Data Bayi
            </button>
            <?php if(validation_errors()) : ?>
            <div class="alert alert-danger" role="alert"><?= validation_errors(); ?></div>
            <?php endif; ?>
            <?= $this->session->flashdata('pesan'); ?>
        </div>
    </div>

    <div class="main">
        <div class="card-body">
            <div class="row mb">
                <div class="col-md-0">
                    <div class="table-responsive">
                        <table class="table table-striped" id="datatables">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Nik Bayi</td>
                                    <td>Nama Bayi</td>
                                    <td>Tempat Lahir</td>
                                    <td>Tanggal Lahir</td>
                                    <td>Agama</td>
                                    <td>Kelamin</td>
                                    <td>Umur</td>
                                    <td>Aksi</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; foreach($bayi as $u) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $u['nik_bayi']; ?></td>
                                    <td><?= $u['nama_bayi']; ?></td>
                                    <td><?= $u['tempat']; ?></td>
                                    <td><?= $u['tanggal']; ?></td>
                                    <td><?= $u['agama'] ?></td>
                                    <td><?= $u['jk_bayi'] == 'L' ? 'L' : 'P'; ?></td>
                                    <td><?php $lahir =new DateTime($u['tanggal']);
                                        $today =new DateTime();
                                        $umur = $today->diff($lahir);
                                        echo $umur->y; echo " Tahun, "; echo $umur->m; echo " Bulan, dan "; echo $umur->d; echo " Hari";
                                    ?></td>
                                    <td>
                                        <a href="<?= base_url('admin/bayi/ubah/') . $u['id_bayi']; ?>"
                                            class="btn btn-info"><i class="fas fa-edit"></i></a>
                                        <a href="<?= base_url('admin/bayi/hapus/') . $u['id_bayi']; ?>"
                                            class="btn btn-danger" onclick="return confirm('Yakin Hapus ?')"><i
                                                class="fas fa-trash"></i></a>
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
</main>
<!-- Modal -->
<div class="modal fade" id="formModalbayi" tabindex="0" aria-labelledby="formModalLabelpetugas" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabelpetugas">Tambah Data Bayi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?= form_open('admin/bayi'); ?>
                <div class="form-group">
                    <label for="nik">Nik Bayi</label>
                    <input type="text" name="nik" id="nik" class="form-control">
                    <small class="muted text-danger"><?= form_error('nik'); ?></small>
                </div>
                <div class="form-group">
                    <label for="nama">Nama Bayi</label>
                    <input type="text" name="nama" id="nama" class="form-control">
                    <small class="muted text-danger"><?= form_error('nama'); ?></small>
                </div>
                <div class="form-group">
                    <label for="tempat">Tempat Lahir</label>
                    <input type="text" name="tempat" id="tempat" class="form-control">
                    <small class="muted text-danger"><?= form_error('tempat'); ?></small>
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal Lahir</label>
                    <input type="text" name="tanggal" id="tanggal" class="form-control">
                    <small class="muted text-danger"><?= form_error('tanggal'); ?></small>
                </div>
                <div class="form-group">
                    <label for="agama">Agama</label>
                    <select name="agama" id="agama" class="form-control">
                        <option value="">-- Masukan Agama--</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">kristen</option>
                        <option value="Katholik">katholik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                    </select>
                    <small class="muted text-danger"><?= form_error('agama'); ?></small>
                </div>
                <div class="form-group">
                    <label for="jk">Jenis Kelamin Bayi</label>
                    <select name="jk" id="jk" class="form-control">
                        <option value="">-- Pilih Jenis Kelamin --</option>
                        <option value="L">L</option>
                        <option value="P">P</option>
                    </select>
                    <small class="muted text-danger"><?= form_error('jk'); ?></small>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-dark">Tambah</button>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>