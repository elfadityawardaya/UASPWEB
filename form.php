
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="">
    
    <style>
    body{
    background-image: url(motor.png);
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    font-family: monospace;
    background-size: cover;
}
.boxlogin{
    width: 320px;
    height: 520px;
    background:rgb(0,0, 0, .7);
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    border-radius: 20px;
    padding-top:20px;
    padding-bottom: 30px;
    padding-left: 40px;
    padding-right: 40px;
}
h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}
h2{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}
h4{
    margin: 0;
    padding: 0 0 20px;
    font-size: 14px;
  
}
.boxlogin p{
    margin: 0;
    padding: 0;
    font-weight: bold;
    padding: 0;
}
.boxlogin input{
    width: 100%;
    margin-bottom: 20px;
}
.boxlogin input[type="text"],input[type="password"]{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.boxlogin input[type="submit"]{
    border: none;
    outline: none;
    height: 40px;
    background: rgb(66,197,244,.7);
    color: black;
    font-size: 18px;
    border-radius: 20px;
}

.boxlogin a {
color: #fff;
}
 </style>
</head>
<body>
    </div>
    <div class="boxlogin">
        <h1>FORM PENDAFTARAN SERVICE MOTOR</h1>
        <h4>*isilah form ini sesuai dengan kriteria yang diminta</h4>
        <form method="post" action="tampil.php">
            <input type="text" name="nama" placeholder="Masukan Nama">
            <input type="text" name="plat" placeholder="Masukan No.Plat">
            <input type="text" name="merek" placeholder="Masukan Merek Motor">
            <input type="submit" name="daftar" value="DAFTAR">
        </form>
        <a href="projekta.php" id="home">
            <h2>HOME</h2>
        </a>
        <h2>SELAMAT MEMANJAKAN MOTOR ANDA</h2>
    </div>
</body>
</html>