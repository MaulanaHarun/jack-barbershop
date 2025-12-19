<!DOCTYPE html>
<html>
<head>
    <title>Status Reservasi</title>
    <style>
        body { font-family: Arial; background: #f0f0f0; padding: 20px; }
        .box {
            max-width: 500px;
            background: white;
            margin: auto;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 2px 5px rgba(0,0,0,.2);
        }
        .status {
            padding: 15px;
            background: #222;
            color: white;
            border-radius: 6px;
            text-align: center;
            margin-bottom: 20px;
        }
        table { width: 100%; }
        td { padding: 6px 0; }
    </style>
</head>

<body>

<div class="box">

<h2>Status Reservasi Anda</h2>

<div class="status">
    Status: {{ $data->status }}
</div>

<table>
<tr><td>Nama</td><td>: {{ $data->nama_pelanggan }}</td></tr>
<tr><td>No Hp</td><td>: {{ $data->no_telp }}</td></tr>
<tr><td>Layanan</td><td>: {{ $data->layanan->nama_layanan }}</td></tr>
<tr><td>Harga</td><td>: Rp{{ $data->layanan->harga }}</td></tr>
<tr><td>Tanggal</td><td>: {{ $data->jadwal->tanggal }}</td></tr>
<tr><td>Jam</td><td>: {{ $data->jadwal->jam }}</td></tr>
</table>

</div>

</body>
</html>
