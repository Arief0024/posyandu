<main id="main" class="main">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><?= $title; ?></h1>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <?= form_open('admin/petugas/ubah/'. $petugas['id_petugas']); ?>
                    <input type="hidden" name="id_petugas" class="form-control" value="<?= $petugas['id_petugas']; ?>">
                    <div class="form-group">
                        <label for="nama">Nama Petugas</label>
                        <input type="text" name="nama" id="nama" class="form-control"
                            value="<?= $petugas['nama_petugas']; ?>">
                        <small class="muted text-danger"><?= form_error('nama'); ?></small>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-dark">Ubah</button>
                    </div>
                    <div class="form-group">
                        <td>
                            <a href="<?= base_url('admin/petugas/index/'); ?>"
                                class="btn btn-success btn-sm">kembali</a>
                        </td>
                    </div>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</main>