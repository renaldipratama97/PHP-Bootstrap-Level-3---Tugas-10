<?php
$koneksi = mysqli_connect("localhost", "root", "", "arkademy");

// Check connection
if (mysqli_connect_error()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
