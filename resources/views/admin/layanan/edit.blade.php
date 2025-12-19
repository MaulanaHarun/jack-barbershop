<!DOCTYPE html>
<html>
<head>
    <title>Edit Layanan</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        input { width: 100%; padding: 10px; margin-top: 10px; }
        button { padding: 10px 15px; background: #222; color: white; border: none; }
    </style>
</head>
<body>

<h2>Edit Layanan</h2>

<form action="/admin/layanan/update/{{ $data->id_layanan }}" method="POST">
    @csrf

    <label>Nama Layanan</label>
    <input type="text" name="nama_layanan" value="{{ $data->nama_layanan }}" required>

    <label>Harga</label>
    <input type="number" name="harga" value="{{ $data->harga }}" required>

    <button type="submit">Update</button>
</form>

</body>
</html>
