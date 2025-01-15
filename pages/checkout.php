<?php
session_start();

// Memeriksa apakah keranjang sudah ada
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Menambahkan item ke keranjang
if (isset($_POST['add_to_cart'])) {
    $item_name = $_POST['item_name'];
    $item_price = $_POST['item_price'];
    $quantity = $_POST['quantity'];

    // Cek apakah item sudah ada di keranjang
    $item_exists = false;
    foreach ($_SESSION['cart'] as &$item) {
        if ($item['item_name'] == $item_name) {
            $item['quantity'] += $quantity;
            $item_exists = true;
            break;
        }
    }
    if (!$item_exists) {
        $_SESSION['cart'][] = [
            'item_name' => $item_name,
            'item_price' => $item_price,
            'quantity' => $quantity
        ];
    }

    header("Location: keranjang.php");
    exit;
}

// Menghapus item dari keranjang
if (isset($_GET['remove'])) {
    $remove_index = $_GET['remove'];
    unset($_SESSION['cart'][$remove_index]);
    $_SESSION['cart'] = array_values($_SESSION['cart']);
    header("Location: keranjang.php");
    exit;
}

// Halaman checkout.php
if (basename($_SERVER['PHP_SELF']) == 'checkout.php') {
    if (empty($_SESSION['cart'])) {
        header("Location: keranjang.php");
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];

        $_SESSION['order'] = [
            'name' => $name,
            'address' => $address,
            'phone' => $phone,
            'cart' => $_SESSION['cart'],
            'total_price' => array_sum(array_map(function ($item) {
                return $item['item_price'] * $item['quantity'];
            }, $_SESSION['cart']))
        ];

        unset($_SESSION['cart']);
        header("Location: order_confirmation.php");
        exit;
    }
}

// Halaman order_confirmation.php
if (basename($_SERVER['PHP_SELF']) == 'order_confirmation.php') {
    if (!isset($_SESSION['order'])) {
        header("Location: keranjang.php");
        exit;
    }
    $order = $_SESSION['order'];
    echo "<h1>Terima Kasih, " . htmlspecialchars($order['name']) . "!</h1>";
    echo "<p>Alamat Pengiriman: " . htmlspecialchars($order['address']) . "</p>";
    echo "<p>Nomor Telepon: " . htmlspecialchars($order['phone']) . "</p>";
    echo "<h2>Ringkasan Pesanan</h2>";
    foreach ($order['cart'] as $item) {
        echo "<p>{$item['item_name']} x {$item['quantity']} - Rp. " . number_format($item['item_price'] * $item['quantity'], 0, ',', '.') . "</p>";
    }
    echo "<p>Total: Rp. " . number_format($order['total_price'], 0, ',', '.') . "</p>";
    unset($_SESSION['order']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="../css/styleCo.css">
</head>
<body>
    <?php include('../includes/headerMenu.php'); ?>

    <main>
        <section class="checkout">
            <form action="checkout.php" method="POST">
                <h3>Informasi Pengiriman</h3>
                <label for="name">Nama Lengkap</label>
                <input type="text" id="name" name="name" required>

                <label for="address">Alamat Pengiriman</label>
                <textarea id="address" name="address" required></textarea>

                <label for="phone">Nomor Telepon</label>
                <input type="tel" id="phone" name="phone" required>

                <button type="submit" class="checkout-button">Konfirmasi Pembayaran</button>
            </form>
        </section>
    </main>
</body>
</html>