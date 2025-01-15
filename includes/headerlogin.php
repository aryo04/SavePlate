<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SavePlate</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header id="header">
        <div class="container"> 
            <h1>SavePlate</h1>
            <nav>
                <ul class="nav-links">
                    <li><a href="../pages/homepagelogin.php">Home</a></li>
                    <li><a href="">Menu</a>
                        <ul class="dropdown">
                            <li><a href="../pages/restoranmakananberat.php">Makanan Berat</a></li>
                            <li><a href="../pages/restoranrotidankue.php">Roti dan Kue</a></li>
                            <li><a href="../pages/restoranminuman.php">Minuman</a></li>
                            <li><a href="../pages/restorancamilan.php">Camilan</a></li>
                        </ul>
                    </li>
                    <li><a href="../pages/keranjang.php">Keranjang</a></li>
                    <li><a href="../pages/riwayat.php">Riwayat</a></li>
                    <li class="profile">
                        <a href="#">
                            <img src="../images/profile.svg" alt="Profile" class="profile-icon"> <!-- Ganti dengan path gambar profil -->
                        </a>
                        <ul class="dropdown-profile">
                            <li><a href="homepage.php">Logout</a></li> <!-- Link untuk logout -->
                        </ul>
                    </li>
                    </li>
                </ul>
            </nav>
        </div>
    </header>