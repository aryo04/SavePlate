<?php include('../includes/headerlogin.php'); ?>

    <section id="landing">
        <div>
            <h1>SAVE MEALS</h1>
            <h1>SAVE MONEY</h1>
            <h1>SAVE EARTH</h1>
            <p>Selamatkan makanan berlebih dengan beli dari restoran favoritmu dengan diskon 50%, tanpa syarat!</p>
            <div>
                <a class="btn" href="#contact">Contact Us</a>
            </div>
        </div>
        <div>
            <img src="../images/savefood.jpeg" alt="Landing Image">
        </div>
    </section>
    <section id="about-us">
        <div>
            <h1>About Us</h1>
            <p>Indonesia merupakan salah satu penyumbang sampah makanan terbesar di dunia. Kesadaran ini berawal dari banyaknya makanan berlebih yang masih layak konsumsi, tetapi berakhir di tempat sampah telah mendorong kami untuk bertindak.</p>
            <p>Oleh karena itu, kami hadir sebagai agen perubahan. Melalui website SavePlate, kami menjembatani restoran, warung, dan pembeli yang peduli terhadap lingkungan.            </p>
            <p>Bersama, kita dapat mengurangi limbah makanan, membantu mereka yang membutuhkan, dan memberi makna baru pada makanan yang sering dianggap remeh. Setiap pembelian bukan hanya sekadar mengisi perut, tetapi juga menjadi langkah nyata dalam upaya menyelamatkan bumi kita dengan mengurangi <b>food waste.  </b></p>
            </div>
        </div>
    </section>
    <section id="goals">
        <div class="goals-header">
            <h1>Our Goals</h1> 
        </div>
        <div class="goals-list">
            <div class="goals-item">
                <h2>Mengurangi food waste</h2>
                <p>
                    Menyelamatkan makanan layak konsumsi untuk mengurangi limbah.
                </p>
            </div>
            <div class="goals-item">
                <h2>Edukasi dan kesadaran</h2>
                <p>
                    Menciptakan kesadaran tentang pentingnya pengelolaan makanan secara bijak.
                </p>
            </div>
            <div class="goals-item">
                <h2>Solusi ramah lingkungan</h2>
                <p>
                    Menyediakan solusi bagi restoran dan konsumen untuk mengurangi sampah makanan.
                </p>
            </div>
            <div class="goals-item">
                <h2>Harga terjangkau</h2>
                <p>
                    Memberikan akses makanan berlebih dengan harga terjangkau dan ramah lingkungan.
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
                <h2>Eco-Awareness</h2>
            </div>
            <div class="value-card">
                <div class="icon">
                    <img src="../images/idea.png" alt="Innovation Icon">
                </div>
                <h2>Innovation</h2>
            </div>
            <div class="value-card">
                <div class="icon">
                    <img src="../images/influencer.png" alt="Social Icon">
                </div>
                <h2>Social Impact</h2>
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
                <button class="btn">Submit</button>
            </form>
            <div>
                <h1>Our Location</h1>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.284862312026!2d106.998501473877!3d-6.22612226097398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698c71cf814d97%3A0xd22a5d56809f070a!2sSummarecon%20Mall%20Bekasi!5e0!3m2!1sid!2sid!4v1736659261566!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

<?php include('../includes/footer.php'); ?>

