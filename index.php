<?php

include('koneksi.php');
$filter = [];
$options = [];

$query = new MongoDB\Driver\query($filter, $options);

$result = $obj->executeQuery('db_alumni.daftar_alumni', $query);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <div class="col-md-10 mx-auto mt-5">
        <form action="cari.php" method="get" class="col-md-8">
            <div class="input-group">
                <input name="nim" type="text" class="form-control" placeholder="Filter by nim">
                <div class="input-group-append">
                    <button class="btn btn-success" type="submit">Cari</button>
                </div>
            </div>
        </form>
        <br><br>
        <a href="tambah_data.php"><button type="button" class="btn btn-primary">Tambah data</button></a>
        <h1>Tampilan Data Alumni</h1>
        <table class=" table table-hover">
            <thead>
                <tr>
                    <th scope="col">Nim</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Tempat_lahir</th>
                    <th scope="col">Tanggal_lahir</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Tahun_masuk</th>
                    <th scope="col">Tahun_selesai</th>
                    <th scope="col">Ipk</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result as $alumni) : ?>

                    <tr>
                        <td><?php echo $alumni->nim ?></td>
                        <td><?php echo $alumni->nama ?></td>
                        <td><?php echo $alumni->jk ?></td>
                        <td> <?php echo $alumni->tempat_lahir ?></td>
                        <td><?php echo $alumni->tgl_lahir ?></td>
                        <td><?php echo $alumni->jurusan ?></td>
                        <td><?php echo $alumni->tahun_masuk ?></td>
                        <td><?php echo $alumni->tahun_selesai ?></td>
                        <td><?php echo $alumni->ipk ?></td>
                        <td>
                            <a href="ubah.php?nim=<?= $alumni->nim ?>"><button class="btn btn-primary">Ubah</button></a>
                            <a href="delete.php?nim=<?= $alumni->nim ?>"><button class="btn btn-danger">Delete</button></a></td>
                    </tr>

                <?php endforeach; ?>

        </table>
    </div>
</body>

</html>