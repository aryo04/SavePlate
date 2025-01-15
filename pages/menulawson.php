<?php include('../includes/headerMenu.php'); ?>

<main>
    <section class="product-details">
        <h2>Detail Produk</h2>
        <a href="restorancamilan.php" class="back-button">← Kembali ke Menu</a>

        <!-- Form untuk Oden -->
        <form action="../pages/keranjang.php" method="POST">
            <div class="product">
                <div class="product-image">
                    <img src="../images/odenlawson.png" alt="Oden Lawson">
                </div>
                <div class="product-info">
                    <h3>Oden</h3>
                    <p>Mie khas Jepang yang terbuat dari tepung terigu dibentuk tebal dan kenyal</p>
                    <p class="price">Rp. 12.000,00</p>
                    <div class="product-actions">
                        <button type="button" class="btn-quantity" onclick="decreaseQuantity('1')">-</button>
                        <input type="number" id="quantity1" name="quantity" value="1" min="1">
                        <button type="button" class="btn-quantity" onclick="increaseQuantity('1')">+</button>
                        <!-- Input tersembunyi untuk nama item dan harga -->
                        <input type="hidden" name="item_name" value="Oden">
                        <input type="hidden" name="item_price" value="12000">
                        <button type="submit" name="add_to_cart" class="add-to-cart">🛒 Tambahkan ke Keranjang</button>
                    </div>
                </div>
            </div>
        </form>

        <!-- Form untuk Nasi Uduk -->
        <form action="../pages/keranjang.php" method="POST">
            <div class="product">
                <div class="product-image">
                    <img src="../images/TteokbokkiLawson.png" alt="Tteokbokki">
                </div>
                <div class="product-info">
                    <h3>Tteokbokki</h3>
                    <p>Kue Beras dengan Saus Gochujang</p>
                    <p class="price">Rp. 30.000,00</p>
                    <div class="product-actions">
                        <button type="button" class="btn-quantity" onclick="decreaseQuantity('2')">-</button>
                        <input type="number" id="quantity2" name="quantity" value="1" min="1">
                        <button type="button" class="btn-quantity" onclick="increaseQuantity('2')">+</button>
                        <!-- Input tersembunyi untuk nama item dan harga -->
                        <input type="hidden" name="item_name" value="Tteokbokki">
                        <input type="hidden" name="item_price" value="30000">
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
