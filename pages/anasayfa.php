<?php
session_start();
$isLoggedIn = isset($_SESSION['email']);
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COFFEE101 - Kahve Hakkında Her Şey</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1><a href="anasayfa.php" style="color: white; text-decoration: none;">COFFEE101</a></h1>
        <p>Kahve hakkında her şey...</p>
    </header>    
    
    <nav>
        <ul>
            <li><a href="anasayfa.php">Anasayfa</a></li>
            <li><a href="101.php">Kahve101</a></li>
            <li><a href="cekirdekvedemleme.php">Çekirdek ve Demleme Türleri</a></li>
            <li><a href="uretimvetuketim.php">Kahve Üretimi ve Tüketimi</a></li>
            <li><a href="tarih.php">Kahvenin Tarihi</a></li>
            <li><a href="hakkimizda.php">Hakkımızda</a></li>
            <?php if ($isLoggedIn): ?>
                <li><a href="logout.php">Çıkış Yap</a></li>
            <?php else: ?>
                <li><a href="login.php">Giriş Yap</a></li>
            <?php endif; ?>
        </ul>
    </nav>

    <section>
        <h2 class="box">Coffee101'e Hoşgeldiniz!</h2><br>
        <p class="content-box" style="text-align: center; display: inline-block;">Zengin kahve dünyasını keşfetmeye hazır olun.</p><br>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7BoyNnRSQetGlJc3qif1Y_VQXUCGQyfjJFA&s" alt="Coffee Image"><br>

        <a href="test.php" style="color: #6f4e37; font-weight: bolder;">Kahve bilginizi test etmek ister misiniz?<br>Buraya tıklayın.</a>
    </section>

    <footer>
        <p>© 2024 COFFEE101</p>
    </footer>
</body>
</html>
