<!DOCTYPE html>
<html>
<head>
    <title>Data Reservasi</title>
    <style>
        body { font-family: Arial; padding: 20px; background:#f5f5f5; }
        table { width: 100%; border-collapse: collapse; background: white; }
        th, td { padding: 10px; border: 1px solid #ddd; }
    </style>
</head>
<body>

<h2>Data Reservasi</h2>

<table>
    <tr>
        <th>Nama</th>
        <th>No HP</th>
        <th>Layanan</th>
        <th>Tanggal</th>
        <th>Jam</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>

@foreach($data as $d)
    <tr>
        <td>{{ $d->nama_pelanggan }}</td>
        <td>{{ $d->no_telp }}</td>
        <td>{{ $d->layanan->nama_layanan }}</td>
        <td>{{ $d->jadwal->tanggal }}</td>
        <td>{{ $d->jadwal->jam }}</td>
        <td>{{ $d->status }}</td>
        <td>
            <a class="btn" href="/admin/pemesanan/edit/{{ $d->id_pemesanan }}">Edit</a>
            <a class="btn" href="/admin/pemesanan/delete/{{ $d->id_pemesanan }}">Hapus</a>
        </td>
    </tr>
@endforeach

</table>

</body>
</html>
