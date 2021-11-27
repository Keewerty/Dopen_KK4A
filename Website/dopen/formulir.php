<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
    <title>Formulir</title>
</head>
<body>
    <h1><center>Lakukan Pembayaran</center></h1>
    
    <form action="simpan.php" method="post">
        <center><fieldset>
        <table>

            <tr>
            <td>Nama donatur</td>
                <td>:</td>
                <td><input type="text" name="nama_donatur"></td>
            </tr>
            <tr>
            <td>Media transaksi</td>
                <td>:</td>
                <td><input type="text" name="media_transaksi"></td>
            </tr>
            <tr>
            <td>Jumlah donasi</td>
                <td>:</td>
                <td><input type="text" name="jumlah_donasi"></td>
            </tr>
            <tr>

        </table>
        </fieldset></center>

        <input type="submit" name="simpan" value="Kirim">
    </form>


            
</body>
</html>