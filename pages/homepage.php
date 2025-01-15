<?php include('../includes/header.php'); ?>

<section id="landing">
    <div>
        <h1>Cepat Tiba, Hangat Terjaga!</h1>
        <p>Pesan makanan favorit Anda sekarang dan nikmati layanan pengiriman yang cepat!</p>
        <div>
            <a class="btn" href="../pages/login.php">Pesan</a>
        </div>
    </div>
    <div>
        <img src="../images/promofo.jpg" alt="Landing Image">
    </div>
</section>

<section id="about-us">
    <div>
        <h1>About Us</h1>
        <p>Selamat datang di SavePlate, tempat di mana Anda dapat menikmati hidangan lezat dari restoran-restoran terbaik di kota. Kami hadir untuk memberikan solusi praktis bagi Anda yang ingin menikmati makanan favorit tanpa keluar rumah. Dengan bekerja sama dengan berbagai restoran terkenal, kami menawarkan berbagai menu, mulai dari makanan ringan hingga hidangan berat, siap diantar langsung ke pintu rumah Anda</p>
        <p>Kami hadir untuk memastikan setiap hidangan yang Anda pesan tiba dengan cepat dan hangat terjaga, memberikan kepuasan maksimal. Dengan harga yang terjangkau dan pelayanan yang cepat, kami bertekad untuk terus memberikan pengalaman menyenangkan bagi setiap pelanggan. Terima kasih telah mempercayakan kami untuk menemani momen santap Anda.</p>
    </div>
</section>

<section id="goals">
    <div class="goals-header">
        <h1>Our Goals</h1> 
    </div>
    <div class="goals-list">
        <div class="goals-item">
            <h2>Kemudahan Akses Makanan</h2>
            <p>
                Memudahkan pelanggan menikmati makanan favorit tanpa keluar rumah.
            </p>
        </div>
        <div class="goals-item">
            <h2>Menyediakan Harga yang Kompetitif</h2>
            <p>
                Menawarkan harga yang terjangkau tanpa mengurangi kualitas makanan. 
            </p>
        </div>
    </div>
</section>

<section id="our-values">
    <h1>Our Values</h1>
    <div class="values-container">
        <div class="value-card">
            <div class="icon">
                <img src="../images/environmentalism.png" alt="Environment Icon">
            </div>
            <h2>Integrity</h2>
        </div>
        <div class="value-card">
            <div class="icon">
                <img src="../images/idea.png" alt="Innovation Icon">
            </div>
            <h2>Quality</h2>
        </div>
        <div class="value-card">
            <div class="icon">
                <img src="../images/influencer.png" alt="Social Icon">
            </div>
            <h2>Efficiency</h2>
        </div>
    </div>
</section>

<section id="service">
    <div class="service-header">
        <h1>Mitra yang Telah Bergabung</h1>
    </div>
    <div class="logo-container">
        <div class="logo-slide">
            <img src="https://i.pinimg.com/736x/e2/c1/08/e2c1080746b1314e2bf5edfbda79dbce.jpg" alt="Mitra 1">
            <img src="https://i.pinimg.com/736x/fc/39/fc/fc39fcad149b7149317c4ae616673eda.jpg" alt="Mitra 2">
            <img src="https://i.pinimg.com/736x/a5/46/15/a546154e3cef9763742c87152b188e4f.jpg" alt="Mitra 3">
            <img src="https://i.pinimg.com/736x/29/5a/9d/295a9d6507ac6c1a134cae2b7f873c02.jpg" alt="Mitra 4">
            <img src="https://i.pinimg.com/736x/3f/aa/b0/3faab01617407ec23d3e400cda84216f.jpg" alt="Mitra 5">
            <img src="https://i.pinimg.com/736x/ea/3e/ce/ea3ecece4b2fd90648b80180513c76e7.jpg" alt="Mitra 6">
        </div>
    </div>

    <script>
        // Script untuk memastikan animasi berjalan mulus
        const logoSlide = document.querySelector('.logo-slide');
            
        // Clone logo-logo untuk infinite scroll yang mulus
        logoSlide.innerHTML += logoSlide.innerHTML;
            
        // Optional: Tambahkan kontrol kecepatan
        function setSpeed(speed) {
            logoSlide.style.animationDuration = speed + 's';
        }
    </script>
</section>

<section id="contact">
    <h1>Contact Us</h1>
    <div class="contact-detail">
        <form action="">
            <h1>Tell us your problem</h1>
            <div class="form-group">
                <div id="input-name" class="input-group">
                    <label for="">Name</label>
                    <input type="text" placeholder="Your Name">
                </div>
                <div id="input-subject" class="input-group">
                    <label for="">Subject</label>
                    <input type="text" placeholder="Your Subject">
                </div>
                <div id="input-email" class="input-group">
                    <label for="">Email</label>
                    <input type="email" placeholder="Your Email">
                </div>
                <div id="input-phone" class="input-group">
                    <label for="">Phone Number</label>
                    <input type="tel" placeholder="Your Phone Number">
                </div>
                <div id="input-message" class="input-group">
                    <label for="">Message</label>
                    <input type="text" placeholder="Your Message">
                </div>
            </div>
            <button class="btn"><a href="login.php">Login Terlebih Dahulu</a></button>
        </form>
        
        <div id="location">
            <h1>Our Location</h1>
            <!-- Menambahkan iframe untuk menampilkan peta -->
            <div class="map-container">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.284862312026!2d106.998501473877!3d-6.22612226097398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698c71cf814d97%3A0xd22a5d56809f070a!2sSummarecon%20Mall%20Bekasi!5e0!3m2!1sid!2sid!4v1736659261566!5m2!1sid!2sid" 
                    width="100%" 
                    height="450" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</section>


<?php include('../includes/footer.php'); ?>
