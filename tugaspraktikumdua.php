<!DOCTYPE html>
    <head>
        <title>Tampilan KRS</title>
        <style>
        body {
        background-color: lightblue;
        }

        p {
        font-family: helvetica;
        font-size: 12px;
        }
        </style>
    </head>
    <body>
        <form action = "krsku.php" method = "POST">
            <label><p>NIM</p></label>
            <input type = "text" name ="nim">
            <br><br>
            <label><p>Nama Mahasiswa</p></label>
            <input type = "text" name = "nama">
            <br><br>
            <label><p>Kode Matakuliah</p></label>
            <input type = "text" name = "kode">
            <br><br>
            <label><p>Nama Matakuliah</p></label>
            <input type = "text" name = "matkul">
            <br><br>
            <label><p>SKS</p></label>
            <input type = "text" name = "sks">
            <br><br>
            <label><p>Kelas</p></label>
            <select name="kelas">
				<option value="">Pilih</option>
				<option value="A">A</option>
				<option value="B">B</option>
			</select><br><br>
            <label><p>Semester</p></label>
            <select name="semester">
				<option value="">Pilih</option>
				<option value="1">1</option>
				<option value="3">3</option>
                <option value="5">5</option>
                <option value="7">7</option>
			</select><br><br>
            <input type = "submit" value = "Save">
        </form>
    </body>
</html>
