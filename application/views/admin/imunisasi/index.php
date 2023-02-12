<main id="main" class="main">
    <div class="row mb-2">
        <div class="col-md-6">
            <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#formModalimunisasi">
                <i class="fas fa-plus"></i> Tambah Data Imunisasi
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
                                    <td>Nama Imunisasi</td>
                                    <td>Ubah / Hapus </td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; foreach($imunisasi as $u) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $u['nama_imunisasi']; ?></td>
                                    <td>
                                        <a href="<?= base_url('admin/imunisasi/ubah/') . $u['id_imunisasi']; ?>"
                                            class="btn btn-info"><i class="fas fa-edit"></i></a>
                                        <a href="<?= base_url('admin/imunisasi/hapus/') . $u['id_imunisasi']; ?>"
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
<div class="modal fade" id="formModalimunisasi" tabindex="-1" aria-labelledby="formModalLabelpetugas"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabelpetugas">Tambah Data Imunisasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?= form_open('admin/imunisasi'); ?>
                <div class="form-group">
                    <label for="nama">Nama Imunisasi</label>
                    <input type="text" name="nama" id="nama" class="form-control">
                    <small class="muted text-danger"><?= form_error('nama'); ?></small>
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