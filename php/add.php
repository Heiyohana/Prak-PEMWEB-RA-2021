<form method="POST" id="formAdd">
    <table>
    <center>
        <tr>
            <td>Nama Anda</td>
            <td>
                <input type="text" name="nama" id="nama" required="" />
            </td>
        </tr>
        <tr>
            <td>No WhatsApp Anda</td>
            <td>
                <input type="tel" name="notelp" id="notelp" required="" />
            </td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>
                <input type="date" name="tgllahir" id="tgllahir" required=""/>
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
                <button id="save" name="save" type="submit">Save</button>
                <button id="cancelButton" name="cancelButton" type="button" onclick="window.location.href='index.php'">Cancel</button>
            </td>
        </tr>
    </center>
    </table>
</form>