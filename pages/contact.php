<?php include('../includes/header.php'); ?>
<?php
include('../db.php');

// Memastikan data diterima dari form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mengambil dan membersihkan data dari form untuk menghindari XSS dan masalah lainnya
    $name = htmlspecialchars(trim($_POST['name']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Menyimpan data ke database menggunakan prepared statements
    $sql = "INSERT INTO contacts (name, subject, email, phone, message) 
            VALUES (?, ?, ?, ?, ?)";

    if ($stmt = $conn->prepare($sql)) {
        // Bind parameters dan eksekusi query
        $stmt->bind_param("sssss", $name, $subject, $email, $phone, $message);
        if ($stmt->execute()) {
            echo "<script>alert('Your message has been sent successfully!');</script>";
        } else {
            echo "<script>alert('Error: " . $stmt->error . "');</script>";
        }
        // Menutup statement
        $stmt->close();
    } else {
        echo "<script>alert('Error: Unable to prepare the statement.');</script>";
    }

    // Menutup koneksi
    $conn->close();
}
?>

<form action="contact.php" method="POST">
    <h1>Tell us your problem</h1>
    <div class="form-group">
        <div id="input-name" class="input-group">
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Your Name" required>
        </div>
        <div id="input-subject" class="input-group">
            <label for="subject">Subject</label>
            <input type="text" name="subject" placeholder="Your Subject" required>
        </div>
        <div id="input-email" class="input-group">
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Your Email" required>
        </div>
        <div id="input-phone" class="input-group">
            <label for="phone">Phone Number</label>
            <input type="tel" name="phone" placeholder="Your Phone Number" required>
        </div>
        <div id="input-message" class="input-group">
            <label for="message">Message</label>
            <textarea name="message" placeholder="Your Message" required></textarea>
        </div>
    </div>
    <button class="btn" type="submit">Submit</button>
</form>

<?php include('../includes/footer.php'); ?>
