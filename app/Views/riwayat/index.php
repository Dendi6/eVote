<?= $this->extend('layout/index'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="card mt-3">
        <div class="card-body">
            <p>Riwaya Pemilhan dan waktu pemilihan.</p>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Waktu Pemilihan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($data as $d) : ?>
                        <tr>
                            <th><?= $i++; ?></th>
                            <td><?= $d['nik']; ?></td>
                            <td><?= $d['nama']; ?></td>
                            <td><?= $d['created_at']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>