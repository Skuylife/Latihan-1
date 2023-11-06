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
                    <td>Kode Baju</td>
                    <td><select name="kode" id="kode" onchange="jbaju()">
                            <option value="">Pilih</option>
                            <option value="b001">B001</option>
                            <option value="b002">B002</option>
                            <option value="b003">B003</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Jenis</td>
                    <td><input type="text" name="jenis"></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td><input type="text" name="harga"></td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td><input type="text" name="jumlah" onkeyup="hbaju()"></td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td><input type="text" name="total" onkeyup="hbaju()" ></td>
                </tr>
                <tr>
                    <td><input type="submit" name="Simpan" value="Proses"></td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>
<script>
    function jbaju() {
        var kode = document.form.kode.value;
        var js = document.form.jenis.value;
        if (kode == "b001") {
            document.form.jenis.value = "KoKo";
        } else if (kode == "b002") {
            document.form.jenis.value = "Gaun";
        } else {
            document.form.jenis.value = "Kaos";
        }
    }

    function hbaju() {
        var hrg = document.form.harga.value;
        var jmlh = document.form.jumlah.value;
        var total = parseInt(hrg) * parseInt(jmlh);
        document.form.total.value = total;
    }
</script>