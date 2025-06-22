<?php

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'pembayaran_mahasiswa';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die('Koneksi ke Database Gagal');

echo '<h1 style="text-align: center;">Database "' . $db_name . '"</h1>';

$tables = $conn->query('SHOW TABLES;');
if (!$tables) {
    die('<p> Error: Tidak bisa mengambil daftar tabel. ' . $conn->error . '</p>');
}

if ($tables->num_rows > 0) {
    while ($table = $tables->fetch_row()) {
        $table_name = $table[0];

        $rows = $conn->query('SELECT * FROM `' . $table_name . '`;');

        if (!$rows) {
            echo '<p> Error mengambil data dari tabel ' . $table_name . ' : ' . $conn->error . '</p>';
            continue;
        }

        if ($rows->num_rows > 0) {
            echo '<h2>Isi Tabel "' . $table_name . '"</h2>';
            echo '<table border=1>';
            echo '<thead><tr>';

            $fields = $rows->fetch_fields();
            foreach ($fields as $field) {
                echo '<th>' . $field->name . '</th>';
            }

            echo '</tr></thead>';
            echo '<tbody>';

            while ($row = $rows->fetch_assoc()) {
                echo '<tr>';
                foreach ($fields as $field) {
                    echo '<td>' . htmlspecialchars($row[$field->name]) . '</td>';
                }
                echo '</tr>';
            }

            echo '</tbody></table><br><br>';
        } else {
            echo '<p> Tidak ada data dalam tabel ' . $table_name . '</p>';
        }
    }
} else {
    die('<p> Tidak ada tabel dalam database ' . $db_name . '</p>');
}

$conn->close();
