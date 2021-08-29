<h2 class="text-center">Laporan</h2>


<div class="row">
    <div class="col-sm-12 col-md-8 col-lg-10 col-lg-offset-1">
        <div class="card" style="margin-top: 50px">
            <div class="card-header" data-background-color="blue">
                <h4 class="title"><i class="fa fa-print"></i> Laporan</h4>
                <p class="category"></p>
            </div>
            <div class="card-content" style="align-items: center;">


                <?php $nama_admin = $_SESSION['nama_admin']; ?>
                <div class="row">
                    <center><a href="include/print_laporan.php?nama=<?= $nama_admin; ?>" target="_BLANK" class="btn btn-primary"><i class="fa fa-print"></i> Cetak Laporan Pendaftar</a></center>
                </div>

                <!-- <div class="row">
				<center><a href="include/cetak_laporan_pendapatan.php" class="btn btn-primary"><i class="fa fa-print"></i> Cetak Laporan Pendapatan</a></center>
			</div>

			<div class="row">
				<center><a href="include/cetak_laporan_kegiatan.php" class="btn btn-primary"><i class="fa fa-print"></i> Cetak Laporan Kegiatan</a></center>
			</div> -->


            </div>
        </div>
    </div>
</div>