<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>
    <style>
        body { font-family: Arial; background: #f4f4f4; margin: 0; }
        header {
            background: #222; color: white;
            padding: 15px;
            text-align: center;
        }
        .menu {
            background: #fff;
            padding: 20px;
            margin: 20px;
            border-radius: 8px;
            display: flex;
            gap: 20px;
        }
        .menu a {
            padding: 15px 20px;
            background: #222;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }
    </style>
</head>
<body>

<header>
    <h2>Dashboard Admin</h2>
    <a href="/admin/logout" style="color:#fff;">Logout</a>
</header>

<div class="menu">
    <a href="/admin/layanan">Kelola Layanan</a>
    <a href="/admin/jadwal">Kelola Jadwal</a>
    <a href="/admin/pemesanan">Kelola Reservasi</a>
</div>

</body>
</html>
