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

                    <div class="form-group">
                        <label for="nama">Nama Penumpang</label>
                        <input type="text" name="nama" value="<?= set_value('nama'); ?>" class="form-control" id="nama" placeholder="nama">
                        <?= form_error('nama','<small class="text-danger pl-3">','</small>'); ?>
                    </div>

                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                            <option value="laki-laki" <?php if (set_value('jenis_kelamin') == "laki-laki") {
                                                                echo "selected";
                                                            } ?>>laki-laki</option>
                            <option value="perempuan" <?php if (set_value('jenis_kelamin') == "perempuan") {
                                                                echo "selected";
                                                            } ?>>perempuan</option>
                        </select>
                        <?= form_error('jenis_kelamin','<small class="text-danger pl-3">','</small>'); ?>
                    </div>

                    <div class="form-group">
                        <label for="No_bangku">No Bangku</label>
                        <input type="text" name="No_bangku" value="<?= set_value('No_bangku'); ?>" class="form-control" id="No_bangku" placeholder="No_bangku">
                        <?= form_error('No_bangku','<small class="text-danger pl-3">','</small>'); ?>
                    </div>

                    <div class="form-group">
                        <label for="waktu_keberangkatan">waktu keberangkatan</label>
                        <input type="text" name="waktu_keberangkatan" value="<?= set_value('waktu_keberangkatan'); ?>" class="form-control" id="waktu_keberangkatan" placeholder="waktu_keberangkatan">
                        <?= form_error('waktu_keberangkatan','<small class="text-danger pl-3">','</small>'); ?>
                    </div>
                    
                    <div class="form-group">
                        <label for="asal_keberangkatan">Asal keberangkatan</label>
                        <input type="text" name="asal_keberangkatan" value="<?= set_value('asal_keberangkatan'); ?>" class="form-control" id="asal_keberangkatan" placeholder="asal_keberangkatan">
                        <?= form_error('asal_keberangkatan','<small class="text-danger pl-3">','</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="tujuan_keberangkatan">tujuan keberangkatan</label>
                        <input type="text" name="tujuan_keberangkatan" value="<?= set_value('tujuan_keberangkatan'); ?>" class="form-control" id="tujuan_keberangkatan" placeholder="tujuan_keberangkatan">
                        <?= form_error('tujuan_keberangkatan','<small class="text-danger pl-3">','</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="no_hp">NO HP</label>
                        <input type="text" name="no_hp" value="<?= set_value('no_hp'); ?>" class="form-control" id="no_hp" placeholder="NO HP">
                        <?= form_error('no_hp','<small class="text-danger pl-3">','</small>'); ?>
                    </div>
                    
                    <a href="<?= base_url('Penumpang') ?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="tambah" class="btn btn-primary float right">Tambah Penumpang </button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>