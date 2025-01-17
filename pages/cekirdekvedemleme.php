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
        <h2 class="box">Kahve Çekirdek Türleri</h2>
        <div class="content-box">
            <h3>1. Arabica (Coffea arabica)</h3>
            <ul>
                <li><strong>Özellikler:</strong> Daha düşük kafein içeriği, kompleks ve yumuşak tat profili.</li>
                <li><strong>Yetiştirme Alanı:</strong> Yüksek rakımlı bölgeler.</li>
                <li><strong>Tadım Notları:</strong> Meyvemsi, çiçeksi ve tatlı aromalar.</li>
            </ul>
            <h3>2. Robusta (Coffea canephora)</h3>
            <ul>
                <li><strong>Özellikler:</strong> Daha yüksek kafein içeriği, yoğun ve acı bir tat.</li>
                <li><strong>Yetiştirme Alanı:</strong> Daha düşük rakımlar ve sıcak iklimler.</li>
                <li><strong>Tadım Notları:</strong> Topraksı ve sert aromalar.</li>
            </ul>
        </div>
    
        <h2 class="box">Kahve Demleme Türleri</h2>
        <div class="content-box">
            <h3>1. Filtre Kahve</h3>
            <ul>
                <li>Su, öğütülmüş kahveden süzülerek geçer.</li>
                <li>Hafif ve temiz bir tat sunar.</li>
            </ul>
            <h3>2. Espresso</h3>
            <ul>
                <li>İnce öğütülmüş kahveye basınçla sıcak su uygulanır.</li>
                <li>Konsantre, yoğun ve hızlı hazırlanan bir kahve türüdür.</li>
            </ul>
            <h3>3. French Press</h3>
            <ul>
                <li>Öğütülmüş kahve sıcak su ile birlikte preslenir.</li>
                <li>Yağları ve çözünebilen maddeleri koruduğu için zengin bir aroma sunar.</li>
            </ul>
            <h3>4. Türk Kahvesi</h3>
            <ul>
                <li>İnce öğütülmüş kahve, su ve isteğe bağlı şeker ile pişirilir.</li>
                <li>Yoğun kıvamlı ve tortulu bir yapıya sahiptir.</li>
            </ul>
            <h3>5. Cold Brew</h3>
            <ul>
                <li>Öğütülmüş kahve soğuk suda uzun süre bekletilir.</li>
                <li>Asiditesi düşük, hafif ve yumuşak bir tat sunar.</li>
            </ul>
        </div>
        <div class="content-box" style="text-align: center; margin-bottom: 30px;">
            <button class="btn" onclick="suggestCoffee()">Bugün Hangi Kahveyi İçmeli?</button>
            <div id="dynamicMessage"></div>
        </div>
    </section>
    
    <script>
        function suggestCoffee() {
            var coffees = ["Espresso", "Latte", "Cappuccino", "Americano", "Mocha"];
            var randomCoffee = coffees[Math.floor(Math.random() * coffees.length)];
            
            const dynamicMessage = document.getElementById('dynamicMessage');
            dynamicMessage.innerHTML = "Bugün denemeniz gereken kahve: " + randomCoffee;
            dynamicMessage.style.color = "#6f4e37"; 
            dynamicMessage.style.fontWeight = "bold";
        }
    </script>

    <footer>
        <p>© 2024 COFFEE101</p>
    </footer>
</body>
</html>