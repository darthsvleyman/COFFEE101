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
        <h2 class="box">Biz Kimiz?</h2>
        <div class="content-box">
            <p>Biz kahve tutkusunu paylaşan bir ekibiz. Amacımız, kahve dünyasının derinliklerini keşfetmek ve bu zengin kültürü herkesle paylaşmaktır. Kahve çeşitliliği, demleme yöntemleri ve kahve tarihi hakkında bilgi edinmek isteyenler için COFFEE101 platformunu oluşturduk.</p>
        </div>
    
        <h2 class="box">İletişim Bilgilerimiz</h2>
        <div class="content-box">
            <p><strong>Telefon:</strong> 053... (Müşteri Hizmetleri)</p>
            <p><strong>E-posta:</strong> info@coffee101.com</p>
            <p><strong>Adres:</strong> Coffee101 Merkezi, Kahve Sokak No:10, İstanbul</p>
            <p><a href="anket.php" style="color: white; text-decoration: underline;">Anketimizi doldurmak için buraya tıklayın.</a></p>
        </div>
    </section>
    

    <footer>
        <p>© 2024 COFFEE101</p>
    </footer>
</body>
</html>