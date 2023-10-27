<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
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
        <form method="post" name="form1" action="proses">
            <b>Form Entri Data Mahasiswa</b>
            <br />
            <table border="2">
                <tr>
                    <td>Input NoBp </td>
                    <td><input type="text" name="nobp" size="10" /></td>
                </tr>
                <tr>
                    <td>Input Nama</td>
                    <td><input type="text" name="nama" size="20" /></td>
                </tr>
                <tr>
                    <td>Nilai Tugas</td>
                    <td><input type="text" name="ntgs" size="3" /></td>
                </tr>
                <tr>
                    <td>Nilai UTS</td>
                    <td><input type="text" name="nuts" size="3" /></td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td><input type="text" name="nuas" size="3" /></td>
                </tr>
            </table>
            <input type="submit" value="Simpan" />
        </form>
    </center>
</body>

</html>