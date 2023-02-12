<main id="main" class="main">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <?= form_open('admin/bayi/ubah/'. $bayi['id_bayi']); ?>
                    <input type="hidden" name="id_bayi" class="form-control" value="<?= $bayi['id_bayi']; ?>">
                    <div class="form-group">
                        <label for="nik">Nik Bayi</label>
                        <input type="text" name="nik" id="nik" class="form-control" value="<?= $bayi['nik_bayi']; ?>">
                        <small class="muted text-danger"><?= form_error('nik'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Bayi</label>
                        <input type="text" name="nama" id="nama" class="form-control"
                            value="<?= $bayi['nama_bayi']; ?>">
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
                            <option value="L" <?php if($bayi['jk_bayi'] == 'L'){echo "selected";} ?>>L</option>
                            <option value="P" <?php if($bayi['jk_bayi'] == 'P'){echo "selected";} ?>>P</option>
                        </select>
                        <small class="muted text-danger"><?= form_error('jk'); ?></small>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-dark">Ubah</button>
                    </div>
                    <div class="form-group">
                        <td>
                            <a href="<?= base_url('admin/bayi/index/'); ?>" class="btn btn-success btn-sm">kembali</a>
                        </td>
                    </div>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</main>