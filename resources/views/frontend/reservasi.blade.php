<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Reservasi | Jack Barbershop</title>

<style>
/* ================= OVERLAY ================= */
.overlay {
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 40px 20px;
}
body {
    margin: 0;
    font-family: Arial, sans-serif;
    color: #FFC628;

    background-image:
         linear-gradient(rgba(0,0,0,0.45), rgba(0,0,0,0.45)),
        url("/reservasi.png");

    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
}

/* ===== WRAPPER TENGAH ===== */
.overlay {
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 40px 20px;
}

/* ================= BOX ================= */
.reservasi-box {
    width: 100%;
    max-width: 500px;
    background: rgba(0,0,0,0.85);
    border: 2px solid #FFC628;
    border-radius: 16px;
    padding: 35px;
    box-shadow: 0 0 30px rgba(255,198,40,0.35);
    position: relative;
}

/* Glow tipis */
.reservasi-box::before {
    content: "";
    position: absolute;
    inset: -2px;
    border-radius: 18px;
    background: linear-gradient(135deg, #FFC628, transparent);
    opacity: 0.2;
    z-index: -1;
}

/* ================= TEXT ================= */
.reservasi-box h2 {
    text-align: center;
    font-size: 32px;
    margin-bottom: 10px;

    /* WARNA EMAS */
    color: #FFC628;
}
.reservasi-box p {
    text-align: center;
    font-size: 18px;
    margin-bottom: 30px;
    color: #FFC628;
}

/* ================= FORM ================= */
.field {
    margin-bottom: 20px;
}

.field label {
    display: block;
    margin-bottom: 6px;
    font-weight: bold;
}

.field input,
.field select {
    width: 94%;
    padding: 14px;
    font-size: 16px;
    border-radius: 8px;
    border: 2px solid #FFC628;
    background: #000;
    color: #FFC628;
}

.field input::placeholder {
    color: #aaa;
}

.field input:focus,
.field select:focus {
    outline: none;
    border-color: #ffdd63;
}

/* ================= JADWAL ================= */
.jadwal-box {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(130px,1fr));
    gap: 15px;
    margin-top: 15px;

    max-height: 220px;
    overflow-y: auto;
}

.jadwal-box::-webkit-scrollbar {
    width: 6px;
}
.jadwal-box::-webkit-scrollbar-thumb {
    background: #FFC628;
    border-radius: 10px;
}

.jadwal-card {
    border: 2px solid #FFC628;
    padding: 14px;
    text-align: center;
    border-radius: 10px;
    cursor: pointer;
    background: #000;
    color: #FFC628;
    transition: 0.25s;
}

.jadwal-card input {
    display: none;
}

.jadwal-card:hover {
    background: #FFC628;
    color: #000;
}

.jadwal-card:has(input:checked) {
    background: #FFC628;
    color: #000;
    box-shadow: 0 0 15px rgba(255,198,40,0.8);
    transform: scale(1.05);
}

.jadwal-card.disabled {
    opacity: 0.4;
    cursor: not-allowed;
}

/* ================= BUTTON ================= */
.btn-submit {
    display: block;
    margin: 30px auto 0;
    width: 40%;
    padding: 14px;
    font-size: 18px;
    font-weight: bold;
    background: #FFC628;
    color: #000;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    transition: 0.3s;
}

.btn-submit:hover {
    background: #ffdd63;
    box-shadow: 0 0 20px rgba(255,198,40,0.8);
}
</style>

</head>

<body>

<div class="overlay">

<div class="reservasi-box">
    <h2>Reservasi Online</h2>
    <p>Book your professional haircut</p>

    <form action="/reservasi/proses" method="POST">
        @csrf

        <div class="field">
            <label>Nama Lengkap</label>
            <input type="text" name="nama" placeholder="Masukkan nama Anda" required>
        </div>

        <div class="field">
            <label>No HP / WhatsApp</label>
            <input type="text" name="no_telp" placeholder="08xxxxxxxxxx" required>
        </div>

        <div class="field">
            <label>Pilih Layanan</label>
            <select name="layanan_id" required>
                <option value="">-- Pilih Layanan --</option>
                @foreach($layanan as $l)
                   <option value="{{ $l->id_layanan }}">
                        {{ $l->nama }} • Rp{{ number_format($l->harga,0,',','.') }}
                    </option>
                @endforeach
            </select>
        </div>

      <div class="field">
    <label>Pilih Jadwal</label>

    <div class="jadwal-box">
        @foreach($jadwal as $j)
            <label class="jadwal-card {{ $j->status == 'penuh' ? 'disabled' : '' }}">
                <input 
                    type="radio" 
                    name="jadwal_id" 
                    value="{{ $j->id_jadwal }}"
                    {{ $j->status == 'penuh' ? 'disabled' : '' }}
                >
                <span>
                    {{ \Carbon\Carbon::parse($j->tanggal)->isoFormat('dddd, D MMM') }} <br>
                    <strong style="font-size:1.4em; display:block; margin-top:5px;">
                        {{ substr($j->waktu, 0, 5) }}
                    </strong>
                </span>
                
                @if($j->status == 'penuh')
                    <div style="background:red; color:white; font-size:10px; padding:2px 5px; border-radius:4px; margin-top:5px;">FULL</div>
                @endif
            </label>
        @endforeach
    </div>
</div>
<button class="btn-submit">BOOK NOW</button>
        </div>
    </form>
</div>

</div>

</body>
</html>
