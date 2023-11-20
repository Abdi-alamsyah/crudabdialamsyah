<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card”">
        <div class=" card-header justify-content-center">
                Form Edit Data Prodi
            </div>

            <div class="card-body">
                <form action="<?= base_url('prodi/update'); ?>" method="POST">
                    <input type="hidden" name="id"value="<?= $prodi['id']; ?>">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">

                    </div>
                    <div class="form-group">
                        <label for="ruangan">Ruangan</label>
                        <input type="text" name="ruangan" class="form-control" id="ruangan" placeholder="ruangan">

                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" name="jurusan" class="form-control" id="jurusan" placeholder="jurusan">

                    </div>
                    <div class="form-group">
                        <label for="akreditasi">akreditasi</label>
                        <input type="text" name="akreditasi" class="form-control" id="akreditasi" placeholder="akreditasi">

                    </div>
                    <div class="form-group">
                        <label for="nama_kaprodi">nama kaprodi</label>
                        <input type="text" name="nama_kaprodi" class="form-control" id="nama_kaprodi" placeholder="nama_kaprodi">

                    </div>
                    <div class="form-group">
                        <label for="tahun_berdiri">tahun berdiri</label>
                        <input type="text" name="tahun_berdiri" class="form-control" id="tahun_berdiri" placeholder="tahun_berdiri">

                    </div>
                    <div class="form-group">
                        <label for="output_lulusan">output lulusan</label>
                        <input type="text" name="output_lulusan" class="form-control" id="output_lulusan" placeholder="output_lulusan">

                    </div>
                    <a href="<?= base_url('prodi') ?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="tambah" class="btn btn-primary float right">Tambah Prodi</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>