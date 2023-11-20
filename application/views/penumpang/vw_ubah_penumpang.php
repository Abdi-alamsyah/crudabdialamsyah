<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card”">
        <div class=" card-header justify-content-center">
                Form Edit Data Penumpang
            </div>

            <div class="card-body">
                <form action="" method="POST">
                    <input type="hidden" name="id" value="<?= $penumpang['nama']; ?>">
                    <div class="form-group">
                        <label for="nama">Nama Penumpang</label>
                        <input type="text" name="nama" value="<?= $penumpang['nama']; ?>" class="form-control" id="nama" placeholder="Nama">
                        <?= form_error('nama','<small class="text-danger pl-3">','</small>'); ?>
                    </div>

                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                            <option value="laki-laki" <?php if ($penumpang['jenis_kelamin'] == "laki-laki") {
                                                                echo "selected";
                                                            } ?>>laki-laki</option>
                            <option value="perempuan" <?php if ($penumpang['jenis_kelamin'] == "perempuan") {
                                                                echo "selected";
                                                            } ?>>perempuan</option>
                        </select>
                        <?= form_error('jenis_kelamin','<small class="text-danger pl-3">','</small>'); ?>
                    </div>

                    <div class="form-group">
                        <label for="No_bangku">No Bangku</label>
                        <input type="text" name="No_bangku" value="<?= $penumpang['No_bangku']; ?>" class="form-control" id="No_bangku" placeholder="No_bangku">
                        <?= form_error('No_bangku','<small class="text-danger pl-3">','</small>'); ?>
                    </div>

                    <div class="form-group">
                        <label for="waktu_keberangkatan">waktu keberangkatan</label>
                        <input type="text" name="waktu_keberangkatan" value="<?= $penumpang['waktu_keberangkatan']; ?>" class="form-control" id="waktu_keberangkatan" placeholder="waktu_keberangkatan">
                        <?= form_error('waktu_keberangkatan','<small class="text-danger pl-3">','</small>'); ?>
                    </div>
                    
                    <div class="form-group">
                        <label for="asal_keberangkatan">Asal keberangkatan</label>
                        <input type="text" name="asal_keberangkatan" value="<?= $penumpang['asal_keberangkatan']; ?>" class="form-control" id="asal_keberangkatan" placeholder="asal_keberangkatan">
                        <?= form_error('asal_keberangkatan','<small class="text-danger pl-3">','</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="tujuan_keberangkatan">tujuan keberangkatan</label>
                        <input type="text" name="tujuan_keberangkatan" value="<?= $penumpang['tujuan_keberangkatan']; ?>" class="form-control" id="tujuan_keberangkatan" placeholder="tujuan_keberangkatan">
                        <?= form_error('tujuan_keberangkatan','<small class="text-danger pl-3">','</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="no_hp">NO HP</label>
                        <input type="text" name="no_hp" value="<?= $penumpang['no_hp']; ?>" class="form-control" id="no_hp" placeholder="NO HP">
                        <?= form_error('no_hp','<small class="text-danger pl-3">','</small>'); ?>
                    </div>
                    
                    <a href="<?= base_url('penumpang') ?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="tambah" class="btn btn-primary float right">Tambah Mahasiswa </button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>