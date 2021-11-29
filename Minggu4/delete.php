<?php
    include "connect.php";
    $koneksi->query("delete from data where nim='$_GET[nim]'");
?>