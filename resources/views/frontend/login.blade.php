<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Jack Barbershop Login</title>

<style>
body{
    margin:0;
    font-family:Arial;
    overflow:hidden;
}

/* BACKGROUND FOTO + BLUR + OVERLAY GELAP */
.bg {
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:url('background.jpg') center/cover no-repeat;
    filter:blur(8px) brightness(0.45);
    z-index:-2;
}

/* Overlay hitam semi transparent */
.overlay {
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.45);
    z-index:-1;
}

.container{
    width:100%;
    height:100vh;
    position:relative;
    display:flex;
    justify-content:center;
    align-items:center;
}

/* LOGO */
.logo{
    width:800px;
    position:absolute;
    top:7%;
    left:50%;
    transform:translateX(-50%);
    filter:none;
}

/* CARD LOGIN (middle) */
.card{
    position:absolute;
    top:47%;
    left:50%;
    transform:translateX(-50%);
    width:400px;
    background:transparent; /* transparan elegan */
    border:none;
    border-radius:15px;
    padding:50px 35px;
    backdrop-filter: blur(10px);
    box-shadow: none;
    text-align:center;
}

/* INPUT */
input{
    width:80%;
    padding:15px;
    border:2px solid #FFC628;
    border-radius:8px;
    background:transparent;
    color:#FFC628;
    margin-bottom:20px;
    font-size:25px;
    box-shadow:none;
}

input::placeholder{
    color:#FFC628;
}

/* BUTTON */
button{
    width:60%;
    padding:15px;
    background:#FFC628;
    border:none;
    border-radius:8px;
    color:black;
    font-size:25px;
    cursor:pointer;
    box-shadow:none;
}

button:hover{
    background:#ffdd6a;
}

/* LINK */
a{
    margin-top:20px;
    display:inline-block;
    color:#FFC628;
    text-decoration:none;
    font-size:25px;
    letter-spacing:0.3px;
}

a:hover{
    text-shadow:0 0 10px rgba(255,198,40,0.9);
}
</style>

</head>
<body>

<!-- Background Foto Blur -->
<div class="bg"></div>
<div class="overlay"></div>
<img src="background.jpeg" class="background">
<div class="container">

    <img src="logo-jeck.png" class="logo">

    <div class="card">
        <input type="email" placeholder="Email">
        <input type="password" placeholder="Password">

        <button>Login</button>

        <a href="#">Belum punya akun? Daftar</a>
    </div>

</div>

</body>
</html>
