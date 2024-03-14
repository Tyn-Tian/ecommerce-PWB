<form method="post" action="<?php echo base_url() . 'Latihan2/simpanplg'; ?>">
    <table>
        <tr>
            <td>Kode</td>
            <td><input type="text" name="kdplg" maxlength="20"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nmplg" maxlength="50"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="almtplg" maxlength="100"></td>
        </tr>
        <tr>
            <td>Kota</td>
            <td><input type="text" name="kotaplg" maxlength="20"></td>
        </tr>
        <tr>
            <td>Telpon</td>
            <td><input type="text" name="telpplg" maxlength="13"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="emailplg" maxlength="50"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="passplg" maxlength="255"></td>
        </tr>
        <tr>
            <td align="center" colspan="2"><button type="submit">Simpan</button></td>
        </tr>
    </table>
</form>