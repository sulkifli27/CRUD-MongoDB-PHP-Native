<?php

$nim = $_GET['nim'];
include('koneksi.php');
$bulk = new MongoDB\Driver\BulkWrite();

$bulk->delete(['nim' => $nim]);

$result = $obj->executeBulkWrite('db_alumni.daftar_alumni', $bulk);

if ($result == true) {
    header("location:index.php");
}
