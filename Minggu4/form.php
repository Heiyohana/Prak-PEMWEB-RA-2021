<?php
    include "connect.php";
    if(isset($_GET['nim'])){
        $nim=$_GET['nim'];
    }else{
        $nim="";
    }

    $nama="";
    $prodi="";
    $angkatan="";

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
    <title>Input Data dengan Form</title>
</head>
<body>
    <h2>Masukan Data Anda</h2>
    <br>
    <form id="form" onsubmit="save(); return false;">
        <table>
            <tr>
                <td>NIM</td>
                <td><input type="number" name="nim" value="<?php echo $nim;?>" required=""></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $nama;?>" required=""/></td>
            </tr>
            <tr>
                <td>Prodi</td>
                <td><input type="text" name="prodi" value="<?php echo $prodi;?>" required=""/></td>
            </tr>
            <tr>
                <td>Angkatan</td>
                <td><input type="number" name="angkatan" value="<?php echo $angkatan;?>"required=""></td>
            </tr>

        </table>
        <button type="submit" value="save">Create</button>
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