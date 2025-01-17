<?php
include '../database/db_connect.php';

$message = "";
$toastClass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT password FROM userdata WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($db_password);
        $stmt->fetch();

        if ($password === $db_password) {
            $message = "Login successful";
            $toastClass = "bg-success";
            session_start();
            $_SESSION['email'] = $email;
            header("Location: anasayfa.php");
            exit();
        } else {
            $message = "Incorrect password";
            $toastClass = "bg-danger";
        }
    } else {
        $message = "Email not found";
        $toastClass = "bg-warning";
    }

    $stmt->close();
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COFFEE101 - Giriş Yap</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1><a href="anasayfa.php" style="color: white; text-decoration: none;">COFFEE101</a></h1>
        <p>Kahve hakkında her şey...</p>
    </header>

    
    <section>
        <h2 class="box">Hesabınıza Giriş Yapın</h2>
        <form action="" method="POST" style="max-width: 300px; margin: auto; background-color: #d2691e; padding: 50px; border-radius: 8px; color: white;">
            <div>
                <label for="email">E-posta:</label>
                <input type="email" id="email" name="email" class="form-control" style="width: 100%; padding: 10px; margin-top: 10px; border-radius: 5px; border: 1px solid #ccc;">
            </div>
            <div style="margin-top: 15px;">
                <label for="password">Şifre:</label>
                <input type="password" id="password" name="password" class="form-control" style="width: 100%; padding: 10px; margin-top: 10px; border-radius: 5px; border: 1px solid #ccc;">
            </div>
            <div style="margin-top: 20px; text-align: center;">
                <button type="submit" style="background-color: #6f4e37; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Giriş Yap</button>
            </div>
            <div style="margin-top: 15px; text-align: center;">
                <a href="./register.php" style="color: white;">Hesap Oluştur</a> | 
                <a href="./resetpassword.php" style="color: white;">Şifremi Unuttum</a>
            </div>
        </form>
    </section>

    <footer>
        <p>© 2024 COFFEE101</p>
    </footer>
</body>
</html>

