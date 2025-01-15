<?php include('../includes/headerMenu.php'); ?>
    <main>
        <section class="product-details">
            <h2>Detail Produk</h2>
            <a href="restoranmakannaberat.php" class="back-button">← Kembali ke Menu</a>

            <div class="product">
                <div class="product-image">
                    <img src="../images/nasipadang.png" alt="Nasi Padang">
                </div>
                <div class="product-info">
                    <h3>Nasi Padang</h3>
                    <p>Nasi Padang dengan Gulai Tunjang, Daun Singkong, Sambal</p>
                    <p class="price">Rp. 35.000,00</p>
                    <div class="product-actions">
                        <button class="btn-quantity" onclick="decreaseQuantity()">-</button>
                        <input type="number" id="quantity" value="1" min="1">
                        <button class="btn-quantity" onclick="increaseQuantity()">+</button>
                        <button class="add-to-cart">🛒 Tambahkan ke Keranjang</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="product-details">    
            <div class="product">
                <div class="product-image">
                    <img src="../images/nasiuduk.png" alt="Nasi Uduk">
                </div>
                <div class="product-info">
                    <h3>Nasi Uduk</h3>
                    <p>Nasi Uduk dengan Telur & Kentang Balado, Orek Tempe, Bihun</p>
                    <p class="price">Rp. 15.000,00</p>
                    <div class="product-actions">
                        <button class="btn-quantity" onclick="decreaseQuantity()">-</button>
                        <input type="number" id="quantity" value="1" min="1">
                        <button class="btn-quantity" onclick="increaseQuantity()">+</button>
                        <button class="add-to-cart">🛒 Tambahkan ke Keranjang</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php include('../includes/footer.php'); ?>
