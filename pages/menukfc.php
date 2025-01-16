<?php include('../includes/headerMenu.php'); ?>

<main>
    <section class="product-details">
        <h2>Detail Produk</h2>
        <a href="restoranmakananberat.php" class="back-button">← Kembali ke Menu</a>

        <!-- Form untuk Nasi Padang -->
        <form action="../pages/keranjang.php" method="POST">
            <div class="product">
                <div class="product-image">
                    <img src="../images/menukfc1.png" alt="KFC">
                </div>
                <div class="product-info">
                    <h3>KFC Bucket</h3>
                    <p>Berisi 6 ayam, 3 nasi, 3 soup dan 3 minuman</p>
                    <p class="price">Rp. 155.000,00</p>
                    <div class="product-actions">
                        <button type="button" class="btn-quantity" onclick="decreaseQuantity('1')">-</button>
                        <input type="number" id="quantity1" name="quantity" value="1" min="1">
                        <button type="button" class="btn-quantity" onclick="increaseQuantity('1')">+</button>
                        <!-- Input tersembunyi untuk nama item dan harga -->
                        <input type="hidden" name="item_name" value="KFC">
                        <input type="hidden" name="item_price" value="155000">
                        <button type="submit" name="add_to_cart" class="add-to-cart">🛒 Tambahkan ke Keranjang</button>
                    </div>
                </div>
            </div>
        </form>

        <!-- Form untuk Nasi Padang -->
        <form action="../pages/keranjang.php" method="POST">
            <div class="product">
                <div class="product-image">
                    <img src="../images/menukfc2.png" alt="KFC">
                </div>
                <div class="product-info">
                    <h3>KFC Bucket</h3>
                    <p>Berisi 9 ayam, 2 kentang, dan 2 minuman</p>
                    <p class="price">Rp. 190.000,00</p>
                    <div class="product-actions">
                        <button type="button" class="btn-quantity" onclick="decreaseQuantity('2')">-</button>
                        <input type="number" id="quantity2" name="quantity" value="1" min="1">
                        <button type="button" class="btn-quantity" onclick="increaseQuantity('2')">+</button>
                        <!-- Input tersembunyi untuk nama item dan harga -->
                        <input type="hidden" name="item_name" value="KFC">
                        <input type="hidden" name="item_price" value="190000">
                        <button type="submit" name="add_to_cart" class="add-to-cart">🛒 Tambahkan ke Keranjang</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
</main>

<script>
// Fungsi untuk meningkatkan jumlah
function increaseQuantity(id) {
    let quantityInput = document.getElementById('quantity' + id);
    quantityInput.value = parseInt(quantityInput.value) + 0;
}

// Fungsi untuk mengurangi jumlah
function decreaseQuantity(id) {
    let quantityInput = document.getElementById('quantity' + id);
    if (quantityInput.value > 1) {
        quantityInput.value = parseInt(quantityInput.value) - 1;
    }
}
</script>

</body>
</html>
