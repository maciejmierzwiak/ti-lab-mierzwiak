<?php
$firma = 'Szprycha';
$rok = date('Y');
$cennik = [
    ['nazwa' => 'Przegląd podstawowy', 'cena' => 120],
    ['nazwa' => 'Przegląd kompleksowy', 'cena' => 250],
    ['nazwa' => 'Wymiana dętki', 'cena' => 40],
    ['nazwa' => 'Centrowanie koła', 'cena' => 60]
];
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Szprycha - Pracownia Rowerowa</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="app.js" defer></script>
</head>
<body>
    <header class="site-header">
        <h1 class="logo"><i class="fa-solid fa-person-biking" aria-hidden="true"></i> Szprycha</h1>
        <button class="menu-toggle" aria-expanded="false">Menu</button>
        <nav class="menu" aria-label="Główna nawigacja">
            <a href="#uslugi">Usługi</a>
            <a href="#cennik">Cennik</a>
            <a href="#kontakt">Kontakt</a>
        </nav>
    </header>

    <main>
        <section id="uslugi">
            <h2><i class="fa-solid fa-wrench" aria-hidden="true"></i> Nasze usługi</h2>
            
            <div class="hero-image-box">
                <img src="https://images.unsplash.com/photo-1485965120184-e220f721d03e?auto=format&fit=crop&w=1100&q=80" 
                     alt="Warsztat rowerowy z narzędziami i serwisowanym rowerem" 
                     class="workshop-img">
            </div>

            <div class="cards">
                <article class="card">
                    <i class="fa-solid fa-gear card-icon" aria-hidden="true"></i>
                    <h3>Przegląd podstawowy</h3>
                    <p>Regulacja hamulców i przerzutek, smarowanie napędu.</p>
                    <p class="card_price">od 120 zł</p>
                </article>
                <article class="card card--highlight">
                    <span class="badge">Najczęściej wybierane</span>
                    <i class="fa-solid fa-bicycle card-icon" aria-hidden="true"></i>
                    <h3>Przegląd kompleksowy</h3>
                    <p>Pełen serwis z myciem, centrowaniem kół i regulacją.</p>
                    <p class="card_price">od 250 zł</p>
                </article>
                <article class="card">
                    <i class="fa-solid fa-compact-disc card-icon" aria-hidden="true"></i>
                    <h3>Wymiana dętki</h3>
                    <p>Szybka wymiana na miejscu, dętka wliczona w cenę.</p>
                    <p class="card_price">od 40 zł</p>
                </article>
            </div>
        </section>

        <section id="cennik">
            <h2><i class="fa-solid fa-tags" aria-hidden="true"></i> Cennik usług</h2>
            <div class="table-container">
                <table class="price-table">
                    <thead>
                        <tr>
                            <th>Usługa</th>
                            <th class="num">Cena</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($cennik as $usluga): ?>
                        <tr>
                            <td><?= htmlspecialchars($usluga['nazwa']) ?></td>
                            <td class="num"><?= $usluga['cena'] ?> zł</td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <footer id="kontakt">
        <div class="footer-content">
            <div class="footer-info">
                <h2>Kontakt</h2>
                <p>&copy; <?= $rok ?> <?= $firma ?></p>
                <p><i class="fa-solid fa-location-dot" aria-hidden="true"></i> ul. Przykładowa 12, Bydgoszcz</p>
            </div>
            <div class="footer-links">
                <p><i class="fa-solid fa-phone" aria-hidden="true"></i> <a href="tel:+48500100200">500 100 200</a></p>
                <p><i class="fa-solid fa-envelope" aria-hidden="true"></i> <a href="mailto:kontakt@szprycha.pl">kontakt@szprycha.pl</a></p>
            </div>
        </div>
    </footer>
</body>
</html>