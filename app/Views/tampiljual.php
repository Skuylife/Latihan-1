<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penjualan</title>
</head>
<style>
    body {
        font-family: fantasy, Verdana, Geneva, Tahoma, sans-serif;
        font-size: large;
        background-color: deepskyblue;
    }
</style>

<body>
    <center>
        <h2>Tampil Data Penjualan Sepeda</h2>
        <hr>
        <table border="1">
            <tr>
                <td>Kode Sepeda</td>
                <td>Jenis</td>
                <td>Harga Semua </td>
                <td>Jumlah</td>
                <td>Harga Satuan</td>
            </tr>
            <?php
            foreach ($jspd as $data) :
            ?>
                <tr>
                    <td><?= $data['kode'] ?></td>
                    <td><?= $data['jenis'] ?></td>
                    <td><?= $data['hrgsm'] ?></td>
                    <td><?= $data['jml'] ?></td>
                    <td><?= $data['hrgs'] ?></td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td><input type="button" value="Go back!" onclick="history.back()"></td>
            </tr>

        </table>
    </center>
</body>

</html>