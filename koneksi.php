<?php

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'pembayaran_mahasiswa';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die('Koneksi ke Database Gagal');
