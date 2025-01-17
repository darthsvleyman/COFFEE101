<?php
include '../database/db_connect.php';

$message = "";
$toastClass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $checkEmailStmt = $conn->prepare("SELECT email FROM userdata WHERE email = ?");
    $checkEmailStmt->bind_param("s", $email);
    $checkEmailStmt->execute();
    $checkEmailStmt->store_result();

    if ($checkEmailStmt->num_rows > 0) {
        $message = "Email ID already exists";
        $toastClass = "#007bff";
    } else {

        $stmt = $conn->prepare("INSERT INTO userdata (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $password);

        if ($stmt->execute()) {
            $message = "Account created successfully";
            $toastClass = "#28a745";
        } else {
            $message = "Error: " . $stmt->error;
            $toastClass = "#dc3545";
        }

        $stmt->close();
    }

    $checkEmailStmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COFFEE101 - Kayıt Ol</title>
    <link rel="stylesheet" href="styles.css"> 
</head>

<body>
    <header>
        <h1><a href="anasayfa.php" style="color: white; text-decoration: none;">COFFEE101</a></h1>
        <p>Kahve hakkında her şey...</p>
    </header>
    
    <section>
        <h2 class="box">Hesabınızı Oluşturun</h2>
        <form method="post" style="max-width: 400px; margin: auto; background-color: #d2691e; padding: 50px; border-radius: 8px; color: white;">
            <div style="margin-bottom: 15px;">
                <label for="username">Kullanıcı Adı:</label>
                <input type="text" id="username" name="username" class="form-control" style="width: 100%; padding: 10px; margin-top: 5px; border-radius: 5px; border: 1px solid #ccc;" required>
            </div>
            <div style="margin-bottom: 15px;">
                <label for="email">E-posta:</label>
                <input type="email" id="email" name="email" class="form-control" style="width: 100%; padding: 10px; margin-top: 5px; border-radius: 5px; border: 1px solid #ccc;" required>
            </div>
            <div style="margin-bottom: 20px;">
                <label for="password">Şifre:</label>
                <input type="password" id="password" name="password" class="form-control" style="width: 100%; padding: 10px; margin-top: 5px; border-radius: 5px; border: 1px solid #ccc;" required>
            </div>
            <div style="text-align: center;">
                <button type="submit" style="background-color: #6f4e37; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; font-weight: bold;">Kayıt Ol</button>
            </div>
            <div style="margin-top: 15px; text-align: center;">
                <p>Hesabınız var mı? <a href="./login.php" style="color: white; text-decoration: underline;">Giriş Yap</a></p>
            </div>
        </form>
    </section>

    <footer>
        <p>© 2024 COFFEE101</p>
    </footer>
</body>

</html>
