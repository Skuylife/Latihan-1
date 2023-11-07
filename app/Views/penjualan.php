<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input penjualan</title>
</head>
<style>
    body {
        font-family: arial;
        font-size: medium;
        font-style: normal;
        background-color: aquamarine;
    }
</style>

<body>
    <center>
        <br>
        <form method="post" name="form" action="<?= base_url('Quiz/simpan') ?>">
            <table border="1">
                <tr>
                    <td>Kode Sepeda</td>
                    <td><select name="kode" id="kode" onchange="jsp()">
                            <option value="">Pilih</option>
                            <option value="s001">S001</option>
                            <option value="s002">S002</option>
                            <option value="s003">S003</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Jenis</td>
                    <td><input type="text" name="jenis"></td>
                </tr>
                <tr>
                    <td>Harga Semua</td>
                    <td><input type="text" name="hargasm"></td>
                </tr>
                <tr>
                    <td>Jumlah Beli</td>
                    <td><input type="text" name="jumlah" onkeyup="hs()"></td>
                </tr>
                <tr>
                    <td>Harga Satuan</td>
                    <td><input type="text" name="hargas" onkeyup="hs()"></td>
                </tr>
            </table>
            <tr>
                <td><input style="background-color: aqua;" type="submit" name="Simpan" value="Proses"></td>
            </tr>
        </form>
    </center>
</body>

</html>
<script>
    function jsp() {
        var kode = document.form.kode.value;
        var js = document.form.jenis.value;
        if (kode == "s001") {
            document.form.jenis.value = "Polygon";
        } else if (kode == "s002") {
            document.form.jenis.value = "Samki";
        } else {
            document.form.jenis.value = "Gunung";
        }
    }

    function hs() {
        var hrg = document.form.hargasm.value;
        var jmlh = document.form.jumlah.value;
        var total = parseInt(hrg) / parseInt(jmlh);
        document.form.hargas.value = total;
    }
</script>