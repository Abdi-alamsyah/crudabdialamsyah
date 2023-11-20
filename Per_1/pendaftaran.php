<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
    <div>
        <a href="#">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSoeY2bTPjkr_LWGqggJ3q03BtFfL9Om8APDeC9Uyzww&s" class="img-fluid" alt="Responsive image">
        </a>

    </div>
    <div style="margin-left: 1%;">
    
    <hr>
    <div class="form-element">
        <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
        <br>
        <input type="email" class="form-control" id="exampleFormControlInput1">
        <br>
    </div>

    <div class="form-element">
        <label for="exampleFormControlTextarea1" class="form-label">Nama Panggilan</label>
        <br>
        <input class="form-control" id="exampleFormControlTextarea1" ><br>
    </div>

    <div class="form-element">
    <label for="exampleFormControlTextarea1" class="form-label">Jenis Kelamin</label><br>
        <select class="form-select" aria-label="Default select example">
            <option selected>Silahkan pilih</option>
            <option value="1">Laki-Laki</option>
            <option value="2">Perempuan</option>
        </select>
        <br><br>
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Berasal dari TK</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Jika tidak melalui TK bisa di lewatkan.</div>
    </div>
    <p class="h5">Calon siswa yang dapat mendaftar minimal 1 juli 2020 berumur 5 tahun 6 bulan</p><br>

    <div class="form-element">
        <label for="exampleFormControlTextarea1" class="form-label">Tempat Lahir</label>
        <br>
        <input class="form-control" id="exampleFormControlTextarea1" ><br>
    </div>

    <div class="form-element">
    <label for="exampleFormControlTextarea1" class="form-label">Tanggal Lahir</label>
    <br>
    <select class="form-select" aria-label="Default select example">
        <option selected>Tanggal</option>
        <?php
        for ($i = 1; $i <= 31; $i++) {
            echo "<option value='$i'>$i</option>";
        }
        ?>
    </select>
    <select class="form-select" aria-label="Default select example">
        <option selected>Bulan</option>
        <?php
        for ($i = 1; $i <= 12; $i++) {
            echo "<option value='$i'>$i</option>";
        }
        ?>
    </select>
    <select class="form-select" aria-label="Default select example">
        <option selected>Tahun</option>
        <?php
        for ($i = 2000; $i <= 2024; $i++) {
            echo "<option value='$i'>$i</option>";
        }
        ?>
    </select>
    <br><br>
    </div>

    <div class="form-element">
        <label for="exampleFormControlTextarea1" class="form-label">No.Akta Lahir</label>
        <br>
        <input class="form-control" id="exampleFormControlTextarea1" ><br>
    </div>

    <div class="form-element">
        <label for="exampleFormControlTextarea1" class="form-label">NIK</label>
        <br>
        <input class="form-control" id="exampleFormControlTextarea1" ><br>
    </div>

    <form>
    <label for="exampleFormControlTextarea1" class="form-label">Anak ke</label><br>
    <div class="row">
        <div class="col">
        <input type="text" class="form-control" placeholder="sesuai akta">
        </div>
        <div class="col">
        <input type="text" class="form-control" placeholder="sesuai kk">
        </div>
    </div><br>
    </form>

    <div class="form-element">
    <label for="exampleFormControlTextarea1" class="form-label">Status anak</label><br>
        <select class="form-select" aria-label="Default select example">
            <option selected>Silahkan pilih</option>
            <option value="1">kandung</option>
            <option value="2">angkat</option>
            <option value="3">tiri</option>
        </select>
        <br><br>
    </div>

    <div class="form-element">
        <label for="exampleFormControlTextarea1" class="form-label">Jumlah saudara kandung</label>
        <br>
        <input class="form-control" id="exampleFormControlTextarea1" ><br>
    </div>

    <div class="form-element">
    <label for="exampleFormControlTextarea1" class="form-label">Kewarganegaraan</label><br>
        <select class="form-select" aria-label="Default select example">
            <option selected>Silahkan pilih</option>
            <option value="1">WNI</option>
            <option value="2">WNA</option>
        </select>
        <br><br>
    </div>

    <div class="form-element">
    <label for="exampleFormControlTextarea1" class="form-label">Agama</label><br>
        <select class="form-select" aria-label="Default select example">
            <option selected>Silahkan pilih</option>
            <option value="1">Islam</option>
            <option value="2">Kristen</option>
            <option value="3">Hindu</option>
            <option value="4">Budha</option>
            <option value="5">Konghucu</option>
        </select>
        <br><br>
    </div>

    <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Anak berkebutuhan khusus</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
          <label class="form-check-label" for="gridRadios1">
            Ya
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
            Tidak
          </label><br><br>
        </div>
      </div>
    </div>
    </fieldset>

    <form>
    <label for="exampleFormControlTextarea1" class="form-label">Keadaan jasmani</label><br>
    <div class="row">
        <div class="col">
        <input type="text" class="form-control" placeholder="penyakit yang pernah diderita">
        </div>
        <div class="col">
        <input type="text" class="form-control" placeholder="berat badan">
        </div>
        <div class="col">
        <input type="text" class="form-control" placeholder="tinggi badan">
        </div>
        <div class="col">
        <input type="text" class="form-control" placeholder="Golongan darah">
        </div>
    </div><br>
    </form>

    <form>
    <label for="exampleFormControlTextarea1" class="form-label">Alamat sesuai kk</label><br>
    <div class="row">
        <div class="col">
        <input type="text" class="form-control" placeholder="Alamat (beserta RT/RW)">
        </div>
        <div class="col">
        <input type="text" class="form-control" placeholder="Kecamatan">
        </div>
        <div class="col">
        <input type="text" class="form-control" placeholder="Kelurahan">
        </div>
        <div class="col">
        <input type="text" class="form-control" placeholder="Kota / Desa">
        </div>
        <div class="col">
        <input type="text" class="form-control" placeholder="Kode pos">
        </div>
    </div><br>
    </form>

    <form>
    <label for="exampleFormControlTextarea1" class="form-label">Alamat Domisili / Yang Ditinggali</label><br>
    <div class="row">
        <div class="col">
        <input type="text" class="form-control" placeholder="Alamat (beserta RT/RW)">
        </div>
        <div class="col">
        <input type="text" class="form-control" placeholder="Kecamatan">
        </div>
        <div class="col">
        <input type="text" class="form-control" placeholder="Kelurahan">
        </div>
        <div class="col">
        <input type="text" class="form-control" placeholder="Kota / Desa">
        </div>
        <div class="col">
        <input type="text" class="form-control" placeholder="Kode pos">
        </div>
    </div><br>
    </form>

    <div class="form-element">
    <label for="exampleFormControlTextarea1" class="form-label">Tinggal Bersama</label><br>
        <select class="form-select" aria-label="Default select example">
            <option selected>Silahkan pilih</option>
            <option value="1">Orang tua</option>
            <option value="2">Saudara</option>
            <option value="3">Kost / Kontrak</option>
        </select>
        <br><br>
    </div>

    <div class="form-element">
    <label for="exampleFormControlTextarea1" class="form-label">Jenis Tinggal</label><br>
        <select class="form-select" aria-label="Default select example">
            <option selected>Silahkan pilih</option>
            <option value="1">Rumah</option>
            <option value="2">Kost / Kontrak</option>
        </select>
        <br><br>
    </div>

    <form>
    <label for="exampleFormControlTextarea1" class="form-label">Jarak ke sekolah</label><br>
    <div class="row">
        <div class="col">
        <input type="text" class="form-control" placeholder="meter / kilometer">
        </div>
    </div><br>
    </form>

    <div class="form-element">
    <label for="exampleFormControlTextarea1" class="form-label">Alat Transportasi</label><br>
        <select class="form-select" aria-label="Default select example">
            <option selected>Silahkan pilih</option>
            <option value="1">Kendaraan sendiri</option>
            <option value="2">Diantar orang tua</option>
            <option value="3">Transportasi umum</option>
        </select>
        <br><br>
    </div>

    <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Penerima bantuan</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
          <label class="form-check-label" for="gridRadios1">
            Ya
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
            Tidak
          </label><br><br>
        </div>
      </div>
    </div>
    </fieldset>

    <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Jenis bantuan</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
          <label class="form-check-label" for="gridRadios1">
            BSM
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
            Bidik Misi
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
            PIP
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
            KKS
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
            PKH
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
            Lainnya
          </label><br><br>
        </div>
      </div>
    </div>
    </fieldset>

    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    </form>
</body>
</html>