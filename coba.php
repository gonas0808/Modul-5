<html>
    <form method="POST" name="frmpost" action="">
        <table align="center" border="1" cellpadding="0" cellspacing="0">
            <tr align="center"><td><h2> <b>Masukan Data Kost</b></h2></td></tr>
            <tr>
                <td>
                    <table width="450" border="0" cellpadding="0"cellspacing="10" align="center">
                        <tr>
                            <td>Nama</td>
                            <td> : </td>
                            <td><input name="nama[]" type="text" size="40" /></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td> : </td>
                            <td><input name="nama[]" type="text" size="40" /></td>
                        </tr>
                        <tr>
                            <td>Nomor Hp</td>
                            <td> : </td>
                            <td><input name="nama[]" type="text" size="40" /></td>
                        </tr>
                        <tr>
                            <td colspan="4" align="center"><input type="submit" name="btn0k" value="Simpan" /></td>
                            <td colspan="4" align="center"><input type="reset" /></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </form>
    <?php
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$noHP = $_POST['nohp'];

foreach($nama as $key => $val){
?>

<tr>
    <td align="center" colspan="2">
        <?php
        echo'<b>Hasil Data Kost yang diinputkan</b><br>';?>
    </td>
</tr>
<tr>
    <td><?php echo 'Nama'?></td>
    <td><?php echo $nama[$key];?></td>
</tr>
<tr>
    <td><?php echo 'Alamat'?></td>
    <td><?php echo $alamat[$key];?></td>
</tr>
<tr>
    <td><?php echo 'NoHP'?></td>
    <td><?php echo $noHP[$key];?></td>
</tr>
}
<?php
    }
?>
</html>