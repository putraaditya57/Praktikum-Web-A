<?php
    session_start();
    if(isset($_SESSION['level'])){
      if($_SESSION['level'] != 'admin'){
        header('Location: ../pegawai/index.php');
      }
    }
    else{
      header('Location: ../index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        *{
            font-family: sans-serif;
        }
        #batas{
            margin: 0 auto;
            width: 1000px;
            height: auto;
        }
        #atas{
            width: 700px;
            height: 250px;
            float: right;
            position: relative;
            box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
        }
        #atas p{
            position: absolute;
            color: white;
            
            font-size: 20px;
            top: 8px;
            right: 16px;
        }
        #sidebar{
            float: left;
            width: 300px;
            height:auto;
        }
        #sidebar img{
            width: 300px;
        }
        #menu{
           
            margin-top: 7px;
            width: 700px;
            height:43px;
            float: right;
            box-shadow: 1px 2px 10px rgba(0, 0, 0, .5);
        }
        #menu ul {
            border-radius: 3px;
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #008CBA;
        }
        #menu li{
            float: left;
        }
        #menu li a:hover {
            background-color: #008CBA;
        }
        #menu li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        #isi{
            margin-top: 8px;
            margin-bottom: 8px;
            width: 700px;
            height: 550px;
            float: right;
            box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
            background: white;
            border-radius: 8px;
        }
        #isi h1{
            margin-left: 10px;
        }
        #isi p{
            margin-left: 25px;
            margin-right: 10px;
        }
        .populer p{
            color: white;
            padding: 10px;
            text-align: center;
        }
        #sidebar ul{
            border-radius: 8px;
            box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 250px;
            background-color: #f1f1f1;
            margin-left: 30px;
        }
        #sidebar li a{
            display: block;
            color: #000;
            padding: 8px 16px;
            border-bottom-style: dotted;
            text-decoration: none;
            border-bottom-color: #008CBA;
            border-bottom-width: thin;
            
        }
        #sidebar li a:hover{
            background-color: #008CBA;
            color: white;
        }
       .galeri {
            position: relative;
            margin-left: 25px;
            display: inline-block;
        }
        .galeri p a{
            color: black;
            text-decoration: none;
         
        }
        
        .galeri img{
            margin-right: 7px;
            margin-left: 10px;
            height: 220px;
            width: 170px;
        }
        .button {
            background-color: #008CBA;
            border: none;
            color: white;
            padding: 15px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            border-radius: 10px;
            margin-left: 17px;
        }
        #footer{
            width: auto;
            height: 70px;
            background-color: #008CBA;
            border-radius: 8px;
            box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
        }
        #footer p {
            color:white;
            padding: 30px ;
            text-align: center;
        }
        #clear{
            clear: both;
        }
        .populer{
            background-color: #008CBA;
            width: 250px;
            margin-left: 30px;
            border-radius: 8px;
            box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
        }  
    </style>
</head>
<body>
                <p style="color: black; font-weight: bolder;"><?php echo $_SESSION['User']?></p>
            <p style="color: black; font-weight: bolder;">Level : <?php echo $_SESSION['level']?></p>
    <div id="batas">
        <div id="atas">
            <img src="gambar/tokbuk.JPG" alt="" style="height: 250px; width: 700px;">
            <p style="color: black; font-weight: bolder;">TOKO BUKU FORTUNE</p>
        </div>
        <div id="sidebar">
            <img src="gambar/gk.png" alt="" style="height: auto; width: 240px;">
            <div class="populer">
                <p>Artikel Populer</p>
            </div>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="tentang.html">TENTANG</a></li>
                    <li><a href="galeri.html">GALERI</a></li>
                    <li><a href="kontak.html">KONTAK</a></li>
                </ul>
            
        </div>
        <div id="menu">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="tentang.html">TENTANG</a></li>
                <li><a href="galeri.html">GALERI</a></li>
                <li><a href="kontak.html">KONTAK</a></li>
            </ul>
        </div>
        <div id="isi">
            <h1>Selamat Datang</h1>
            <p style="text-align: justify;">Selamat datang di Toko Buku Fortune, Kami menyediakan berbagai buku mulai dari buku untuk pelajar, mahasiswa dan umum.</p>
            <h1>Galeri</h1>
            <p style="text-align: right; margin-top: -30px;"><a href="#" style="text-decoration: none;">View All Books</a></p>
            <div class = "galeri">
                <img src="gambar/lele1.jpg" alt="">
                <p><a href="galeri.html"><button class="button">Lihat Buku</button></a></p>
            </div>
            <div class = "galeri">
                <img src="gambar/lele2.jpg" alt="">
                <p><a href="galeri.html"><button class="button">Lihat Buku</button></a></p>
            </div>
            
            <div class = "galeri">
                <img src="gambar/lele3.jpg" alt="">
                <p><a href="galeri.html"><button class="button">Lihat Buku</button></a></p>
            </div>
        </div>
        <div id="clear"></div>
        <div id="footer">
            <p>©2020 Putra Aditya</p>
        </div>
        
    </div>
</body>
</html>