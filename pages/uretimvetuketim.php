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
        <h2 class="box">Kahve Üretimi</h2>
        <div class="content-box">
            <h3>1. Kahve Çekirdeği Yetiştirme</h3>
            <ul>
                <li><strong>İklim ve Coğrafya:</strong> Kahve, Tropikal Kuşak olarak bilinen "Kahve Kuşağı"nda yetişir. İdeal sıcaklık 15-24°C arasında, yüksek rakımlar ise kaliteli kahve için önemlidir.</li>
                <li><strong>Başlıca Üretici Ülkeler:</strong> Brezilya, Vietnam, Kolombiya, Etiyopya ve Endonezya.</li>
            </ul>
    
            <h3>2. Hasat Süreci</h3>
            <ul>
                <li><strong>Elle Toplama:</strong> Yüksek kaliteli kahve üretiminde tercih edilir. Olgunlaşmış meyveler seçilir.</li>
                <li><strong>Makineyle Hasat:</strong> Daha geniş alanlarda ve hızlı üretim için kullanılır.</li>
            </ul>
    
            <h3>3. İşleme Yöntemleri</h3>
            <ul>
                <li><strong>Yıkanmış (Washed):</strong> Çekirdekler, suyla fermente edilir ve yıkanır. Daha temiz ve asidik tat profili sağlar.</li>
                <li><strong>Doğal (Natural):</strong> Çekirdekler, meyve kabuğuyla güneşte kurutulur. Tatlı ve meyvemsi notalar verir.</li>
                <li><strong>Honey Process:</strong> Kısmi fermente işlemi. Dengeli bir tat sunar.</li>
            </ul>
        </div>
    
        <h2 class="box">Kahve Tüketimi</h2>
        <div class="content-box">
            <h3>1. Küresel Kahve Tüketim Alışkanlıkları</h3>
            <ul>
                <li><strong>Avrupa:</strong> Espresso ve filtre kahve popülerdir. Finlandiya kişi başına en çok kahve tüketen ülkedir.</li>
                <li><strong>ABD:</strong> Kahve zincirleri (ör. Starbucks) yaygındır. Çoğunlukla filtre kahve tüketilir.</li>
                <li><strong>Asya:</strong> Japonya’da hazır kahve ve soğuk kahve yaygındır. Vietnam’da ise yoğunlaştırılmış süt ile yapılan kahve tercih edilir.</li>
            </ul>
    
            <h3>2. Kahve Tüketim Şekilleri</h3>
            <ul>
                <li><strong>Sade Kahve:</strong> Espresso, Americano, Türk kahvesi gibi katkı maddesi olmadan tüketilir.</li>
                <li><strong>Sütlü Kahve:</strong> Latte, cappuccino ve macchiato gibi süt veya köpük eklenmiş kahve türleridir.</li>
                <li><strong>Soğuk Kahve:</strong> Cold brew ve buzlu kahve (iced coffee) sıcak günlerde tercih edilir.</li>
            </ul>
    
            <h3>3. Sağlık ve Tüketim Miktarı</h3>
            <ul>
                <li><strong>Önerilen Günlük Kafein:</strong> Yetişkinler için günlük maksimum 400 mg kafein (yaklaşık 4-5 fincan kahve) önerilir.</li>
                <li><strong>Aşırı Tüketimin Etkileri:</strong> Uykusuzluk, anksiyete ve kalp çarpıntısı yapabilir.</li>
            </ul>
        </div>
    </section>

    <section>
        <h2 class="box">Kahve Üretimi ve Tüketimi Verileri</h2>
        <div class="content-box">
            <table style="width: 100%;" border="1">
                <thead>
                    <tr>
                        <th>Ülke</th>
                        <th>Üretim (Ton)</th>
                        <th>Hektar başına üretim (kg)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Brezilya</td>
                        <td>3,200,000</td>
                        <td>1,700</td>
                    </tr>
                    <tr>
                        <td>Vietnam</td>
                        <td>1,950,000</td>
                        <td>3,000</td>
                    </tr>
                    <tr>
                        <td>Endonezya</td>
                        <td>800,000</td>
                        <td>620</td>
                    </tr>
                    <tr>
                        <td>Kolombiya</td>
                        <td>660,000</td>
                        <td>790</td>
                    </tr>
                    <tr>
                        <td>Etiyopya</td>
                        <td>500,000</td>
                        <td>670</td>
                    </tr>
                    <tr>
                        <td>Uganda</td>
                        <td>390,000</td>
                        <td>540</td>
                    </tr>
                    <tr>
                        <td>Peru</td>
                        <td>350,000</td>
                        <td>830</td>
                    </tr>
                    <tr>
                        <td>Hindistan</td>
                        <td>340,000</td>
                        <td>770</td>
                    </tr>
                    <tr>
                        <td>Honduras</td>
                        <td>315,000</td>
                        <td>1,220</td>
                    </tr>
                    <tr>
                        <td>Meksika</td>
                        <td>180,000</td>
                        <td>280</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <footer>
        <p>© 2024 COFFEE101</p>
    </footer>
</body>
</html>