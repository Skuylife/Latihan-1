<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Nilai</title>
</head>

<body>
    <center>
        <form name="form1" action="#">
            <b>INPUT NILAI PEMROGRAMAN WEB 2</b>
            <br />
            <table border="2">
                <tr>
                    <td>Nilai Tugas</td>
                    <td><input type="text" name="ntugas" size="3" /></td>
                </tr>
                <tr>
                    <td>Nilai MID</td>
                    <td><input type="text" name="nmid" size="3" /></td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td><input type="text" name="nuas" size="3" /></td>
                </tr>
                <tr>
                    <td>Rata-rata Nilai</td>
                    <td><input type="text" name="ntotal" size="3" disabled="true" /></td>
                </tr>
            </table>
            <input type="button" value="Simpan" onClick="hitung()" />
            <input type="button" value="Reset" onClick="resetForm()" />
        </form>
    </center>
</body>

</html>
<script language="JavaScript" type="text/javascript">
    function hitung() {
        var x = eval(document.form1.ntugas.value);
        var y = eval(document.form1.nmid.value);
        var z = eval(document.form1.nuas.value);
        var a = (x + y + z) / 3;
        document.form1.ntotal.value = a;
    }


    function resetForm() {
        document.form1.reset();
    }

    function simpan() {
        document.form1.simpan("Mantap");

    }
    //-->
</script>