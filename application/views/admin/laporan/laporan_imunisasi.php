<div class="container">
    <h4 class="text-center mt-3 mb-4">Laporan Data Imunisasi</h4>
    <small class="text-center">Perum Pesona laguna 2, Depok</small>
    <center><img src="<?php echo base_url(); ?>assets/img/melati.png" class="img-fluid rounded" width="220px"><br>
        <br><br>
        <div class="row">
            <div class="col-md">
                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Nama Imunisasi</th>
                    </tr>
                    <?php $no = 1; foreach($imunisasi as $d) : ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $d['nama_imunisasi']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 offset-md-8">
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