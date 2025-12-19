<!DOCTYPE html>
<html>
<head>
    <title>Tambah Layanan</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        input { width: 100%; padding: 10px; margin-top: 10px; }
        button { padding: 10px 15px; background: #222; color: white; border: none; }
    </style>
</head>
<body>

<h2>Tambah Layanan</h2>
<div class="mb-3">
    <label>Gambar Layanan</label>
    <input type="file" name="gambar" class="form-control">
</div>

<form action="/admin/layanan/store" method="POST" enctype="multipart/form-data">
    @csrf

    <label>Nama Layanan</label>
    <input type="text" name="nama_layanan" required>

    <label>Harga</label>
    <input type="number" name="harga" required>

    <button type="submit">Simpan</button>
</form>

</body>
</html>
