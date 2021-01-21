<!DOCTYPE html>
<html lang="en">

<?php
include('koneksi.php');

$nim = $_GET['nim'];
$filter = ['nim' => $nim];

$options = [];

$query = new MongoDB\Driver\query($filter, $options);

$result = $obj->executeQuery('db_alumni.daftar_alumni', $query);
$document = $result->toArray();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <div class="col-md-6 mx-auto mt-5">
        <form action="store.php" method="post">
            <div class="form-group">
                <label for="nim">Nim</label>
                <input type="hidden" name="nimm" value="<?php echo $document[0]->nim ?>">
                <input name="nim" type="text" class="form-control" id="nim" value="<?php echo $document[0]->nim ?>">
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input name="nama" type="text" class="form-control" id="nama" value="<?php echo $document[0]->nama ?>">
            </div>
            <div class="form-group">
                <label class="form-label">Jenis Kelamin</label>
                <div class="custom-controls-stacked">
                    <label class="custom-control custom-radio custom-control-inline">
                        <input name="jenis_kelamin" value="laki-laki" <?php echo $document['0']->jk == 'laki-laki' ? 'checked' : ''; ?> type="radio" class="custom-control-input">
                        <span class="custom-control-label">Laki-laki</span>
                    </label>
                    <label class="custom-control custom-radio custom-control-inline">
                        <input name="jenis_kelamin" value="perempuan" <?php echo $document['0']->jk == 'perempuan' ? 'checked' : ''; ?> type="radio" class="custom-control-input">
                        <span class="custom-control-label">Perempuan</span>
                    </label>
                </div>

            </div>
            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input name="tempat_lahir" type=text" class="form-control" id="tempat_lahir" value="<?php echo $document[0]->tempat_lahir ?>">
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal_lahir</label>
                <input name="tanggal_lahir" type="text" class="form-control" id="tanggal_lahir" value="<?php echo $document[0]->tgl_lahir ?>">
            </div>
            <div class="form-group">
                <label for="jurusan">jurusan</label>
                <input name="jurusan" type="text" class="form-control" id="jurusan" value="<?php echo $document[0]->jurusan ?>">
            </div>
            <div class="form-group">
                <label for="tahun_masuk">Tahun Masuk</label>
                <input name="tahun_masuk" type="text" class="form-control" id="tahun_masuk" value="<?php echo $document[0]->tahun_masuk ?>">
            </div>
            <div class="form-group">
                <label for="tahun_selesai">Tahun Selesai</label>
                <input name="tahun_selesai" type="text" class="form-control" id="tahun_selesai" value="<?php echo $document[0]->tahun_selesai ?>">
            </div>
            <div class="form-group">
                <label for="ipk">Ipk</label>
                <input name="ipk" type="text" class="form-control" id="ipk" value="<?php echo $document[0]->ipk ?>">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>