<!DOCTYPE html>
<html>
<head>
    <title>Data Layanan - Jeck Barbershop</title>

    <style>
        body { 
            font-family: Arial; 
            padding: 20px; 
            background: #f5f5f5;
        }
        table {
            width: 100%; 
            border-collapse: collapse; 
            background: white;
            margin-top: 20px;
        }
        th, td {
            padding: 10px; 
            border: 1px solid #ddd;
        }
        a.btn {
            padding: 8px 12px; 
            background: #222;
            color: white; 
            text-decoration: none;
            border-radius: 5px;
            margin-right: 5px;
        }
        .img-thumb {
            width: 80px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<h2>Data Layanan</h2>

<a class="btn" href="/admin/layanan/create">+ Tambah Layanan</a>

<table>
    <tr>
        <th>No</th>
        <th>Nama Layanan</th>
        <th>Deskripsi</th>
        <th>Harga</th>
        <th>Gambar</th>
        <th>Aksi</th>
    </tr>

    @foreach($data as $d)
    <tr>
        <td>{{ $loop->iteration }}</td>

        <!-- Nama layanan -->
        <td>{{ $d->nama }}</td>

        <!-- Deskripsi -->
        <td>{{ $d->deskripsi }}</td>

        <!-- Harga -->
        <td>Rp {{ number_format($d->harga, 0, ',', '.') }}</td>

        <!-- Gambar -->
        <td>
            @if($d->gambar)
                <img src="/uploads/layanan/{{ $d->gambar }}" class="img-thumb">
            @else
                <small>Tidak ada gambar</small>
            @endif
        </td>

        <!-- Tombol edit & hapus -->
        <td>
            <a class="btn" href="/admin/layanan/edit/{{ $d->id }}">Edit</a>
            <a class="btn" href="/admin/layanan/delete/{{ $d->id }}">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>

</body>
</html>
