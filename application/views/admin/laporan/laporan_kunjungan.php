<div class="container ">
    <h4 class="text-center mt-3 mb-4">Laporan Rekam Medis</h4>
    <medium class="text-center ">Perum Pesona laguna 2, Depok</medium>
    <center><img src="<?php echo base_url(); ?>assets/img/melati.png" class="img-fluid rounded" width="220px"><br>
        <br><br>
        <div class="row">
            <div class="col-md">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Tanggal Kunjungan</td>
                            <td>Nama Bayi</td>
                            <td>Nama Ibu</td>
                            <td>Umur</td>
                            <td>Jenis Kelamin</td>
                            <td>Tindakan</td>
                            <td>Diagnosa</td>
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
                            <td><?= $u['jk_bayi'] == 'L' ? 'Laki-Laki' : 'Perempuan'; ?></td>
                            <td><?= $u['tindakan']; ?></td>
                            <td><?= $u['diagnosa']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 offset-md-8 mt-5">
                <table>
                    <tr>
                        <td></td>
                        <td>
                            <?php $tgl = date_create(date('d-m-Y')); ?>
                            <p>Depok, <?= date_format($tgl, 'd M Y'); ?>
                                <br>
                                Administrator <br><br>
                                ______________________
                            </p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
</div>

<script>
window.print();
</script>