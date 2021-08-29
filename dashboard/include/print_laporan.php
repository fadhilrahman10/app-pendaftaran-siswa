<?php
include '../../koneksi/koneksi.php';
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

  <title>Print Laporan</title>
</head>

<body>

  <?php

  $nama_admin = $_GET['nama'];

  $query  =  "SELECT * FROM pendaftaran";
  $exec   =  mysqli_query($conn, $query);

  ?>

  <div class="container">
    <div class="row mt-5 text-center">
      <h2>Laporan Pendaftaran Siswa Baru</h2>
      <h5 class="mb-3">SMKN 1 Desa Ujungbatu Timur</h5>
      <hr>
    </div>
    <div class="row mt-4">
      <div class="col-12">
        <p>Tanggal : <?= date('d F Y'); ?></p>
      </div>
      <div class="col-12">
        <table class="table table-bordered border-dark">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Tempat Lahir</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Alamat</th>
              <th scope="col">Mendaftar</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            while ($rows = mysqli_fetch_array($exec)) {
              $tanggal = date('d F Y', strtotime($rows['tanggal_lahir']));
              $tanggal_daftar = date('d F Y', strtotime($rows['tanggal_daftar']));
            ?>
              <tr>
                <th scope="row"><?= $no++; ?></th>
                <td><?= $rows['nama']; ?></td>
                <td><?= $rows['tempat_lahir']; ?></td>
                <td><?= $tanggal; ?></td>
                <td><?= $rows['alamat']; ?></td>
                <td><?= $tanggal_daftar; ?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>

    <div class="row justify-content-between text-center">
      <div class="col-4">
        <p>Dibuat Oleh, </p>
        <img src="../../assets/img/ttd.png" alt="" class="w-25">
        <p class="">
          <strong class="text-decoration-underline d-block"><?= strtoupper($nama_admin); ?></strong>
          <strong>Admin</strong>
        </p>
      </div>
      <div class="col-4">
        <p>Diterima Oleh, </p>
        <img src="../../assets/img/ttd.png" alt="" class="w-25">
        <p class="">
          <strong class="text-decoration-underline d-block">SOHANDI, S.Pd.</strong>
          <strong>Kepala Sekolah</strong>
        </p>
      </div>
    </div>
  </div>

  <script>
    window.print();
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>


</body>

</html>