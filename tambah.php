<?php

include('koneksi.php');
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jurusan = $_POST['jurusan'];
$tahun_masuk = $_POST['tahun_masuk'];
$tahun_selesai = $_POST['tahun_selesai'];
$ipk = $_POST['ipk'];



$bulk = new MongoDB\Driver\BulkWrite();

$bulk->insert([
    'nim' => $nim,
    'nama' => $nama,
    'jk' => $jenis_kelamin,
    'tempat_lahir' => $tempat_lahir,
    'tgl_lahir' => $tanggal_lahir,
    'jurusan' => $jurusan,
    'tahun_masuk' => $tahun_masuk,
    'tahun_selesai' => $tahun_selesai,
    'ipk' => $ipk,

]);
$result = $obj->executeBulkWrite('db_alumni.daftar_alumni', $bulk);
if ($result == true) {
    header("location:index.php");
}
