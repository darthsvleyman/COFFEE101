<?php
session_start();
$isLoggedIn = isset($_SESSION['email']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COFFEE101 - Kahve Hakkında Her Şey</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .quiz-container {
            width: 60%;
            margin: 20px auto;
            padding: 20px;
            background-color: #f8f8f8;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .question {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .answers {
            margin-bottom: 20px;
        }

        .answers label {
            display: block;
            margin: 5px 0;
        }

        .btn {
            padding: 10px 20px;
            background-color: #6f4f32;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #4e3629;
        }

        .result {
            display: none;
            font-size: 20px;
            text-align: center;
            margin-top: 20px;
        }
    </style>
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
        <div class="quiz-container" id="quiz">
            <a href="anasayfa.php" style="color: #6f4e37; font-weight: bolder;">Anasayfaya geri dönmek için buraya tıklayın.</a>

            <h2>Kahve Bilgisi Testi</h2>
            <p>Bu kısa test ile kahve hakkındaki bilginizi ölçebilirsiniz!</p>

            <div id="question-container">
                <div class="question">
                    1. Kahve ilk olarak hangi ülkede keşfedilmiştir?
                </div>
                <div class="answers">
                    <label><input type="radio" name="q1" value="A"> Etiyopya</label>
                    <label><input type="radio" name="q1" value="B"> Kolombiya</label>
                    <label><input type="radio" name="q1" value="C"> Brezilya</label>
                </div>

                <div class="question">
                    2. Kahve bitkisi hangi türde bir bitkidir?
                </div>
                <div class="answers">
                    <label><input type="radio" name="q2" value="A"> Çalı</label>
                    <label><input type="radio" name="q2" value="B"> Ağaç</label>
                    <label><input type="radio" name="q2" value="C"> Ot</label>
                </div>

                <div class="question">
                    3. Hangisi Espresso temelli bir kahve değildir?
                </div>
                <div class="answers">
                    <label><input type="radio" name="q3" value="A"> Latte</label>
                    <label><input type="radio" name="q3" value="B"> Americano</label>
                    <label><input type="radio" name="q3" value="C"> Filtre Kahve</label>
                </div>

                <div class="question">
                    4. Kişi başına en çok kahve tüketen ülke hangisidir?
                </div>
                <div class="answers">
                    <label><input type="radio" name="q4" value="A"> Amerika</label>
                    <label><input type="radio" name="q4" value="B"> Finlandiya</label>
                    <label><input type="radio" name="q4" value="C"> İngiltere</label>
                </div>

                <div class="question">
                    5. Dünyanın en büyük kahve üreticisi hangi ülkedir?
                </div>
                <div class="answers">
                    <label><input type="radio" name="q5" value="A"> Vietnam</label>
                    <label><input type="radio" name="q5" value="B"> Kolombiya</label>
                    <label><input type="radio" name="q5" value="C"> Brezilya</label>
                </div>

                <button class="btn" onclick="checkAnswers()">Sonuçları Gör</button>
            </div>

            <div class="result" id="result">
                <p id="score"></p>
            </div>
        </div>
    </section>
    
    <footer>
        <p>© 2024 COFFEE101</p>
    </footer>

    <script>
        function checkAnswers() {
            let score = 0;
            const q1 = document.querySelector('input[name="q1"]:checked');
            const q2 = document.querySelector('input[name="q2"]:checked');
            const q3 = document.querySelector('input[name="q3"]:checked');
            const q4 = document.querySelector('input[name="q4"]:checked');
            const q5 = document.querySelector('input[name="q5"]:checked');

            if (q1.value === "A") score++;
            if (q2.value === "B") score++;
            if (q3.value === "C") score++;
            if (q4.value === "B") score++;
            if (q5.value === "C") score++;

            const result = document.getElementById("result");
            const scoreText = document.getElementById("score");

            scoreText.textContent = `Testi tamamladınız! Puanınız: ${score} / 5`;
            result.style.display = "block"; 
            document.getElementById("question-container").style.display = "none"; 
        }
    </script>
</body>
</html>