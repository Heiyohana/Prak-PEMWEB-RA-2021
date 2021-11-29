<?php
    include "connect.php";
    $nim=$_GET['nim'];

    $sql=$koneksi->query("select * from data where nim='$nim'");
    while($mahasiswa=$sql->fetch_object()){
        $nama=$mahasiswa->nama;
        $prodi=$mahasiswa->prodi;
        $angkatan=$mahasiswa->angkatan;
    } 
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta chamhset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Mahasiswa</title>
</head>
<body>
    <form id="form" onsubmit="save(); return false;">
        <table>
            <h2>Update Data Mahasiswa</h2>
            <br>
            <p>NIM = <?php echo $nim;?></p>
            <input type="hidden" name="nim" value="<?php echo $nim;?>">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $nama;?>"></td>
            </tr>
            <tr>
                <td>Prodi</td>
                <td><input type="text" name="prodi" value="<?php echo $prodi;?>"></td>
            </tr>
            <tr>
                <td>Angkatan</td>
                <td><input type="number" name="angkatan" value="<?php echo $angkatan;?>"></td>
            </tr>

        </table>
        <button type="submit" value="save">Save</button>
    </form>
    <script>
        function save(){
            $.ajax({
                type: "POST",
                url: "save.php",
                data: $("#form").serialize(),
                success: function(data) {
                    showData();
                },
                error: function() {
                    alert('error handling here');
                }
            });
        }
    </script>
</body>
</html>


