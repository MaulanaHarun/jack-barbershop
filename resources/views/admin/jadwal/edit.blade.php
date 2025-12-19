<!DOCTYPE html>
<html>
<head>
    <title>Edit Jadwal</title>
    <style>
        body { 
            font-family: Arial; 
            padding: 20px; 
            background: #111;
            color: #FFC628;
        }
        input, select, button { 
            width: 100%; 
            padding: 10px; 
            margin-top: 10px; 
            border-radius: 6px;
            border: 1px solid #FFC628;
            background: #000;
            color: #FFC628;
        }
        button {
            background: #FFC628;
            color: #000;
            font-weight: bold;
            cursor: pointer;
        }
    </style>
</head>
<body>

<h2>Edit Jadwal</h2>

<form action="/admin/jadwal/update/{{ $data->id_jadwal }}" method="POST">
    @csrf

    <!-- HARI -->
    <label>Hari</label>
    <select name="hari" required>
        @php
            $hari = ['Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu'];
        @endphp
        @foreach($hari as $h)
            <option value="{{ $h }}" {{ $data->hari == $h ? 'selected' : '' }}>
                {{ $h }}
            </option>
        @endforeach
    </select>

    <!-- WAKTU -->
    <label>Jam</label>
    <input 
        type="time" 
        name="waktu" 
        value="{{ $data->waktu }}" 
        required
    >

    <!-- STATUS -->
    <label>Status</label>
    <select name="status">
        <option value="tersedia" {{ $data->status=='tersedia'?'selected':'' }}>
            tersedia
        </option>
        <option value="penuh" {{ $data->status=='penuh'?'selected':'' }}>
            penuh
        </option>
    </select>

    <button type="submit">Update Jadwal</button>
</form>

</body>
</html>
