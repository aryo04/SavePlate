<?php include('../includes/headerMenu.php'); ?>

<main>
    <section class="product-details">
        <h2>Detail Produk</h2>
        <a href="restorancamilan.php" class="back-button">← Kembali ke Menu</a>

        <!-- Form untuk Oden -->
        <form action="../pages/keranjang.php" method="POST">
            <div class="product">
                <div class="product-image">
                    <img src="../images/XXLChickenShihlin.png" alt="Oden Lawson">
                </div>
                <div class="product-info">
                    <h3>XXL Crispy Chicken</h3>
                    <p>XXL Crispy Chicken Spicy Level & Varian Flavour</p>
                    <p class="price">Rp. 48.000,00</p>
                    <div class="product-actions">
                        <button type="button" class="btn-quantity" onclick="decreaseQuantity('1')">-</button>
                        <input type="number" id="quantity1" name="quantity" value="1" min="1">
                        <button type="button" class="btn-quantity" onclick="increaseQuantity('1')">+</button>
                        <!-- Input tersembunyi untuk nama item dan harga -->
                        <input type="hidden" name="item_name" value="XXL Crispy Chicken">
                        <input type="hidden" name="item_price" value="48000">
                        <button type="submit" name="add_to_cart" class="add-to-cart">🛒 Tambahkan ke Keranjang</button>
                    </div>
                </div>
            </div>
        </form>

        <!-- Form untuk Nasi Uduk -->
        <form action="../pages/keranjang.php" method="POST">
            <div class="product">
                <div class="product-image">
                    <img src="../images/DoubleShihlin.png" alt="Double Snack 1">
                </div>
                <div class="product-info">
                    <h3>Double Snack 1</h3>
                    <p>2 XXL</p>
                    <p class="price">Rp. 91.000,00</p>
                    <div class="product-actions">
                        <button type="button" class="btn-quantity" onclick="decreaseQuantity('2')">-</button>
                        <input type="number" id="quantity2" name="quantity" value="1" min="1">
                        <button type="button" class="btn-quantity" onclick="increaseQuantity('2')">+</button>
                        <!-- Input tersembunyi untuk nama item dan harga -->
                        <input type="hidden" name="item_name" value="Double Snack 1">
                        <input type="hidden" name="item_price" value="91000">
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
