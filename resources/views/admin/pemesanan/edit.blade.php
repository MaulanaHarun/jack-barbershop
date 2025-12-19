<!DOCTYPE html>
<html>
<head>
    <title>Edit Reservasi</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        select, input { width: 100%; padding: 10px; margin-top: 10px; }
    </style>
</head>
<body>

<h2>Edit Reservasi</h2>

<form action="/admin/pemesanan/update/{{ $data->id_pemesanan }}" method="POST">
    @csrf

    <label>Status</label>
    <select name="status">
        <option value="menunggu" {{ $data->status=='menunggu'?'selected':'' }}>menunggu</option>
        <option value="diterima" {{ $data->status=='diterima'?'selected':'' }}>diterima</option>
        <option value="selesai" {{ $data->status=='selesai'?'selected':'' }}>selesai</option>
    </select>

    <button type="submit">Update</button>
</form>

</body>
</html>
