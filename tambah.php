<?php
$conn = mysqli_connect("localhost", "root", "","db_mahasiswa");
if (isset($_POST["submit"])){
    $nama=$_POST["nama"];
    $id=$_POST["id"];
    $email=$_POST["email"];
    $jurusan=$_POST["jurusan"];
    $fakultas=$_POST["fakultas"];
    $gambar=$_POST["gambar"];

    $query ="INSERT INTO db_mahasiswa
        VALUES
        ('', '$nama', '$id', '$email','$jurusan', '$fakultas', 'gambar')
        ";

}
?>
<!DOCTYPE html>
<html>
    <Head>
       <title>TAMBAH DATA MAHASISWA HARVARD UNIVERSITY</title>
       <link rel="stylesheet" href="style3.css">
    </Head>
    <body background="Universitas1.jpg" align="center">
        <h1>TAMBAH DATA MAHASISWA HARDVARD UNIVERSITY</h1>

        <form actiom="" method="post">
            <ul>
                <li>
                    <label for="nama">NAMA : </label>
                    <input type="text" name="nama" id="nama">
                </li>
                <li>
                    <label for="id">NIM : </label>
                    <input type="text" name="id" id="id">
                </li>
                <li>
                    <label for="email">EMAIL : </label>
                    <input type="text" name="email" id="email">
                </li>
                <li>
                    <label for="jurusan">JURUSAN : </label>
                    <input type="text" name="jurusan" id="jurusan">
                </li>
                <li>
                    <label for="fakultas">FAKULTAS : </label>
                    <input type="text" name="fakultas" id="fakultas">
                </li>
                <li>
                    <label for="gambar">GAMBAR : </label>
                    <input type="file" name="gambar" id="gambar">
                </li>
                <li>
                    <button type="submit" name="submit">Tambah Data</button>
                </li>
            </ul>

    </body>
</html>