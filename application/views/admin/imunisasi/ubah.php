<main id="main" class="main">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <?= form_open('admin/imunisasi/ubah/'. $imunisasi['id_imunisasi']); ?>
                    <input type="hidden" name="id_imunisasi" class="form-control"
                        value="<?= $imunisasi['id_imunisasi']; ?>">
                    <div class="form-group">
                        <label for="nama">Nama Imunisasi</label>
                        <input type="text" name="nama" id="nama" class="form-control"
                            value="<?= $imunisasi['nama_imunisasi']; ?>">
                        <small class="muted text-danger"><?= form_error('nama'); ?></small>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-dark">Ubah</button>
                    </div>
                    <div class="form-group">
                        <td>
                            <a href="<?= base_url('admin/imunisasi/index/'); ?>"
                                class="btn btn-success btn-sm">kembali</a>
                        </td>
                    </div>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</main>