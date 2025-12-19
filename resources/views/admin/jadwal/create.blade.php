<!DOCTYPE html>
<html>
<head>
    <title>Tambah Jadwal</title>
    <style>
        body {
            font-family: Arial;
            padding: 30px;
            background: #f5f5f5;
        }

        h2 {
            text-align: center;
        }

        form {
            background: #fff;
            max-width: 450px;
            margin: auto;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,.2);
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }

        input, select, button {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            border-radius: 5px;
            border: 1px solid #aaa;
        }

        button {
            margin-top: 20px;
            background: #222;
            color: white;
            border: none;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #000;
        }
    </style>
</head>
<body>

<h2>Tambah Jadwal</h2>

<form action="/admin/jadwal/store" method="POST">
    @csrf

    <!-- HARI -->
    <label>Hari</label>
    <select name="hari" required>
        <option value="">-- Pilih Hari --</option>
        <option value="Senin">Senin</option>
        <option value="Selasa">Selasa</option>
        <option value="Rabu">Rabu</option>
        <option value="Kamis">Kamis</option>
        <option value="Jumat">Jumat</option>
        <option value="Sabtu">Sabtu</option>
        <option value="Minggu">Minggu</option>
    </select>

    <!-- JAM -->
    <label>Jam</label>
    <input type="time" name="jam" required>

    <!-- STATUS -->
    <label>Status</label>
    <select name="status" required>
        <option value="tersedia">Tersedia</option>
        <option value="penuh">Penuh</option>
    </select>

    <button type="submit">Simpan Jadwal</button>
</form>

</body>
</html>
