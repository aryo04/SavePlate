<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SavePlate</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/stylemenu.css">
    <script src="../menu.js"></script>
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
                    <li class="profile">
                        <a href="#">
                            <img src="../images/profile.svg" alt="Profile" class="profile-icon"> <!-- Ganti dengan path gambar profil -->
                        </a>
                        <ul class="dropdown-profile">
                            <li><a href="../pages/homepage.php">Logout</a></li> <!-- Link untuk logout -->
                        </ul>
                    </li>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="content">
            <h2>Restoran</h2>
            <div class="resto-grid">
                <a href="../pages/makananberat.php" class="resto-item">
                    <h2>Pagi Sore</h2>
                    <img src="../images/pagisore.png" alt="Pagi Sore">
                </a>
                <a href="../pages/makananberat.php" class="resto-item">
                    <h2>Nasi Uduk</h2>
                    <img src="../images/nasiuduk.png" alt="Nasi Uduk">
                </a>
                <a href="ayam_geprek.html" class="resto-item">
                    <h2>Ayam Geprek</h2>
                    <img src="../images/ayamgeprek.png" alt="Ayam Geprek">
                </a>
                <a href="bakso.html" class="resto-item">
                    <h2>Bakso</h2>
                    <img src="../images/bakso.png" alt="Bakso">
                </a>
                <a href="mie_ayam.html" class="resto-item">
                    <h2>Mie Ayam</h2>
                    <img src="../images/mieayam.png" alt="Mie Ayam">
                </a>
                <a href="sate_padang.html" class="resto-item">
                    <h2>Sate Padang</h2>
                    <img src="../images/satepadang.png" alt="Sate Padang">
                </a>
                <a href="ketoprak.html" class="resto-item">
                    <h2>Ketoprak</h2>
                    <img src="../images/ketoprak.png" alt="Ketoprak">
                </a>
                <a href="gado_gado.html" class="resto-item">
                    <h2>Gado-Gado</h2>
                    <img src="../images/gadogado.png" alt="Gado-Gado">
                </a>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 SavePlate. All rights reserved.</p>
    </footer>
</body>
</html>