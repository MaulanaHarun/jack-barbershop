<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Customer</title>

    <style>
        body {
            background-color: #0d0d0d;
            font-family: Arial, sans-serif;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: rgba(20, 20, 20, 0.9);
            padding: 30px;
            border-radius: 12px;
            width: 360px;
            text-align: center;
            border: 1px solid #d4a017;
        }

        .logo {
            width: 110px;
            margin-bottom: 10px;
        }

        h2 {
            color: #d4a017;
            margin-bottom: 10px;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-top: 10px;
            border-radius: 6px;
            border: 1px solid #d4a017;
            background: #111;
            color: white;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #d4a017;
            border: none;
            color: black;
            font-weight: bold;
            border-radius: 6px;
            margin-top: 20px;
            cursor: pointer;
        }

        a {
            color: #d4a017;
            display: block;
            margin-top: 15px;
        }
    </style>

</head>
<body>

    <div class="container">
        <img src="{{ asset('logo-jeck.png') }}" class="logo">

        <h2>Daftar Customer</h2>

        <form method="POST" action="{{ route('customer.register.submit') }}">
            @csrf

            <input type="text" name="name" placeholder="Nama Lengkap" required>

            <input type="email" name="email" placeholder="Email" required>

            <input type="password" name="password" placeholder="Password" required>

            <button type="submit">Daftar</button>

            <a href="{{ route('customer.login') }}">Sudah punya akun? Login</a>
        </form>
    </div>

</body>
</html>
