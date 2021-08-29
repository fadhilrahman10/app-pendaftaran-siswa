<?php

include '../koneksi/koneksi.php';

if (isset($_POST['upload'])) {
    $targetfolderBase   = "../assets/uploads/";

    $fileNameIjazah   = date("h-m-s") . basename($_FILES['ijazah']['name']);
    $fileNameSkl   = date("h-m-s") . basename($_FILES['skl']['name']);

    $targetfolder   = $targetfolderBase . $fileNameIjazah;
    $targetfolder2  = $targetfolderBase . $fileNameSkl;


    $ok = 1;

    $query      = "SELECT * FROM siswa WHERE email='$email'";

    $exec       = mysqli_query($conn, $query);
    if ($exec) {
        while ($user = mysqli_fetch_array($exec)) {
            foreach ($user as $key => $val) {
                ${$key} = $val;
            }
        }
    }


    if ($upload_ijazah != "") {
        unlink($targetfolderBase . $upload_ijazah);
    }
    if ($upload_skl != "") {
        unlink($targetfolderBase . $upload_skl);
    }




    $file_type = $_FILES['ijazah']['type'];
    $file_type2 = $_FILES['skl']['type'];


    if ($file_type == "application/pdf" || $file_type == "image/png" || $file_type == "image/jpeg") {

        if (move_uploaded_file($_FILES['ijazah']['tmp_name'], $targetfolder)) {

            $query  = "UPDATE siswa SET upload_ijazah='$fileNameIjazah' WHERE email='$email'";

            $exec   = mysqli_query($conn, $query);

            if ($exec) {
                echo "<div class='alert alert-success alert-dismissable'>
              <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
              <strong>Berhasil!</strong> Upload Ijazah(PDF, JPEG, PNG).
            </div>";
            }
        } else {

            echo "<div class='alert alert-danger alert-dismissable'>
          <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
          <strong>Gagal!</strong> Upload Ijazah(PDF, JPEG, PNG).
        </div>";
        }
    } else {

        echo "<div class='alert alert-danger alert-dismissable'>
          <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
          <strong>Gagal!</strong> Upload Ijazah harus format(.PDF, JPEG, PNG).
        </div>";
    }

    if ($file_type2 == "application/pdf" || $file_type2 == "image/png" || $file_type2 == "image/jpeg") {
        if (move_uploaded_file($_FILES['skl']['tmp_name'], $targetfolder2)) {

            $query  = "UPDATE siswa SET upload_skl='$fileNameSkl' WHERE email='$email'";

            $exec   = mysqli_query($conn, $query);

            if ($exec) {
                echo "<div class='alert alert-success alert-dismissable'>
                  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                  <strong>Berhasil!</strong> Upload Surat Keterangan Lulus(PDF, JPEG, PNG).
                </div>";
            }
        } else {

            echo "<div class='alert alert-danger alert-dismissable'>
          <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
          <strong>Gagal!</strong> Upload Surat Keterangan Lulus(PDF, JPEG, PNG).
        </div>";
        }
    } else {
        echo "<div class='alert alert-danger alert-dismissable'>
          <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
          <strong>Gagal!</strong> Upload Surat Keterangan Lulus harus format(PDF, JPEG, PNG).
        </div>";
    }
}

?>

<div class="row">
    <div class="col-sm-12 col-md-8 col-lg-10 col-lg-offset-1">
        <div class="card" style="margin-top: 50px">
            <div class="card-header" data-background-color="blue">
                <h4 class="title">Upload Ijazah(PDF, JPEG, PNG) dan Surat Keterangan Lulus(PDF, JPEG, PNG)</h4>
                <p class="category">Upload dengan format yang benar(PDF, JPEG, PNG)</p>
                <a href="index.php?page=4" class="btn btn-primary btn-md pull-right" style="margin-top: -40px;"><i class="fa fa-arrow-left"></i> Kembali</a>
            </div>
            <div class="card-content">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">


                        <div class="form-group floating-label" style="margin-left: 20px;">
                            <label class="col-sm-12">Ijazah(PDF, JPEG, PNG) : </label>
                            <label class="btn btn-primary" for="my-file-selector">
                                <input id="my-file-selector" name="ijazah" type="file" style="display:none" onchange="$('#upload-file-info').html(this.files[0].name)">
                                Upload Ijazah (PDF, JPEG, PNG)
                            </label>
                            <span class='label label-info' id="upload-file-info"></span>
                        </div>

                    </div>

                    <div class="row">
                        <div class="form-group floating-label" style="margin-left: 20px;">
                            <label class="col-sm-12">Surat Keterangan Lulus(PDF, JPEG, PNG) : </label>
                            <label class="btn btn-primary" for="my-file-selector2">
                                <input id="my-file-selector2" name="skl" type="file" style="display:none" onchange="$('#upload-file-info2').html(this.files[0].name)">
                                Upload Surat Keterangan Lulus (PDF, JPEG, PNG)
                            </label>
                            <span class='label label-info' id="upload-file-info2"></span>
                        </div>
                    </div>

                    <hr>

                    <button type="submit" name="upload" class="btn btn-primary blue pull-right"><i class="fa fa-upload"></i> Upload File</button>
                </form>
            </div>
        </div>
    </div>
</div>