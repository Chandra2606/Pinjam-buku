<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Tambah Data Pinjam</title>

    <!-- Icons font CSS-->
    <link href="<?= base_url('assets') ?>/formtambah/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets') ?>/formtambah/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?= base_url('assets') ?>/formtambah/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets') ?>/formtambah/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/simpan.css">
    <link href="<?= base_url('assets') ?>/formtambah/css/main.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/fontawesome/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Tambah Data Pinjam</h2>
                </div>
                <div class="card-body">
                    <form class="row g-3" action="simpandata" name="form1">
                        <?= form_open('Home/simpandata') ?>
                        <div class="col-md-6">
                            <label for="inputteks4" class="form-label">Kode Pinjam</label>
                            <input type="teks" class="form-control" name="kdpinjam">
                        </div>
                        <div class="col-md-6">
                            <label for="inputteks4" class="form-label">Jumlah Pinjam</label>
                            <input type="teks" class="form-control" name="jumlah">
                        </div>
                        <div class="col-md-6">
                            <label for="inputteks4" class="form-label">Nama Peminjam</label>
                            <input type="teks" class="form-control" name="nama">
                        </div>
                        <div class="col-md-6">
                            <label for="inputteks4" class="form-label">Denda Per</label>
                            <input type="teks" class="form-control" name="denda" oninput="hitung()">
                        </div>
                        <div class="col-md-6">
                            <label for="inputteks4" class="form-label">Judul Buku</label>
                            <input type="teks" class="form-control" name="judul">
                        </div>
                        <div class="col-md-6">
                            <label for="inputteks4" class="form-label">Total</label>
                            <input type="teks" class="form-control" name="total">
                        </div>
                        <div class="col-md-6">
                            <label for="inputteks4" class="form-label">Harga Pinjam</label>
                            <input type="teks" class="form-control" name="harga">
                        </div>
                        <button class="continue-application" type="submit">
                            <div>
                                <div class="pencil"></div>
                                <div class="folder">
                                    <div class="top">
                                        <svg viewBox="0 0 24 27">
                                            <path d="M1,0 L23,0 C23.5522847,-1.01453063e-16 24,0.44771525 24,1 L24,8.17157288 C24,8.70200585 23.7892863,9.21071368 23.4142136,9.58578644 L20.5857864,12.4142136 C20.2107137,12.7892863 20,13.2979941 20,13.8284271 L20,26 C20,26.5522847 19.5522847,27 19,27 L1,27 C0.44771525,27 6.76353751e-17,26.5522847 0,26 L0,1 C-6.76353751e-17,0.44771525 0.44771525,1.01453063e-16 1,0 Z"></path>
                                        </svg>
                                    </div>
                                    <div class="paper"></div>
                                </div>
                            </div>
                            Simpan Data
                        </button>
                        <?= form_close(); ?>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="<?= base_url('assets') ?>/formtambah/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="<?= base_url('assets') ?>/formtambah/vendor/select2/select2.min.js"></script>
    <script src="<?= base_url('assets') ?>/formtambah/vendor/datepicker/moment.min.js"></script>
    <script src="<?= base_url('assets') ?>/formtambah/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="<?= base_url('assets') ?>/formtambah/js/global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
        function hitung() {
            var hrg = eval(document.form1.harga.value);
            var jml = eval(document.form1.jumlah.value);
            var dnd = eval(document.form1.denda.value);

            var tot = hrg * jml + dnd * jml;
            document.form1.total.value = tot;



        }
    </script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->