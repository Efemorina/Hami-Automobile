<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // mail() fonksiyonu ile e-posta gönder
    $to = "your-email@example.com"; // Burayı kendi e-posta adresinizle değiştirin
    $headers = "From: $email";
    mail($to, $subject, $message, $headers);
    echo "Mesaj gönderildi!";
}
?>