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
        <h2 class="box">Kahve ve İçeriği</h2>
        <div class="content-box">
            <p>Kahve, dünya genelinde geniş bir tüketici kitlesine sahip popüler bir içecektir ve hem keyif hem de işlevsellik amacıyla tüketilir. İşte kahve ve içeriği ile ilgili genel bilgiler:</p>
        </div>
        <h3 class="box">Kahvenin İçeriği ve Etken Maddeleri</h3>
        <div class="content-box">
            <p>Kahve, birçok biyolojik aktif bileşik içerir. Başlıca etken maddeleri şunlardır:</p>

            <h4>1. Kafein</h4>
            <p><strong>Tanım:</strong> Kahvede en bilinen etken maddedir. Doğal bir uyarıcı olan kafein, merkezi sinir sistemini etkiler ve geçici uyanıklık ve enerji artışı sağlar.</p>
            <ul>
                <li><strong>Faydaları:</strong>
                    <ul>
                        <li>Enerji ve odaklanma sağlar.</li>
                        <li>Metabolizmayı hızlandırabilir.</li>
                        <li>Fiziksel performansı artırabilir.</li>
                    </ul>
                </li>
                <li><strong>Yan Etkileri:</strong>
                    <ul>
                        <li>Aşırı tüketim, anksiyete, çarpıntı ve uyku sorunlarına neden olabilir.</li>
                    </ul>
                </li>
            </ul>
            
            <h4>2. Kafestol ve Kahveol</h4>
            <p><strong>Tanım:</strong> Kahve yağında bulunan diterpen bileşiklerdir. Özellikle filtre edilmemiş kahvede (Türk kahvesi, French press) bulunur.</p>
            <ul>
                <li><strong>Etkileri:</strong>
                    <ul>
                        <li>LDL kolesterol seviyelerini artırabilir.</li>
                        <li>Anti-enflamatuar ve antioksidan etkileri olduğu da bilinmektedir.</li>
                    </ul>
                </li>
            </ul>

            <h4>3. Klorojenik Asit</h4>
            <p><strong>Tanım:</strong> Polifenol sınıfına ait bir antioksidandır.</p>
            <ul>
                <li><strong>Faydaları:</strong>
                    <ul>
                        <li>Kan şekeri seviyesini düzenleyebilir.</li>
                        <li>Yağ metabolizmasını etkileyebilir.</li>
                    </ul>
                </li>
            </ul>

            <h4>4. Trigonellin</h4>
            <p><strong>Tanım:</strong> Kafein türevi bir bileşik olup kavurma sırasında parçalanarak kahveye aromatik özellikler kazandırır.</p>
            <ul>
                <li><strong>Etkileri:</strong>
                    <ul>
                        <li>Antibakteriyel özelliklere sahiptir.</li>
                        <li>Hafif bir hipoglisemik etki gösterebilir.</li>
                    </ul>
                </li>
            </ul>

            <h4>5. Antioksidanlar</h4>
            <p><strong>Tanım:</strong> Kahve, serbest radikalleri nötralize eden antioksidanlar bakımından zengindir.</p>
            <ul>
                <li><strong>Faydaları:</strong>
                    <ul>
                        <li>Hücresel hasarı önler.</li>
                        <li>Kronik hastalıklara karşı koruma sağlar.</li>
                    </ul>
                </li>
            </ul>

            <h4>6. Melanoidler</h4>
            <p><strong>Tanım:</strong> Kavurma sırasında oluşan ve kahvenin renginden sorumlu olan kompleks moleküllerdir.</p>
            <ul>
                <li><strong>Etkileri:</strong>
                    <ul>
                        <li>Antioksidan aktivite gösterir.</li>
                        <li>Sindirimi destekleyebilir.</li>
                    </ul>
                </li>
            </ul>
        </div>
    </section>
    
    <footer>
        <p>© 2024 COFFEE101</p>
    </footer>
</body>
</html>
