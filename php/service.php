<?php
include "connect.php";

switch ($_GET['action'])
{
    case 'save':

        $nama = $_POST['nama'];
        $notelp = $_POST['notelp'];
        $tgllahir = $_POST['tgllahir'];
        $jeniskelamin = $_POST['jeniskelamin'];
        $hobi = $_POST['hobi'];

        $query = mysqli_query($koneksi, "INSERT INTO peserta(nama, notelp, tgllahir, jeniskelamin, hobi) VALUES('$nama', '$notelp', '$tgllahir', '$jeniskelamin', '$hobi')");
        if ($query)
        {
            echo "Saved successfully";
        }
        else
        {
            echo "Failed to save data :" . mysqli_error($koneksi);
        }
    break;

    case 'edit':
        
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $notelp = $_POST['notelp'];
        $tgllahir = $_POST['tgllahir'];
        $jeniskelamin = $_POST['jeniskelamin'];
        $hobi = $_POST['hobi'];

        $query = mysqli_query($koneksi, "UPDATE peserta SET nama='$nama', notelp='$notelp', tgllahir='$tgllahir', jeniskelamin='$jeniskelamin', hobi='$hobi' WHERE id='$id'");
        if ($query)
        {
            echo "Edited successfully";
        }
        else
        {
            echo "Failed to edit data:" . mysqli_error($koneksi);
        }
    break;

    case 'delete':

        $id = $_POST['id'];
        $query = mysqli_query($koneksi, "DELETE FROM peserta WHERE id='$id'");
        if ($query)
        {
            echo "Deleted successfully";
        }
        else
        {
            echo "Failed to delete data :" . mysqli_error($koneksi);
        }
    break;
}
?>