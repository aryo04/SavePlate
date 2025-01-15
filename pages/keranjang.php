<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SavePlate - Keranjang</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styleKeranjang.css">
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
                            <img src="../images/profile.svg" alt="Profile" class="profile-icon"> 
                        </a>
                        <ul class="dropdown-profile">
                            <li><a href="../pages/homepage.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="tabs">
        <div class="tab" data-tab="belumDibayar">Belum Dibayar</div>
        <div class="tab active" data-tab="pesananAktif">Pesanan Aktif</div>
        <div class="tab" data-tab="pesananSelesai">Pesanan Selesai</div>
        <div class="tab" data-tab="pesananDibatalkan">Pesanan Dibatalkan</div>
    </div>

    <!-- Content Keranjang -->
    <div class="content" id="content">
        <?php if (empty($cart)): ?>
            <img src="placeholder.png" alt="No Orders">
            <p>Kamu belum punya pesanan nih<br>Segera pesan dan selamatkan makanan favoritmu</p>
            <a href="../pages/restorancamilan.php" class="btn">Pesan Sekarang</a>
        <?php else: ?>
            <h2>Keranjang Kamu</h2>
            <table>
                <thead>
                    <tr>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cart as $item): ?>
                        <tr>
                            <td><?php echo $item['name']; ?></td>
                            <td>Rp <?php echo number_format($item['price'], 0, ',', '.'); ?></td>
                            <td><?php echo $item['quantity']; ?></td>
                            <td>Rp <?php echo number_format($item['total_price'], 0, ',', '.'); ?></td>
                        </tr>
                        <?php $total_price += $item['total_price']; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="total">
                <p>Total Bayar: Rp <?php echo number_format($total_price, 0, ',', '.'); ?></p>
                <form action="checkout.php" method="POST">
                    <button type="submit" class="btn">Lanjutkan ke Pembayaran</button>
                </form>
            </div>
        <?php endif; ?>
    </div>

    <script src="../tabs.js"></script>
</body>
</html>
