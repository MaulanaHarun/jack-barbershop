    <!DOCTYPE html>
    <html>
    <head>
        <title>Jadwal</title>
        <style>
            body { font-family: Arial; padding: 20px; }
            table { width: 100%; border-collapse: collapse; background: white; }
            th, td { border: 1px solid #ddd; padding: 10px; }
            a.btn { padding: 8px 12px; background: #222; color: white; text-decoration: none; }
        </style>
    </head>
    <body>

    <h2>Data Jadwal</h2>
    <a class="btn" href="/admin/jadwal/create">+ Tambah Jadwal</a>

    <table>
        <tr>
            <th>Tanggal</th>
            <th>Jam</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    @foreach($data as $d)
        <tr>
            <td>{{ $d->tanggal }}</td>
            <td>{{ $d->jam }}</td>
            <td>{{ $d->status }}</td>
            <td>
                <a class="btn" href="/admin/jadwal/edit/{{ $d->id_jadwal }}">Edit</a>
                <a class="btn" href="/admin/jadwal/delete/{{ $d->id_jadwal }}">Hapus</a>
            </td>
        </tr>
    @endforeach
    </table>

    </body>
    </html>
