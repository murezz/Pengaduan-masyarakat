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


function verify($data)
{

    global $conn;

    $id = htmlspecialchars($data["id_pengaduan"]);
    $tgl = htmlspecialchars($data["tgl_pengaduan"]);
    $nik = htmlspecialchars($data["nik"]);
    $isi = htmlspecialchars($data["isi_laporan"]);
    $foto = htmlspecialchars($data["foto"]);
    $status = htmlspecialchars($data["status"]);

    $query = "UPDATE pengaduan SET
                id_pengaduan = '$id',
                tgl_pengaduan = '$tgl',
                nik = '$nik',
                isi_laporan = '$isi',
                foto = '$foto',
                status = '$status'
                WHERE id_pengaduan = '$id' ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function tanggapan($data)
{

    global $conn;

    $id = htmlspecialchars($data["id_pengaduan"]);
    $tgl = htmlspecialchars($data["tgl_tanggapan"]);
    $tanggapan = htmlspecialchars($data["tanggapan"]);
    $id_petugas = htmlspecialchars($data["id_petugas"]);

    mysqli_query($conn, "INSERT INTO tanggapan VALUES ('', '$id', '$tgl', '$tanggapan', '$id_petugas')");

    return mysqli_affected_rows($conn);
}

function regisUser($data)
{

    global $conn;

    $nik = htmlspecialchars($data["nik"]);
    $nama = htmlspecialchars($data["nama"]);
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    $telp = htmlspecialchars($data["telp"]);

    mysqli_query($conn, "INSERT INTO masyarakat VALUES ('$nik', '$nama', '$username', '$password', '$telp')");

    return mysqli_affected_rows($conn);
}


function addPetugas($data)
{

    global $conn;

    $nama = htmlspecialchars($data["nama_petugas"]);
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    $telp = htmlspecialchars($data["telp"]);
    $level = htmlspecialchars($data["level"]);

    mysqli_query($conn, "INSERT INTO petugas VALUES ('', '$nama', '$username', '$password', '$telp', '$level')");

    return mysqli_affected_rows($conn);
}

function editPetugas($data)
{

    global $conn;

    $id = htmlspecialchars($data["id_petugas"]);
    $nama = htmlspecialchars($data["nama_petugas"]);
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    $telp = htmlspecialchars($data["telp"]);
    $level = htmlspecialchars($data["level"]);

    $query = "UPDATE petugas SET
                nama_petugas = '$nama',
                username = '$username',
                password = '$password',
                telp = '$telp',
                level = '$level'
                WHERE id_petugas = '$id'
                ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function deletePetugas($id)
{

    global $conn;

    mysqli_query($conn, "DELETE FROM petugas WHERE id_petugas = $id");

    return mysqli_affected_rows($conn);
}
