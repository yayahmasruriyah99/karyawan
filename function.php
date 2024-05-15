<?php
// Koneksi Database
$koneksi = mysqli_connect("localhost", "root", "", "db_karyawan");

// membuat fungsi query dalam bentuk array
function query($query)
{
    // Koneksi database
    global $koneksi;

    $result = mysqli_query($koneksi, $query);

    // membuat varibale array
    $rows = [];

    // mengambil semua data dalam bentuk array
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

// Membuat fungsi tambah
function tambah($data)
{
    global $koneksi;

    $nik = htmlspecialchars($data['nik']);
    $nama = htmlspecialchars($data['nama']);
    $posisi = htmlspecialchars($data['posisi']);
    $gaji = htmlspecialchars($data['gaji']);
    $tgl_masuk = htmlspecialchars($data['tgl_masuk']);

    $sql = "INSERT INTO karyawan(nik, nama, posisi, gaji, tgl_masuk) VALUES ('$nik','$nama','$posisi','$gaji','$tgl_masuk')";

    mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
}

// Membuat fungsi hapus
function hapus($nik)
{
    global $koneksi;

    mysqli_query($koneksi, "DELETE FROM karyawan WHERE nik = $nik");
    return mysqli_affected_rows($koneksi);
}

// Membuat fungsi ubah
function ubah($data)
{
    global $koneksi;

    $nik = htmlspecialchars($data['nik']);
    $nama = htmlspecialchars($data['nama']);
    $posisi = htmlspecialchars($data['posisi']);
    $gaji = htmlspecialchars($data['gaji']);
    $tgl_masuk = htmlspecialchars($data['tgl_masuk']);

    $sql = "UPDATE karyawan SET nama = '$nama', posisi = '$posisi', gaji = '$gaji', tgl_masuk = '$tgl_masuk' WHERE nik = $nik";

    mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
}
