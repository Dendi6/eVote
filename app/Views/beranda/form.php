<form action="<?= base_url('home/vote'); ?>" method="POST">
    <?= csrf_field(); ?>
    <div class="form-group">
        <label for="nik">NIK</label>
        <input type="text" class="form-control" id="nik" name="nik" autofocus required>
    </div>
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
    </div>

    <div class="form-group">
        <p>Tentukan Pilihan Anda !</p>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="pilihan" id="pilihan1" value="Dendi">
            <label class="form-check-label" for="pilihan1">Dendi</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="pilihan" id="pilihan2" value="Reza Zulfan">
            <label class="form-check-label" for="pilihan2">Reza Zulfan</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="pilihan" id="pilihan3" value="Rijal El Fikri">
            <label class="form-check-label" for="pilihan3">Rijal El Fikri</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="pilihan" id="pilihan4" value="Siti Marliana">
            <label class="form-check-label" for="pilihan4">Siti Marliana</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="pilihan" id="pilihan5" value="Marina Sascya">
            <label class="form-check-label" for="pilihan5">Marina Sascya</label>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit Pilihan</button>
</form>