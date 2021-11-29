<?php
    include "connect.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Data Mahasiswa</title>
</head>
<body>
    <h2>Data Mahasiswa Angkatan 2019</h2>
    <br>
    <table>
        <thead>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Angkatan</th>
            <th colspan="2">Aksi Data</th>
        </tr>
        </thead>
    <?php
    $sql=$koneksi->query("select * from data");
    while($mahasiswa=$sql->fetch_object()){
    ?>  
        <tbody>
        <tr>
            <td><?php echo $mahasiswa->nim; ?></td>
            <td><?php echo $mahasiswa->nama; ?></td>
            <td><?php echo $mahasiswa->prodi; ?></td>
            <td><?php echo $mahasiswa->angkatan; ?></td>
            <td>
                <strong><a href="javascript:void()" onclick="update('<?php echo $mahasiswa->nim; ?>')">EDIT</a></strong>
            </td>
            <td>
                <strong><a href="javascript:void()" onclick="del('<?php echo $mahasiswa->nim; ?>')">DELETE</a></strong>
            </td>
        </tr>
    </tbody>
    
    <?php } ?>
    </table>
    <script>
    function update(nim){
        $.get("update.php", {nim},function(data) {
            $("#content").html(data); 
        });
    }

    function del(nim){
        $.get("delete.php", {nim}, function(data) {
            showData()
        });
    }
    </script>
</body>
</html>
