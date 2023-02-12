<main id="main" class="main">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <?= form_open('admin/ibu/ubah/'. $ibu['id_ibu']); ?>
                    <input type="hidden" name="id_ibu" class="form-control" value="<?= $ibu['id_ibu']; ?>">
                    <div class="form-group">
                        <label for="nik">Nik Ibu</label>
                        <input type="text" name="nik_ibu" id="nik_ibu" class="form-control"
                            value="<?= $ibu['nik_ibu']; ?>">
                        <small class="muted text-danger"><?= form_error('nik_ibu'); ?></small>
                    </div>
                    <input type="hidden" name="id_ibu" class="form-control" value="<?= $ibu['id_ibu']; ?>">
                    <div class="form-group">
                        <label for="nama">Nama Ibu</label>
                        <input type="text" name="nama_ibu" id="nama_ibu" class="form-control"
                            value="<?= $ibu['nama_ibu']; ?>">
                        <small class="muted text-danger"><?= form_error('nama_ibu'); ?></small>
                    </div>

                    <div class="form-group">
                        <label for="ayah">Nama Ayah</label>
                        <input type="text" name="ayah" id="ayah" class="form-control" value="<?= $ibu['nama_ayah']; ?>">
                        <small class="muted text-danger"><?= form_error('ayah'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control"
                            value="<?= $ibu['alamat']; ?>">
                        <small class="muted text-danger"><?= form_error('alamat'); ?></small>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-dark">Ubah</button>
                    </div>
                    <div class="form-group">
                        <td>
                            <a href="<?= base_url('admin/ibu/index/'); ?>" class="btn btn-success btn-sm">kembali</a>
                        </td>
                    </div>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</main>