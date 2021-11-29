<?php
    include "connect.php";

    $sql=$koneksi->query("select * from data where nim='".$_POST['nim']."'");
    $jml=$sql->num_rows;
    if($jml>0){
        $koneksi->query("update data set nama='".$_POST['nama']."',prodi='".$_POST['prodi']."',angkatan='".$_POST['angkatan']."' where nim='".$_POST['nim']."'");
    }else{
        $koneksi->query("insert into data(nim,nama,prodi,angkatan) values('".$_POST['nim']."','".$_POST['nama']."','".$_POST['prodi']."','".$_POST['angkatan']."')");
    }
?>