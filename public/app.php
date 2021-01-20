<?php

$conn = mysqli_connect("localhost", "root", "", "laporan");


function tambahAduan($data)
{

    global $conn;

    $tgl = htmlspecialchars($data["tgl_pengaduan"]);
    $nik = htmlspecialchars($data["nik"]);
    $isi = htmlspecialchars($data["isi_laporan"]);
    $foto = htmlspecialchars($data["foto"]);
    $status = htmlspecialchars($data["status"]);

    $query = "INSERT INTO pengaduan VALUES ('', '$tgl', '$nik', '$isi', '$foto', '$status')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
