<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Jack Barbershop</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            overflow: hidden;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #000;
        }

        /* BACKGROUND SETUP */
        .bg-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .bg-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Pastikan gambar background ada di public folder */
            background: url("{{ asset('background.jpg') }}") center/cover no-repeat; 
            filter: blur(6px) brightness(0.4);
            transform: scale(1.1); /* Scale up sedikit biar pinggiran blur tidak putih */
        }

        /* WRAPPER UTAMA */
        .login-wrapper {
            width: 100%;
            max-width: 450px;
            padding: 20px;
            text-align: center;
            position: relative;
            z-index: 10;
        }

        /* LOGO */
        .logo {
            width: 150px; /* Ukuran diperbaiki agar tidak menuhin layar */
            margin-bottom: 20px;
            filter: drop-shadow(0 0 10px rgba(255, 198, 40, 0.5));
        }

        /* CARD */
        .card {
            background: rgba(20, 20, 20, 0.85); /* Gelap transparan */
            border: 1px solid #FFC628;
            border-radius: 20px;
            padding: 40px 30px;
            backdrop-filter: blur(10px);
            box-shadow: 0 0 30px rgba(255, 198, 40, 0.15);
        }

        h2 {
            color: #FFC628;
            margin-top: 0;
            margin-bottom: 25px;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 24px;
        }

        /* FORM INPUT */
        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        input {
            width: 100%;
            padding: 14px;
            border: 2px solid #555;
            border-radius: 10px;
            background: rgba(0,0,0,0.5);
            color: #FFC628;
            font-size: 16px;
            transition: 0.3s;
            outline: none;
        }

        input::placeholder {
            color: #888;
        }

        input:focus {
            border-color: #FFC628;
            background: #000;
            box-shadow: 0 0 10px rgba(255, 198, 40, 0.3);
        }

        /* TOMBOL */
        button {
            width: 100%;
            padding: 14px;
            background: #FFC628;
            border: none;
            border-radius: 10px;
            color: #000;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 10px;
            text-transform: uppercase;
        }

        button:hover {
            background: #ffdb73;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 198, 40, 0.4);
        }

        /* PESAN ERROR */
        .alert {
            background: rgba(255, 0, 0, 0.2);
            color: #ff4d4d;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 20px;
            border: 1px solid #ff4d4d;
            font-size: 14px;
        }

        /* FOOTER LINK */
        .footer-link {
            margin-top: 20px;
            display: block;
            color: #aaa;
            text-decoration: none;
            font-size: 14px;
        }
        
        .footer-link:hover {
            color: #FFC628;
        }
    </style>
</head>
<body>

    <div class="bg-container">
        <div class="bg-image"></div>
    </div>

    <div class="login-wrapper">
        <img src="{{ asset('logo-jeck.png') }}" class="logo" alt="Logo Jack Barbershop">

        <div class="card">
            <h2>Admin Login</h2>

            @if(session('error'))
                <div class="alert">
                    {{ session('error') }}
                </div>
            @endif

            <form method="POST" action="{{ route('admin.login.submit') }}">
                @csrf

                <div class="form-group">
                    <input type="text" name="username" placeholder="Username" required autocomplete="off">
                </div>

                <div class="form-group">
                    <input type="password" name="password" placeholder="Password" required>
                </div>

                <button type="submit">LOGIN</button>
            </form>

            <a href="/" class="footer-link">← Kembali ke Website</a>
        </div>
    </div>

</body>
</html>