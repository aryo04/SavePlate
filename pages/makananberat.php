<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SavePlate - Nasi Padang</title>
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
                    <li><a href="../pages/restorancamilan.php">Menu</a></li>
                    <li><a href="../pages/keranjang.php">Keranjang</a></li>
                    <li class="profile">
                        <a href="#">
                            <img src="../images/profile.svg" alt="Profile" class="profile-icon"> <!-- Ganti dengan path gambar profil -->
                        </a>
                        <ul class="dropdown-profile">
                            <li><a href="../pages/homepage.php">Logout</a></li> <!-- Link untuk logout -->
                        </ul>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="product-details">
            <h2>Detail Produk</h2>
            <a href="restorancamilan.htmls" class="back-button">← Kembali ke Menu</a>

            <div class="product">
                <div class="product-image">
                    <img src="../images/nasipadang.png" alt="Nasi Padang">
                </div>
                <div class="product-info">
                    <h3>Nasi Padang</h3>
                    <p>Nasi Padang dengan Gulai Tunjang, Daun Singkong, Sambal</p>
                    <p class="price">Rp. 35.000,00</p>
                    <div class="product-actions">
                        <button class="btn-quantity" onclick="decreaseQuantity()">-</button>
                        <input type="number" id="quantity" value="1" min="1">
                        <button class="btn-quantity" onclick="increaseQuantity()">+</button>
                        <button class="add-to-cart">🛒 Tambahkan ke Keranjang</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="product-details">    
            <div class="product">
                <div class="product-image">
                    <img src="../images/nasiuduk.png" alt="Nasi Uduk">
                </div>
                <div class="product-info">
                    <h3>Nasi Uduk</h3>
                    <p>Nasi Uduk dengan Telur & Kentang Balado, Orek Tempe, Bihun</p>
                    <p class="price">Rp. 15.000,00</p>
                    <div class="product-actions">
                        <button class="btn-quantity" onclick="decreaseQuantity()">-</button>
                        <input type="number" id="quantity" value="1" min="1">
                        <button class="btn-quantity" onclick="increaseQuantity()">+</button>
                        <button class="add-to-cart">🛒 Tambahkan ke Keranjang</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>