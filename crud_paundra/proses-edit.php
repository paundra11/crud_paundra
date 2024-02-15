<?php

include("konek.php");
if(isset($_POST['simpan'])){

    $id= $_POST['id'];
    $nama = $_POST['nama'];
    $email= $_POST['email'];
    $hp= $_POST['hp'];
    $jk= $_POST['jk'];
    $bayar= $_POST['bayar'];
    $paket= $_POST['paket'];

    $sql= "UPDATE tabel_member SET nama='$nama', email='$email', hp='$hp', jk='$jk',
                                     bayar='$bayar', paket='$paket' WHERE id=$id";
    $query= mysqli_query($db, $sql);

    if($query){
        header('Location: admin.php');
    } else {
        die('gagal');
    }

}else{
    die("akses dilarang");
}




?>