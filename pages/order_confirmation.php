<?php
session_start();

// Memeriksa apakah ada pesanan yang telah diproses
if (!isset($_SESSION['order'])) {
    header("Location: keranjang.php"); // Jika tidak ada pesanan, arahkan kembali ke keranjang
    exit;
}

$order = $_SESSION['order'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pesanan</title>
    <link rel="stylesheet" href="../css/styleOrder.css">
</head>
<body>
    <?php include('../includes/headerMenu.php'); ?>

    <main>
        <section class="order-confirmation">
            <h2>Konfirmasi Pesanan</h2>
            <p>Terima kasih, <strong><?php echo $order['name']; ?></strong>, pesanan Anda telah diterima!</p>

            <h3>Detail Pengiriman</h3>
            <p>Alamat: <?php echo $order['address']; ?></p>
            <p>Telepon: <?php echo $order['phone']; ?></p>

            <h3>Ringkasan Pesanan</h3>
            <table class="cart-table">
                <thead>
                    <tr>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $total_price = 0;
                    foreach ($order['cart'] as $item):
                        $total_price += $item['item_price'] * $item['quantity'];
                    ?>
                    <tr>
                        <td><?php echo $item['item_name']; ?></td>
                        <td>Rp. <?php echo number_format($item['item_price'], 0, ',', '.'); ?></td>
                        <td><?php echo $item['quantity']; ?></td>
                        <td>Rp. <?php echo number_format($item['item_price'] * $item['quantity'], 0, ',', '.'); ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <div class="order-total">
                <p>Total Pembayaran: Rp. <?php echo number_format($total_price, 0, ',', '.'); ?></p>
            </div>

            <p>Untuk pembayaran dilakukan hanya ditempat saat driver sudah mengantarkan pesanannya!</p>
        </section>
    </main>

    <script src="../script.js"></script>
</body>
</html>
