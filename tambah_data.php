<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <div class="col-md-6 mx-auto mt-5">
        <form action="tambah.php" method="post">
            <div class="form-group">
                <label for="nim">Nim</label>
                <input name="nim" type="text" class="form-control" id="nim">
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input name="nama" type="text" class="form-control" id="nama">
            </div>
            <div class="form-group">
                <label class="form-label">Jenis Kelamin</label>
                <div class="custom-controls-stacked">
                    <label class="custom-control custom-radio custom-control-inline">
                        <input name="jenis_kelamin" value="laki-laki" type="radio" class="custom-control-input">
                        <span class="custom-control-label">Laki-laki</span>
                    </label>
                    <label class="custom-control custom-radio custom-control-inline">
                        <input name="jenis_kelamin" value="perempuan" type="radio" class="custom-control-input">
                        <span class="custom-control-label">Perempuan</span>
                    </label>
                </div>

            </div>
            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input name="tempat_lahir" type=text" class="form-control" id="tempat_lahir">
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal_lahir</label>
                <input name="tanggal_lahir" type="text" class="form-control" id="tanggal_lahir">
            </div>
            <div class="form-group">
                <label for="jurusan">jurusan</label>
                <input name="jurusan" type="text" class="form-control" id="jurusan">
            </div>
            <div class="form-group">
                <label for="tahun_masuk">Tahun Masuk</label>
                <input name="tahun_masuk" type="text" class="form-control" id="tahun_masuk">
            </div>
            <div class="form-group">
                <label for="tahun_selesai">Tahun Selesai</label>
                <input name="tahun_selesai" type="text" class="form-control" id="tahun_selesai">
            </div>
            <div class="form-group">
                <label for="ipk">Ipk</label>
                <input name="ipk" type="text" class="form-control" id="ipk">
            </div>





            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>