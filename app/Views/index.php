<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="<?= base_url('assets') ?>/style.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/fontawesome/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container">
        <div class="judul">
            <h1>Data Pinjam</h1>
        </div>
        <button class="icon-btn add-btn" onclick="window.location='<?php echo site_url('home/formtambah') ?>'">
            <div class="add-icon"></div>
            <div class="btn-txt">Tambah</div>
        </button>
        <table class="table table-striped custab">
            <thead>

                <tr>
                    <th>No</th>
                    <th>Kode Pinjam</th>
                    <th>Nama Peminjam</th>
                    <th>Judul Buku</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Denda</th>
                    <th>Total</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor = 0;
                foreach ($databuku as $row) :
                    $nomor++;
                ?>
                    <tr>
                        <td><?= $nomor; ?></td>
                        <td><?= $row['kdpinjam'] ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td><?= $row['judul'] ?></td>
                        <td><?= $row['harga'] ?></td>
                        <td><?= $row['jumlah'] ?></td>
                        <td><?= $row['denda'] ?></td>
                        <td><?= $row['total'] ?></td>
                        <td>
                            <button type="button" class="btn btn-info btn-xs" onclick="window.location='<?= site_url('Home/formedit/' . $row['kdpinjam']) ?>'">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                            <form action="/Home/hapus/<?= $row['kdpinjam'] ?>" method="post" align="right" class="hapus">
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger btn-xs"><i class="fa-solid fa-trash-can"></i></button>
                            </form>
                        </td>

                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>