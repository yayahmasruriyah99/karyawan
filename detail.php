<?php
// Memanggil atau membutuhkan file function.php
require 'function.php';

// Jika Data karyawan diklik maka
if (isset($_POST['dataKaryawan'])) {
    $output = '';

    // mengambil data karyawan dari nim 
    $sql = "SELECT * FROM karyawan WHERE nik = '" . $_POST['dataKaryawan'] . "'";
    $result = mysqli_query($koneksi, $sql);

    $output .= '<div class="table-responsive">
                        <table class="table table-bordered">';
    foreach ($result as $row) {
        $output .= '
                        <tr>
                            <th width="40%">NIK</th>
                            <td width="60%">' . $row['nik'] . '</td>
                        </tr>
                        <tr>
                            <th width="40%">Nama</th>
                            <td width="60%">' . $row['nama'] . '</td>
                        </tr>
                        <tr>
                            <th width="40%">Posisi</th>
                            <td width="60%">' . $row['posisi'] . '</td>
                        </tr>
                        <tr>
                            <th width="40%">Gaji Pokok</th>
                            <td width="60%">' . $row['gaji'] . '</td>
                        </tr>
                        <tr>
                            <th width="40%">Tanggal Masuk</th>
                            <td width="60%">' . $row['tgl_masuk'] . '</td>
                        </tr>
                        ';
    }
    $output .= '</table></div>';
    // Tampilkan $output
    echo $output;
}
