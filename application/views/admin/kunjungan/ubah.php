<main id="main" class="main">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <?= form_open('admin/kunjungan/ubah/'. $kunjungan['id_berobat']); ?>
                    <div class="modal-body">
                        <?= form_open('admin/kunjungan'); ?>
                        <div class="form-group">
                            <label for="bayi">Bayi</label>
                            <select name="bayi" id="bayi" class="form-control" value="<?= $bayi['nama_bayi']; ?>>
                                <option value="">-- Pilih Bayi --</option>
                                <?php foreach($bayi as $p) : ?>
                                <option value=" <?= $p['id_bayi']; ?>"><?= $p['nama_bayi']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <small class="muted text-danger"><?= form_error('bayi'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="ibu">Nama Ibu</label>
                            <select name="ibu" id="ibu" class="form-control" value="<?= $ibu['nama_ibu']; ?>>
                                <option value="">-- Pilih Nama Ibu --</option>
                                <?php foreach($ibu as $d) : ?>
                                <option value=" <?= $d['id_ibu']; ?>"><?= $d['nama_ibu']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <small class="muted text-danger"><?= form_error('ibu'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="petugas">Petugas</label>
                            <select name="petugas" id="petugas" class="form-control" value="<?= $petugas['nama_petugas']; ?>>
                                <option value="">-- Pilih Petugas --</option>
                                <?php foreach($petugas as $d) : ?>
                                <option value=" <?= $d['id_petugas']; ?>"><?= $d['nama_petugas']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <small class="muted text-danger"><?= form_error('petugas'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tgl">Tanggal berobat</label>
                            <input type="date" name="tgl" id="tgl" class="form-control">
                            <small class="muted text-danger"><?= form_error('tgl'); ?></small>
                        </div>
                        <div class="modal-footer">
                            <a href="<?= base_url('admin/kunjungan/index/'); ?>"
                                class="btn btn-success btn-sm">kembali</a>
                            <button type="submit" class="btn btn-dark">Tambah</button>
                        </div>
                        <?= form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
</main>