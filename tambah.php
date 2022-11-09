<html>
<head>
</head>
<body>
    <h1>FORM PEMBELIAN BBM</h1>
    <form action="proses_tambah.php" method="POST">
        <fieldset>
            <p>
                <label for="NIK">NIK : </label>
                <input type="number" name="NIK">
            </p>
            <p>
                <label for="jk">Jenis Kendaraan : </label>
                <select name="jk" >
                    <option value="motor">Motor</option>
                    <option value="mobil">Mobil</option>
                    <option value="truk">Truk</option>
                    <option value="bus">Bus</option>
                    <option value="tossa">Tossa</option>
                </select>
            </p>
            <p>
                <input type="submit" value="Kirim Data" name="tambah">
            </p>
        </fieldset>
    </form>
</body>
</html>