<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>index</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <style>
            body {
                padding: 0;
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
    display: flex;
    justify-items: center;
    align-items: center;
    height: 45px;
}

img .btn-profile{
width: 45px;
height: 45px;
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

nav {
&.primary-navigation {
margin: 0 auto;
display: block;

padding: 5px 0 0 0;  
text-align: center;
font-size: 16px;

ul li {
  list-style: none;
  margin: 0 auto;
  display: inline-block;
  padding: 0 30px;
  position: relative;
  text-decoration: none;
  text-align: center;
  font-family: arvo;
}

li a {
  color: black;
}

li a:hover {
  color: #e60000;
}

li:hover {
  cursor: pointer;
}

ul li ul {
  visibility: hidden;
  opacity: 0;
  position: absolute;
padding-left: 0;
  left: 0;
  display: none;
  background: white;
}

ul li:hover > ul,
ul li ul:hover {
  visibility: visible;
  opacity: 1;
  display: block;
  min-width: 250px;
  text-align: left;
  padding-top: 20px;
  box-shadow: 0px 3px 5px -1px #ccc;
}

ul li ul li {
  clear: both;
  width: 100%;
  text-align: left;
  margin-bottom: 20px;
  border-style: none;
}

ul li ul li a:hover {
  padding-left: 10px;
  border-left: 2px solid #e60000;
  transition: all 0.3s ease;
}
}
}

a {

text-decoration: none;

&:hover {
    color: #3CA0E7;
}

}

ul li ul li a { transition: all 0.5s ease; }

.primary-navigation ul {
display: flex;
justify-content: space-around;
padding: 7px 0;
list-style: none;
border: 1px solid #545f71;
}

.primary-navigation li {
position: relative; 
}

.primary-navigation li a {
display: block;
padding: 10px; 
color: #000; 
text-decoration: none;
}
.primary-navigation li:hover > a {
background-color: #f0f0f0;
color: #545f71; 
}


.primary-navigation li ul {
display: none;
position: absolute;
left: 0;
top: 100%;
background-color: #fff; 
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
z-index: 1;
}

.primary-navigation li:hover ul {
display: block;
background-color: #f0f0f0;
}

.recommendation-section {
text-align: left;
margin: 20px 0; 
}

.recommendation-section h2 {
font-size: 24px; 
color: #000;
margin-bottom: 10px;
padding-left: 50px;
}

.card-container {
display: grid;
grid-template-columns: repeat(4, 1fr);
gap: 38px;
padding: 20px 50px; 
}

.product-card {
border: 1px solid #ccc;
border-radius: 10px;
overflow: hidden;
box-shadow: 0px 4px 6px rgba(0,0,0,0.1);
}

.product-card img {
width: 100%;
height: auto;
object-fit: cover;
}

.card-content {
padding: 15px;
text-align: center;
}

.card-content h3 {
margin: 10px 0;
font-size: 1.1em;
}

.card-content p {
margin: 0;
font-weight: bold;
color: #545f71;
}

footer {
background-color: #6f1919;
color: white;
text-align: center;
padding: 40px;
}

footer h4, footer ul, footer p {
margin-bottom: 20px; 
}

footer ul {
padding-left: 0;
list-style-type: none;
}

footer li {
margin-bottom: 10px; 
}

footer img {
vertical-align: middle;
margin-right: 10px; 
}
        </style>
    </head>
    <body>

    <!-- Navbar --> 

    <!-- Navbar --> 

    <div class="navbar">
        <div class="navbar-logo"><img src="../images/Logo.png" alt=""></div>
        <div class="navbar-buttons">
            <!-- Tombol Profile -->
            <button class="btn btn-profile" onclick="window.location.href='profil.php'"><img src="../images/account.png" alt="Profile" width="45px" height="45px"></button>
            <!-- Tombol Jual -->
            <button class="btn btn-jual" onclick="window.location.href='dealersign.php'">Jual</button>
        </div>
    </div>

    <!-- Extended Navbar --> 

    <nav role="navigation" class="primary-navigation">
  <ul>
    <li><a href="index.php">Home</a></li>
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



<!-- Card motor -->

<div class="card-container">
    <!-- Card 1 -->
    <div class="product-card">
        <img src="motor1.png" alt="Motor 1">
        <div class="card-content">
            <h3>Motor 1</h3>
            <p>Rp 50.000.000</p>
        </div>
    </div>

    <!-- Card 2 -->
    <div class="product-card">
        <img src="motor1.png" alt="Motor 1">
        <div class="card-content">
            <h3>Motor 1</h3>
            <p>Rp 50.000.000</p>
        </div>
    </div>

    <!-- Card 3 -->
    <div class="product-card">
        <img src="motor1.png" alt="Motor 1">
        <div class="card-content">
            <h3>Motor 1</h3>
            <p>Rp 50.000.000</p>
        </div>
    </div>

<!-- Footer -->
<footer style="background-color: #6f1919; color: white; text-align: center; padding: 20px;">
    <div style="display: flex; justify-content: space-between;">
        <div style="flex-basis: 20%;">
            <h4>IMMAMOTO</h4>
            <ul style="list-style-type: none; padding-left: 0;">
                <li>Our Team</li>
                <li>Contact Support</li>
            </ul>
        </div>
        <div style="flex-basis: 20%;">
            <h4>Kategori Populer</h4>
            <ul style="list-style-type: none; padding-left: 0;">
                <li>Motor Sport</li>
                <li>Super Bike</li>
                <li>Naked Bike</li>
                <li>Normal Bike</li>
            </ul>
        </div>
        <div style="flex-basis: 20%;">
            <h4>Hubungi Kami</h4>
            <ul style="list-style-type: none; padding-left: 0;">
                <li>0812-3278-6221</li>
            </ul>
        </div>
        <div style="flex-basis: 20%;">
            <h4>Media Sosial</h4>
            <ul style="list-style-type: none; padding-left: 0;">
                <li><img src="instagram.png" alt="">@immamoto</li>
                <li><img src="facebook (1).png" alt="">@immamoto</li>
                <li><img src="twitter.png" alt="">@immamoto</li>
            </ul>
        </div>
    </div>
    <p>&copy; 2024 ImmaMoto. All Rights Reserved.</p>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="main.js"></script>
    </body>
    </html>
