<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];

    // buat query
    $sql = "INSERT INTO kategori (nama) VALUE ('$nama')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman kategori.php dengan status=sukses
        header('Location: kategori.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: kategori.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>