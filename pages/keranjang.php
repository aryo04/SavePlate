<?php
session_start();

// Mengimpor koneksi ke database
include('../db.php'); // Pastikan path menuju db.php benar

// Menambahkan item ke keranjang
if (isset($_POST['add_to_cart'])) {
    $item_name = $_POST['item_name'];
    $item_price = $_POST['item_price'];
    $quantity = $_POST['quantity'];
    $user_id = 1; // Gantilah dengan ID pengguna yang sesungguhnya

    // Insert data item ke keranjang
    $sql = "INSERT INTO cart (user_id, item_name, item_price, quantity) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$user_id, $item_name, $item_price, $quantity]);
}

// Menghapus item dari keranjang
if (isset($_GET['remove'])) {
    $cart_id = $_GET['remove'];

    // Menghapus item berdasarkan ID
    $sql = "DELETE FROM cart WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$cart_id]);
}

// Menampilkan keranjang
$user_id = 1; // Gantilah dengan ID pengguna yang sesungguhnya
$sql = "SELECT * FROM cart WHERE user_id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$user_id]);
$cart_items = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Menghitung total harga
$total_price = 0;
foreach ($cart_items as $item) {
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
            
            <?php if (empty($cart_items)): ?>
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
                        <?php foreach ($cart_items as $item): ?>
                        <tr>
                            <td><?php echo $item['item_name']; ?></td>
                            <td>Rp. <?php echo number_format($item['item_price'], 0, ',', '.'); ?></td>
                            <td><?php echo $item['quantity']; ?></td>
                            <td>Rp. <?php echo number_format($item['item_price'] * $item['quantity'], 0, ',', '.'); ?></td>
                            <td><a href="?remove=<?php echo $item['id']; ?>" class="remove-item">Hapus</a></td>
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

    <script src="../script.js"></script>
</body>
</html>
