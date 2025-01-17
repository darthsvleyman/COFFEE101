<?php
include '../database/db_connect.php';

$message = "";
$toastClass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    if ($password === $confirmPassword) {
        $stmt = $conn->prepare("UPDATE userdata SET password = ? WHERE email = ?");
        $stmt->bind_param("ss", $password, $email);

        if ($stmt->execute()) {
            $message = "Password updated successfully";
            $toastClass = "bg-success";
        } else {
            $message = "Error updating password";
            $toastClass = "bg-danger";
        }

        $stmt->close();
    } else {
        $message = "Passwords do not match";
        $toastClass = "bg-warning";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COFFEE101 - Şifre Sıfırla</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <h1><a href="anasayfa.php" style="color: white; text-decoration: none;">COFFEE101</a></h1>
        <p>Kahve hakkında her şey...</p>
    </header>


    <section>
        <h2 class="box">Şifrenizi Sıfırlayın</h2>
        <form action="" method="post" style="max-width: 300px; margin: auto; background-color: #d2691e; padding: 50px; border-radius: 8px; color: white;">
            <div style="margin-bottom: 15px; position: relative;">
                <label for="email">E-posta:</label>
                <input type="email" id="email" name="email" class="form-control" style="width: 100%; padding: 10px; margin-top: 5px; border-radius: 5px; border: 1px solid #ccc;" required>
                <span id="email-check" class="position-absolute" style="right: 10px; top: 50%; transform: translateY(-50%);"></span>
            </div>
            <div style="margin-bottom: 15px;">
                <label for="password">Yeni Şifre:</label>
                <input type="password" id="password" name="password" class="form-control" style="width: 100%; padding: 10px; margin-top: 5px; border-radius: 5px; border: 1px solid #ccc;" required>
            </div>
            <div style="margin-bottom: 20px;">
                <label for="confirm_password">Yeni Şifre (Tekrar):</label>
                <input type="password" id="confirm_password" name="confirm_password" class="form-control" style="width: 100%; padding: 10px; margin-top: 5px; border-radius: 5px; border: 1px solid #ccc;" required>
            </div>
            <div style="text-align: center;">
                <button type="submit" style="background-color: #6f4e37; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; font-weight: bold;">Şifre Sıfırla</button>
            </div>
            <div style="margin-top: 15px; text-align: center;">
                <p>Hesabınız yok mu? <a href="./register.php" style="color: white; text-decoration: underline;">Kayıt Ol</a> | <a href="./login.php" style="color: white; text-decoration: underline;">Giriş Yap</a></p>
            </div>
        </form>
    </section>

    <footer>
        <p>© 2024 COFFEE101</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#email').on('blur', function () {
                var email = $(this).val();
                if (email) {
                    $.ajax({
                        url: 'check_email.php',
                        type: 'POST',
                        data: { email: email },
                        success: function (response) {
                            if (response === 'exists') {
                                $('#email-check').html('<i class="fa fa-check text-success"></i>');
                            } else {
                                $('#email-check').html('<i class="fa fa-times text-danger"></i>');
                            }
                        }
                    });
                } else {
                    $('#email-check').html('');
                }
            });
        });
    </script>
</body>

</html>
