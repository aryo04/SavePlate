<?php
session_start();

// Memeriksa apakah keranjang belanja kosong
if (!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0) {
    header("Location: keranjang.php"); // Jika kosong, arahkan kembali ke halaman keranjang
    exit;
}

// Jika form checkout disubmit, simpan data ke database atau kirim email konfirmasi
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $total_price = $_POST['total_price'];

    // Proses data pesanan, bisa menyimpannya ke database atau mengirim email
    // Sebagai contoh, kita akan mengarahkan pengguna ke halaman konfirmasi
    $_SESSION['order'] = [
        'name' => $name,
        'address' => $address,
        'phone' => $phone,
        'total_price' => $total_price,
        'cart' => $_SESSION['cart']
    ];

    // Mengosongkan keranjang setelah pesanan diproses
    unset($_SESSION['cart']);

    // Arahkan ke halaman konfirmasi
    header("Location: order_confirmation.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <?php include('../includes/headerMenu.php'); ?>

    <main>
        <section class="checkout">
            <h2>Checkout</h2>
            <form action="checkout.php" method="POST">
                <div class="checkout-details">
                    <h3>Informasi Pengiriman</h3>
                    <label for="name">Nama Lengkap</label>
                    <input type="text" id="name" name="name" required>

                    <label for="address">Alamat Pengiriman</label>
                    <textarea id="address" name="address" required></textarea>

                    <label for="phone">Nomor Telepon</label>
                    <input type="tel" id="phone" name="phone" required>

                    <input type="hidden" name="total_price" value="<?php echo isset($total_price) ? $total_price : 0; ?>">

                    <button type="submit" class="checkout-button">Konfirmasi Pembayaran</button>
                </div>
            </form>

            <div class="order-summary">
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
                        foreach ($_SESSION['cart'] as $item):
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
                <div class="cart-summary">
                    <p>Total Belanja: Rp. <?php echo number_format($total_price, 0, ',', '.'); ?></p>
                </div>
            </div>
        </section>
    </main>

    <script src="../script.js"></script>
</body>
</html>
