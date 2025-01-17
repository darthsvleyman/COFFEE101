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
        <h2 class="box">Bize Katkıda Bulunun</h2>
        <div class="content-box">
            <form>
                <label for="isimSoyisim">Adınızı ve Soyadınızı Girin:</label><br>
                <input type="text" id="isimSoyisim" name="isimSoyisim" placeholder="İsim Soyisim"><br><br>
    
                <label for="eposta">E-posta Adresinizi Girin:</label><br>
                <input type="email" id="eposta" name="eposta" placeholder="E-posta"><br><br>
            </form>
            <form>
                <label>Cinsiyetiniz Nedir?</label><br>
                <input type="radio" id="erkek" name="cinsiyet" value="Erkek">
                <label for="erkek">Erkek</label><br>
                <input type="radio" id="kadin" name="cinsiyet" value="Kadın">
                <label for="kadin">Kadın</label><br><br>
            </form>
            <form>
                <label for="gorusler">Görüşleriniz:</label><br>
                <textarea id="gorusler" name="gorusler" cols="50" rows="5" placeholder="Sitemiz hakkında ne düşünüyorsunuz?"></textarea><br><br>
            </form>
            <form>
                <label for="egitim">Eğitim Düzeyiniz Nedir?</label><br>
                <select id="egitim" name="egitim">
                    <option value="ilkokul">İlkokul-Ortaokul</option>
                    <option value="lise">Lise</option>
                    <option value="lisans">Lisans</option>
                    <option value="yukseklisans">Yüksek Lisans</option>
                </select><br><br>
            </form>
            <form>
                <input type="checkbox" id="veriOnay">
                <label for="veriOnay">Verilerimin işlenmesini onaylıyorum.</label><br><br>
            </form>
            <form>
                <input type="submit" value="Gönder">
                <input type="reset" value="Temizle">
            </form>
        </div>
    </section>
    

    <footer>
        <p>© 2024 COFFEE101</p>
    </footer>
</body>
</html>