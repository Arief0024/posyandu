<main id="main" class="main">
    <div class="row mb-2">
        <div class="col-md-6">
            <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#formModalKunjungan">
                <i class="fas fa-plus"></i> Tambah Data Kunjungan
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
                                    <td>Tanggal</td>
                                    <td>Nama Bayi</td>
                                    <td>Nama Ibu</td>
                                    <td>Umur Bayi</td>
                                    <td>Petugas</td>
                                    <td>Tindakan </td>
                                    <td>Ubah/Hapus</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; foreach($kunjungan as $u) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $u['tgl_berobat']; ?></td>
                                    <td><?= $u['nama_bayi']; ?></td>
                                    <td><?= $u['nama_ibu']; ?></td>
                                    <td><?php $lahir =new DateTime($u['tanggal']);
                                        $today =new DateTime();
                                        $umur = $today->diff($lahir);
                                        echo $umur->y; echo " Tahun, "; echo $umur->m; echo " Bulan, dan "; echo $umur->d; echo " Hari";
                                    ?></td>
                                    <td><?= $u['nama_petugas']; ?></td>
                                    <td>
                                        <a href="<?= base_url('admin/kunjungan/tindakan/' . $u['id_berobat']); ?>"
                                            class="btn btn-success btn-sm">Tindakan</a>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('admin/kunjungan/ubah/') . $u['id_berobat']; ?>"
                                            class="btn btn-info"><i class="fas fa-edit"></i></a>
                                        <a href="<?= base_url('admin/kunjungan/hapus/') . $u['id_berobat']; ?>"
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
<div class="modal fade" id="formModalKunjungan" tabindex="-1" aria-labelledby="formModalLabelKunjungan"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabelKunjungan">Tambah Data Medis</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?= form_open('admin/kunjungan'); ?>
                <div class="form-group">
                    <label for="bayi">Bayi</label>
                    <select name="bayi" id="bayi" class="form-control">
                        <option value="">-- Pilih Bayi --</option>
                        <?php foreach($bayi as $p) : ?>
                        <option value="<?= $p['id_bayi']; ?>"><?= $p['nama_bayi']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <small class="muted text-danger"><?= form_error('bayi'); ?></small>
                </div>
                <div class="form-group">
                    <label for="ibu">Nama Ibu</label>
                    <select name="ibu" id="ibu" class="form-control">
                        <option value="">-- Pilih Nama Ibu --</option>
                        <?php foreach($ibu as $d) : ?>
                        <option value="<?= $d['id_ibu']; ?>"><?= $d['nama_ibu']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <small class="muted text-danger"><?= form_error('ibu'); ?></small>
                </div>
                <div class="form-group">
                    <label for="petugas">Petugas</label>
                    <select name="petugas" id="petugas" class="form-control">
                        <option value="">-- Pilih Petugas --</option>
                        <?php foreach($petugas as $d) : ?>
                        <option value="<?= $d['id_petugas']; ?>"><?= $d['nama_petugas']; ?></option>
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
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-dark">Tambah</button>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>