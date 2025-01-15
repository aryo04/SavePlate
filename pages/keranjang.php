<?php
session_start();

// Inisialisasi keranjang jika belum ada
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Tambahkan item ke keranjang
if (isset($_POST['add_to_cart'])) {
    $item_name = $_POST['item_name'];
    $item_price = $_POST['item_price'];
    $quantity = $_POST['quantity'];

    $item_exists = false;

    // Periksa jika item sudah ada
    foreach ($_SESSION['cart'] as &$item) {
        if ($item['item_name'] === $item_name) {
            $item['quantity'] += $quantity;
            $item_exists = true;
            break;
        }
    }

    // Jika item belum ada, tambahkan baru
    if (!$item_exists) {
        $_SESSION['cart'][] = [
            'item_name' => $item_name,
            'item_price' => $item_price,
            'quantity' => $quantity,
        ];
    }

    header("Location: keranjang.php");
    exit;
}

// Hapus item dari keranjang
if (isset($_GET['remove'])) {
    $item_index = $_GET['remove'];
    if (isset($_SESSION['cart'][$item_index])) {
        unset($_SESSION['cart'][$item_index]);
        $_SESSION['cart'] = array_values($_SESSION['cart']); // Reindex array
    }
    header("Location: keranjang.php");
    exit;
}

// Hitung total harga
$total_price = 0;
foreach ($_SESSION['cart'] as $item) {
    $total_price += $item['item_price'] * $item['quantity'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja</title>
    <link rel="stylesheet" href="../css/styleKeranjang.css">
</head>
<body>
    <?php include('../includes/headerMenu.php'); ?>

    <main>
        <section class="cart">
            <h2>Keranjang Belanja</h2>
            
            <?php if (empty($_SESSION['cart'])): ?>
                <p>Keranjang Anda kosong.</p>
            <?php else: ?>
                <table class="cart-table">
                    <thead>
                        <tr>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Total</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($_SESSION['cart'] as $index => $item): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($item['item_name']); ?></td>
                            <td>Rp. <?php echo number_format($item['item_price'], 0, ',', '.'); ?></td>
                            <td><?php echo $item['quantity']; ?></td>
                            <td>Rp. <?php echo number_format($item['item_price'] * $item['quantity'], 0, ',', '.'); ?></td>
                            <td><a href="?remove=<?php echo $index; ?>" class="remove-item">Hapus</a></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="cart-summary">
                    <p>Total Belanja: Rp. <?php echo number_format($total_price, 0, ',', '.'); ?></p>
                    <a href="../pages/checkout.php" class="checkout-button">Lanjutkan ke Pembayaran</a>
                </div>
            <?php endif; ?>
        </section>
    </main>
</body>
</html>
