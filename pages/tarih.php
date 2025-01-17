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
        <h2 class="box">Kahvenin Keşfi</h3>
        <div class="content-box">
            <ul>
                <li><strong>Menşei:</strong> Kahve, ilk olarak Etiyopya’da keşfedildi. Efsaneye göre, bir keçi çobanı olan Kaldi, keçilerinin kırmızı kahve meyvelerini yedikten sonra enerjik davrandıklarını fark etti.</li>
                <li><strong>Yemen’e Gelişi:</strong> Kahve bitkisi, Etiyopya’dan Yemen’e taşındı. Yemen’de kahve, 15. yüzyılda Sufi tarikatlarının ibadet sırasında uyanık kalmalarına yardımcı olmak için kullanıldı.</li>
            </ul>
        </div>
        <h2 class="box">Kahvenin Dünyaya Yayılışı</h3>
        <div class="content-box">
            <ul>
                <li><strong>Orta Doğu ve Osmanlı İmparatorluğu:</strong> Kahve, 16. yüzyılda Osmanlı İmparatorluğu’na ulaştı. İstanbul’da ilk kahvehane, Kanuni Sultan Süleyman döneminde açıldı ve sosyal etkileşim alanı haline geldi.</li>
                <li><strong>Avrupa:</strong> 17. yüzyılda Venedikli tüccarlar kahveyi Avrupa’ya getirdi. Avrupa’da kahvehaneler, “fikrin doğduğu yerler” olarak adlandırıldı.</li>
                <li><strong>Amerika:</strong> Kahve, 18. yüzyılda Amerika’ya ulaştı. Boston Çay Partisi’nden sonra Amerikan toplumunda çaya alternatif olarak popülerleşti.</li>
            </ul>
        </div>
        <h2 class="box">Kahve Endüstrisinin Gelişimi</h3>
        <div class="content-box">
            <ul>
                <li><strong>Kültürleşme:</strong> 19. yüzyılda kahve, hem günlük bir içecek hem de kültürel bir sembol haline geldi.</li>
                <li><strong>Endüstriyel Devrim:</strong> Kahve üretimi ve dağıtımı endüstriyelleşerek daha geniş kitlelere ulaştı. Çekirdeklerin paketlenip taşınması kolaylaştı.</li>
                <li><strong>Kahve Zincirleri:</strong> 20. yüzyılda kahve zincirleri (ör. Starbucks) sayesinde kahve tüketimi global bir fenomen haline geldi.</li>
            </ul>
        </div>
        <h2 class="box">Günümüzde Kahve</h3>
        <div class="content-box">
            <ul>
                <li><strong>Üretim:</strong> Brezilya, Vietnam ve Kolombiya gibi ülkeler, dünya kahve üretiminin büyük bir kısmını üstlenmektedir.</li>
                <li><strong>Kahve Kültürü:</strong> Dünya genelinde kahve festivalleri, yarışmalar ve özel demleme yöntemleri ile kahve tüketimi bir sanat ve kültür haline geldi.</li>
                <li><strong>Sürdürülebilirlik:</strong> Günümüzde kahve üretimi, çevresel sürdürülebilirlik ve adil ticaret uygulamaları ile desteklenmektedir.</li>
            </ul>
        </div>
    </section>
    

    <footer>
        <p>© 2024 COFFEE101</p>
    </footer>
</body>
</html>