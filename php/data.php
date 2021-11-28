<!--This file for Print Data to Web-->
<br>
<button id="addButton" class="btn btn-primary"><strong>Join Member</strong></button>
<br>
<br>
<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>No WhatsApp</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Hobi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
            include "connect.php";
            $no=1;
            $query=mysqli_query($koneksi, "SELECT * FROM peserta ORDER BY id DESC") or die(mysqli_error($koneksi));
            while ($result=mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td>
                <?php echo $no++; ?>
            </td>
            <td>
                <?php echo $result['nama']; ?>
            </td>
            <td>
                <?php echo $result['notelp']; ?>
            </td>
            <td>
                <?php echo $result['tgllahir']; ?>
            </td>
            <td>
                <?php echo $result['jeniskelamin']; ?>
            </td>
            <td>
                <?php echo $result['hobi']; ?>
            </td>
            <td>
                <button id="EditButton" value="<?php echo $result['id']; ?>">Edit</button>
                <button id="DeleteButton" value="<?php echo $result['id']; ?>">Delete</button>
            </td>
        </tr>
        <?php
        }
    ?>
    </tbody>
</table>