<?php
include("konek.php");
if(isset($_POST['daftar'])){
    //ambil data di database
    $nama = $_POST['nama'];
    $email= $_POST['email'];
    $hp= $_POST['hp'];
    $jk= $_POST['jk'];
    $bayar= $_POST['bayar'];
    $paket= $_POST['paket'];


    $sql = "INSERT INTO tabel_member (nama, email,  hp,  jk, bayar, paket)
                VALUE ('$nama', '$email',  '$hp', '$jk',  '$bayar', '$paket')";
    $query = mysqli_query($db, $sql);

    if($query){
        echo"<script>alert('Data Berhasil Disimpan, dan akan diteruskan ke email anda !');
        window.location='halmut.php';</script>";
    }else{
        header('Location: index.php/status=gagal');
    }
}else{
    die("Akses Ditolak");
}


?>