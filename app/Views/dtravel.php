<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Travel</title>
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
        <form method="post" name="form" action="hitungbiaya">
            <table border="1">
                <tr>
                    <td>Kode Keberangkatan</td>
                    <td><select name="kode" id="kode" onchange="kk()">
                            <option value="">Pilih</option>
                            <option value="k001">K001</option>
                            <option value="k002">K002</option>
                            <option value="k003">K003</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Agenda</td>
                    <td><input type="text" name="agenda"></td>
                </tr>
                <tr>
                    <td>Biaya Transportasi</td>
                    <td><input type="text" name="transportasi" onkeyup="proses()"></td>
                </tr>
                <tr>
                    <td>Biaya Penginapan</td>
                    <td><input type="text" name="penginapan" onkeyup="proses()"></td>
                </tr>
                <tr>
                    <td>Biaya pokok</td>
                    <td><input type="text" name="pokok" onkeyup="proses()"></td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td><input type="text" name="total" onkeyup="proses()"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="Simpan"></td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>
<script>
    function kk() {
        var kode = document.form.kode.value;
        var agenda = document.form.agenda.value;
        if (kode == "k001") {
            document.form.agenda.value = "Rapat";
        } else if (kode == "k002") {
            document.form.agenda.value = "Dinas Luar";
        } else {
            document.form.agenda.value = "Study";
        }
    }

    function proses() {
        var transportasi = document.form.transportasi.value;
        var penginapan = document.form.penginapan.value;
        var pokok = document.form.pokok.value;
        var total = parseInt(transportasi) + parseInt(penginapan) + parseInt(pokok);
        document.form.total.value = total;
    }
</script>