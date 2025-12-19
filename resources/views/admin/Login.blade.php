<!DOCTYPE html>
<html>
<head>
    <title>Admin Login - Jeck Barbershop</title>
    <style>
        body { font-family: Arial; background: #e9e9e9; }
        .box {
            width: 350px;
            margin: 80px auto;
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0px 2px 6px rgba(0,0,0,.2);
        }
        input {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }
        button {
            width: 100%;
            padding: 12px;
            margin-top: 15px;
            background: #222;
            color: white;
            border: none;
            border-radius: 6px;
        }
        .error { color: red; margin-top: 10px; }
    </style>
</head>
<body>

<div class="box">
    <h2 style="text-align:center;">Login Admin</h2>

    @if(session('error'))
        <div class="error">{{ session('error') }}</div>
    @endif

    <form method="POST" action="/admin/login">
        @csrf

        <input type="text" name="username" placeholder="Username" required>

        <input type="password" name="password" placeholder="Password" required>

        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>
