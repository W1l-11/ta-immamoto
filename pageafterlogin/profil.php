<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
            padding: 10px;
        }

        .navbar-logo {
            margin-left: 50px;
        }

        .navbar-buttons {
            margin-right: 20px;
        }

        .btn {
            padding: 8px 29px;
            margin: 0 10px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
            border-radius: 45px;
            color: #ffffff;
        }

        .btn-daftar {
            background-color: #ffffff;
            border: 2px solid #545f71;
            color: #545f71;
        }

        .btn-daftar:hover {
            background-color: #e60000;
            color: #ffffff;
        }

        .btn-masuk {
            background-color: #e60000;
            border: 2px solid #545f71;
            margin-right: 50px;
        }

        .btn-masuk:hover {
            background-color: #ffffff;
            color: #545f71;
        }

        .btn-jual {
            background-color: #e60000;
            border: 2px solid #545f71;
            color: #ffffff;
            position: relative;
            padding-left: 60px;
            padding-right: -20px;
            transition: background-color 0.3s, color 0.3s, border-color 0.3s;
        }

        .btn-jual::before {
            content: "+";
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            background-color: transparent;
            color: #ffffff;
            width: 25px;
            height: 25px;
            text-align: center;
            line-height: 25px;
            border-radius: 50%;
            font-size: 35px;
        }

        .btn-jual:hover {
            background-color: #ffffff;
            border-color: #545f71;
            color: #545f71;
        }

        .btn-jual:hover::before {
            color: #545f71;
        }

        .btn-profile {
            position: relative;
            margin-right: 20px;
            padding: 8px 15px;
            cursor: pointer;
            background-color: transparent; /* Hapus background */
        }

        .btn-profile img {
            width: 30px;
            height: 30px;
            vertical-align: middle;
        }
    </style>
</head>
<body>
<div class="navbar">
    <div class="navbar-logo"><img src="Logo.png" alt=""></div>
    <div class="navbar-buttons">
        <!-- Tombol Profile -->
        <button class="btn btn-profile" onclick="window.location.href='profil.php'"><img src="account.png" alt="Profile"></button>
        <!-- Tombol Jual -->
        <button class="btn btn-jual" onclick="window.location.href='dealerlogin.php'">Jual</button>
    </div>
</div>

 <!-- Extended Navbar --> 

 <nav role="navigation" class="primary-navigation">
  <ul>
    <li><a href="index_login.php">Home</a></li>
    <li><a href="#">Kategori &dtrif;</a>
    <ul class="dropdown">
        <li><a href="#">Super Bike</a></li>
        <li><a href="#">Sports Bike</a></li>
        <li><a href="#">Scooter</a></li>
        <li><a href="#">Normal</a></li>
      </ul>
    <li>
        <a href="#">Pemakaian &dtrif;</a>
      <ul class="dropdown">
        <li><a href="#">Bekas</a></li>
        <li><a href="#">Baru</a></li>
      </ul>
    </li>
    <li><a href="#">Lokasi</a></li>
    <li><a href="#">Keranjang</a></li>
  </ul>
</nav>

</body>
</html>