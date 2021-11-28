<?php
 include "connect.php";
 $id=$_GET['id'];
 $query=mysqli_query($koneksi, "SELECT * FROM peserta WHERE id='$id'") or die(mysqli_error($koneksi));
 $result=mysqli_fetch_array($query);
?>
    <form method="POST" id="formEdit">
        <table>
            <tr>
                <td>Nama </td>
                <td>
                    <input type="hidden" name="id" id="id" required="" value="<?php echo $result['id']; ?>" />
                    <input type="text" name="nama" id="nama" required="" value="<?php echo $result['nama']; ?>" />
                </td>
            </tr>    
            <tr>
                <td>No WhatsApp</td>
                <td>
                    <input type="tel" name="notelp" id="notelp" required="" value="<?php echo $result['notelp']; ?>" />
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>
                    <input type="text" name="tgllahir" id="tgllahir" required="" value="<?php echo $result['tgllahir']; ?>" />
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <select name="jeniskelamin">
                        <option value="Pr"> Perempuan</option>
                        <option value="Lk"> Laki-Laki</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>
                    <input type="text" name="hobi" id="hobi" required=""/>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <!--<input type="submit" name="save" id="save" value="Save" />-->
                    <button id="save" name="save" type="submit">Save</button>
                    <button id="cancelButton" name="cancelButton" type="button" onclick="window.location.href='./index.php'">Cancel</button>
                </td>
            </tr>
        </table>
    </form>