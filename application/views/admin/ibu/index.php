<main id="main" class="main">
    <div class="row mb-2">
        <div class="col-md-8">
            <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#formModalibu">
                <i class="fas fa-plus"></i> Tambah Data Ibu
            </button>
            <?php if(validation_errors()) : ?>
            <div class="alert alert-danger" role="alert"><?= validation_errors(); ?></div>
            <?php endif; ?>
            <?= $this->session->flashdata('pesan'); ?>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md">
                    <div class="table-responsive">
                        <table class="table table-striped" id="datatables">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Nik Ibu</td>
                                    <td>Nama Ibu</td>
                                    <td>Nama Ayah</td>
                                    <td>Alamat</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; foreach($ibu as $b) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $b['nik_ibu']; ?></td>
                                    <td><?= $b['nama_ibu']; ?></td>
                                    <td><?= $b['nama_ayah']; ?> </td>
                                    <td><?= $b['alamat']; ?> </td>
                                    <td>
                                        <a href="<?= base_url('admin/ibu/ubah/') . $b['id_ibu']; ?>"
                                            class="btn btn-info"><i class="fas fa-edit"></i></a>
                                        <a href="<?= base_url('admin/ibu/hapus/') . $b['id_ibu']; ?>"
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
<div class="modal fade" id="formModalibu" tabindex="-1" aria-labelledby="formModalLabelpetugas" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabelpetugas">Tambah Data Ibu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?= form_open('admin/ibu'); ?>
                <div class="form-group">
                    <label for="nik_ibu">Nik Ibu</label>
                    <input type="text" name="nik_ibu" id="nik_ibu" class="form-control">
                    <small class="muted text-danger"><?= form_error('nik_ibu'); ?></small>
                </div>
                <div class="form-group">
                    <label for="nama_ibu">Nama Ibu</label>
                    <input type="text" name="nama_ibu" id="nama_ibu" class="form-control">
                    <small class="muted text-danger"><?= form_error('nama_ibu'); ?></small>
                </div>
                <div class="form-group">
                    <label for="ayah">Nama Ayah</label>
                    <input type="text" name="ayah" id="ayah" class="form-control">
                    <small class="muted text-danger"><?= form_error('ayah'); ?></small>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="form-control">
                    <small class="muted text-danger"><?= form_error('alamat'); ?></small>
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