<?php
// Memanggil atau membutuhkan file function.php
require 'function.php';

// Menampilkan semua data dari table karyawan berdasarkan nim secara Descending
$karyawan = query("SELECT * FROM karyawan ORDER BY nik DESC");

// Membuat nama file
$filename = "data karyawan fti-" . date('Ymd') . ".xls";

// export ke excel
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Karyawan.xls");

?>
<table class="text-center" border="1">
    <thead class="text-center">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>NIK</th>
            <th>Posisi</th>
            <th>Gaji</th>
            <th>Tanggal Masuk</th>
        </tr>
    </thead>
    <tbody class="text-center">
        <?php $no = 1; ?>
        <?php foreach ($karyawan as $row) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['nik']; ?></td>
                <td><?= $row['posisi']; ?></td>
                <td><?= $row['gaji']; ?></td>
                <td><?= $row['tgl_masuk']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>