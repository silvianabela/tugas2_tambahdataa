<?php
include_once('koneksi.php');
    if(isset($_POST["simpan"])){
        $id = $_POST["id"];
        $nama= $_POST["nama"];
        $email = $_POST["email"];
        $jurusan= $_POST["jurusan"];
        $fakultas = $_POST["fakultas"];
        $gambar = $_POST["gambar"];

        if(!empty($id) || !empty($nama) || !empty($email) || !empty($jurusan) || !empty($fakultas) || !empty($gambar)){
            $sql = "INSERT INTO `tb_datamahasiswa`(`id`, `nama`, `email`, `jurusan`, `fakultas`, `gambar`) 
             VALUES ('$id',' $nama', '$email', '$jurusan', '$fakultas', '$gambar')";
            mysqli_query($conn, $sql);
            echo 'data tersimpan';
        }else{
            echo 'gagal tersimpan';
        }
    }
?>
<html>
<head>
    <title>DATA MAHASISWA</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body background="B1.jpeg" align="center">
    <h1>MASUKAN DATA MAHASISWA HARDVARD UNIVERSITY</h1>
    <a href="welcome.php">Data Mahasiswa</a><br>
	<p><p>
	<form method="post" action="simpan.php">
        <label>NIM</label><br>
            <input type="text" name="id"><br>
        <label>NAMA</label><br>
        <link rel="stylesheet" href="style3.css">
            <input type="text" name="nama"><br>
        <label>EMAIL</label><br>
            <input type="text" name="email"><br>
        <label>JURUSAN</label><br>
            <input type="text" name="jurusan"><br>
        <label>FAKULTAS</label><br>
            <input type="text" name="fakultas"><br>
        <label>GAMBAR</label><br>
            <input type="file" name="gambar"><br>
        <input type="submit" name="simpan" value="simpan">
 
    </form>
</body>
</html>