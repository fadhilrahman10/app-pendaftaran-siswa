<h2>Profile</h2>

<div class="col-sm-12 col-md-8 col-lg-10 col-lg-offset-1">
    <div class="card" style="margin-top: 50px">
        <div class="card-header" data-background-color="blue">
            <h4 class="title">Biodata Pendaftar</h4>
            <p class="category">Periksan data anda dibawah, pastikan sudah benar</p>
        </div>
        <div class="card-content table-responsive">

            <h3 style="overflow: hidden;"><b>Data Siswa</b></h3>
            <table class="table table-hover">
                <tbody>
                    <tr>
                        <td><b>Email</b></td>
                        <td>: <?php echo $email; ?> </td>
                    </tr>
                    <tr>
                        <td><b>Nomor Induk Siswa</b></td>
                        <td>: <?php echo $nis; ?></td>
                    </tr>
                    <tr>
                        <td><b>Nama</b></td>
                        <td>: <?php echo $nama; ?></td>
                    </tr>
                    <tr>
                        <td><b>Nama Panggilan</b></td>
                        <td>: <?php echo $nama_panggilan;; ?></td>
                    </tr>
                    <tr>
                        <td><b>TTL</b></td>
                        <td>: <?php echo $tempat_lahir . ", " . $tanggal_lahir;; ?>, <?php isset($_SESSION['birth_date'])  ?  print($_SESSION['birth_date']) : "2009-01-01"; ?></td>
                    </tr>
                    <tr>
                        <td><b>Agama</b></td>
                        <td>: <?php echo $agama; ?></td>
                    </tr>
                    <tr>
                        <td><b>Jenis Kelamin</b></td>
                        <td>: <?php echo $jenis_kelamin; ?></td>
                    </tr>

                    <tr>
                        <td><b>Anak Ke -</b></td>
                        <td>: <?php echo $anak_ke . " dari " . $jumlah_saudara ?> bersaudara</td>
                    </tr>
                    <tr>
                        <td><b>Telp</b></td>
                        <td>: <?php echo $telp; ?></td>
                    </tr>

                    <tr>
                        <td><b>Alamat</b></td>
                        <td>: <?php echo $alamat; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card" style="margin-top: 50px; margin-bottom: 10rem;">
        <div class="card-header" data-background-color="blue">
            <h4 class="title">Syarat Pendaftaran</h4>
            <p class="category">Periksan data anda dibawah, pastikan sudah benar</p>
        </div>
        <div class="card-content table-responsive">


            <div class="row">
                <div class="col-md-4">
                    <h3 style="overflow: hidden;"><b>Foto</b></h3>
                    <?php if ($foto_anak != "") : ?>
                        <img src="../assets/uploads/<?= $foto_anak; ?>" alt="Akte" class="img-fluid">
                    <?php endif ?>
                </div>
                <div class="col-md-4">
                    <h3 style="overflow: hidden;"><b>Akte</b></h3>
                    <?php if ($upload_akte != "") : ?>
                        <img src="../assets/uploads/<?= $upload_akte; ?>" alt="Akte" class="img-fluid">
                    <?php endif ?>
                </div>
                <div class="col-md-4">
                    <h3 style="overflow: hidden;"><b>Kartu Keluarga</b></h3>
                    <?php if ($upload_kartu_keluarga != "") : ?>
                        <img src="../assets/uploads/<?= $upload_kartu_keluarga; ?>" alt="Akte" class="img-fluid">
                    <?php endif ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h3 style="overflow: hidden;"><b>Ijazah</b></h3>
                    <?php if ($upload_ijazah != "") : ?>
                        <img src="../assets/uploads/<?= $upload_ijazah; ?>" alt="Akte" class="img-fluid">
                    <?php endif ?>
                </div>
                <div class="col-md-6">
                    <h3 style="overflow: hidden;"><b>Surat Keterangan Lulus</b></h3>
                    <?php if ($upload_skl != "") : ?>
                        <img src="../assets/uploads/<?= $upload_skl; ?>" alt="Akte" class="img-fluid">
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>