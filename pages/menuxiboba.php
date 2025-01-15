<?php include('../includes/headerMenu.php'); ?>

<main>
    <section class="product-details">
        <h2>Detail Produk</h2>
        <a href="restoranminuman.php" class="back-button">← Kembali ke Menu</a>

        <!-- Form untuk Nasi Padang -->
        <form action="../pages/keranjang.php" method="POST">
            <div class="product">
                <div class="product-image">
                    <img src="../images/brwnsgrmilk.png" alt="Nasi Padang">
                </div>
                <div class="product-info">
                    <h3>Brown Sugar Boba Fresh Milk</h3>
                    <p>Minuman yang terbuat dari susu segar, boba, dan sirup gula merah.</p>
                    <p class="price">Rp. 19.000,00</p>
                    <div class="product-actions">
                        <button type="button" class="btn-quantity" onclick="decreaseQuantity('1')">-</button>
                        <input type="number" id="quantity1" name="quantity" value="1" min="1">
                        <button type="button" class="btn-quantity" onclick="increaseQuantity('1')">+</button>
                        <!-- Input tersembunyi untuk nama item dan harga -->
                        <input type="hidden" name="item_name" value="Brown Sugar Boba Fresh Milk">
                        <input type="hidden" name="item_price" value="19000">
                        <button type="submit" name="add_to_cart" class="add-to-cart">🛒 Tambahkan ke Keranjang</button>
                    </div>
                </div>
            </div>
        </form>

        <!-- Form untuk Nasi Uduk -->
        <form action="../pages/keranjang.php" method="POST">
            <div class="product">
                <div class="product-image">
                    <img src="../images/brwnsgrboba.png" alt="Nasi Uduk">
                </div>
                <div class="product-info">
                    <h3>Brown Sugar Boba Milk Tea</h3>
                    <p>Minuman yang terbuat dari susu segar, boba, gula aren, dan krim yang dibakar. </p>
                    <p class="price">Rp. 19.000,00</p>
                    <div class="product-actions">
                        <button type="button" class="btn-quantity" onclick="decreaseQuantity('2')">-</button>
                        <input type="number" id="quantity2" name="quantity" value="1" min="1">
                        <button type="button" class="btn-quantity" onclick="increaseQuantity('2')">+</button>
                        <!-- Input tersembunyi untuk nama item dan harga -->
                        <input type="hidden" name="item_name" value="Brown Sugar Boba Milk Tea">
                        <input type="hidden" name="item_price" value="19000">
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
