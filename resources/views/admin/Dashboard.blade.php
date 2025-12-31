<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Jack Barbershop</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --gold: #FFC628;
            --dark: #111;
            --dark-card: #1e1e1e;
            --text-grey: #aaa;
            --white: #fff;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }

        body {
            background-color: var(--dark);
            color: var(--white);
            display: flex;
            min-height: 100vh;
        }

        /* === SIDEBAR === */
        .sidebar {
            width: 260px;
            background: #000;
            border-right: 1px solid #333;
            padding: 30px 20px;
            position: fixed;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .brand {
            font-size: 22px;
            font-weight: 600;
            color: var(--gold);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 50px;
            text-align: center;
            border-bottom: 1px solid #333;
            padding-bottom: 20px;
        }

        .menu-item {
            display: flex;
            align-items: center;
            padding: 15px;
            color: var(--text-grey);
            text-decoration: none;
            margin-bottom: 10px;
            border-radius: 10px;
            transition: 0.3s;
        }

        .menu-item i { margin-right: 15px; width: 20px; text-align: center; }

        .menu-item:hover, .menu-item.active {
            background: var(--gold);
            color: #000;
            font-weight: 600;
            box-shadow: 0 0 15px rgba(255, 198, 40, 0.3);
        }

        .logout {
            margin-top: auto;
            border: 1px solid #333;
            color: #d9534f;
        }
        .logout:hover { background: #d9534f; color: white; border-color: #d9534f; }

        /* === MAIN CONTENT === */
        .main-content {
            margin-left: 260px;
            padding: 40px;
            width: 100%;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
        }

        .header h2 { font-weight: 600; font-size: 28px; }
        .header p { color: var(--text-grey); font-size: 14px; }

        /* === STAT CARDS === */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 25px;
            margin-bottom: 40px;
        }

        .card {
            background: var(--dark-card);
            padding: 25px;
            border-radius: 15px;
            border: 1px solid #333;
            display: flex;
            align-items: center;
            transition: 0.3s;
        }

        .card:hover {
            border-color: var(--gold);
            transform: translateY(-5px);
        }

        .card-icon {
            width: 60px;
            height: 60px;
            background: rgba(255, 198, 40, 0.1);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
            color: var(--gold);
            margin-right: 20px;
        }

        .card-info h3 { font-size: 28px; margin-bottom: 5px; }
        .card-info p { color: var(--text-grey); font-size: 14px; }

        /* === RECENT ORDER TABLE === */
        .table-container {
            background: var(--dark-card);
            padding: 30px;
            border-radius: 15px;
            border: 1px solid #333;
        }

        .section-title { margin-bottom: 20px; font-size: 18px; color: var(--gold); }

        table { width: 100%; border-collapse: collapse; }
        
        th, td {
            text-align: left;
            padding: 15px;
            border-bottom: 1px solid #333;
            color: #ddd;
        }

        th { color: var(--text-grey); font-size: 14px; text-transform: uppercase; }
        
        tr:last-child td { border-bottom: none; }
        
        tr:hover td { background: rgba(255, 255, 255, 0.02); color: var(--gold); }

        .status-badge {
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
            background: #333;
            color: #fff;
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <div class="brand">
            <i class="fas fa-cut"></i> Jack Barber
        </div>
        
        <a href="/admin/dashboard" class="menu-item active">
            <i class="fas fa-th-large"></i> Dashboard
        </a>
        <a href="/admin/layanan" class="menu-item">
            <i class="fas fa-list"></i> Data Layanan
        </a>
        <a href="/admin/jadwal" class="menu-item">
            <i class="fas fa-clock"></i> Atur Jadwal
        </a>
        <a href="/admin/pemesanan" class="menu-item">
            <i class="fas fa-users"></i> Data Reservasi
        </a>

        <a href="/logout" class="menu-item logout">
            <i class="fas fa-sign-out-alt"></i> Logout
        </a>
    </div>

    <div class="main-content">
        
        <div class="header">
            <div>
                <h2>Overview</h2>
                <p>Selamat datang kembali, Admin!</p>
            </div>
            <div style="text-align: right;">
                <p>{{ date('l, d M Y') }}</p>
            </div>
        </div>

        <div class="stats-grid">
            <div class="card">
                <div class="card-icon">
                    <i class="fas fa-calendar-check"></i>
                </div>
                <div class="card-info">
                    <h3>{{ $pesanan_hari_ini ?? 0 }}</h3>
                    <p>Booking Hari Ini</p>
                </div>
            </div>

            <div class="card">
                <div class="card-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="card-info">
                    <h3>{{ $total_pesanan ?? 0 }}</h3>
                    <p>Total Pelanggan</p>
                </div>
            </div>

            <div class="card">
                <div class="card-icon">
                    <i class="fas fa-wallet"></i>
                </div>
                <div class="card-info">
                    <h3>Rp {{ number_format($pendapatan ?? 0, 0, ',', '.') }}</h3>
                    <p>Estimasi Pendapatan</p>
                </div>
            </div>

            <div class="card">
                <div class="card-icon">
                    <i class="fas fa-cut"></i>
                </div>
                <div class="card-info">
                    <h3>{{ $total_layanan ?? 0 }}</h3>
                    <p>Layanan Aktif</p>
                </div>
            </div>
        </div>

        <div class="table-container">
            <div class="section-title">Reservasi Terbaru Masuk</div>
            
            <table>
                <thead>
                    <tr>
                        <th>Nama Pelanggan</th>
                        <th>Layanan</th>
                        <th>Jadwal</th>
                        <th>No HP</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($terbaru as $p)
                    <tr>
                        <td>{{ $p->nama_pelanggan }}</td>
                        <td>{{ $p->layanan->nama ?? '-' }}</td>
                        <td>
                            {{ \Carbon\Carbon::parse($p->jadwal->tanggal)->format('d M') }} 
                            ({{ substr($p->jadwal->waktu, 0, 5) }})
                        </td>
                        <td>{{ $p->no_telp }}</td>
                        <td><span class="status-badge">{{ ucfirst($p->status) }}</span></td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" style="text-align:center; padding:30px;">Belum ada reservasi masuk.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>

</body>
</html>