<?php
$firma = 'Szprycha';
$rok = date('Y');
$imie = $_GET['imie'] ?? 'Gościu';
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
        <h1 class="logo">
            <a class="logo" href="#">
                <svg viewBox="0 0 120 64" width="72" height="38" role="img" aria-labelledby="logo-tytul">
                    <title id="logo-tytul">Szprycha</title>
                    <circle cx="28" cy="42" r="18" fill="none" stroke="#ffcc00" stroke-width="5"/>
                    <circle cx="92" cy="42" r="18" fill="none" stroke="#ffcc00" stroke-width="5"/>
                    <polyline points="28,42 48,14 80,14 92,42" fill="none" stroke="#ffcc00" stroke-width="5"/>
                    <polyline points="48,14 60,42 80,14" fill="none" stroke="#ffcc00" stroke-width="5"/>
                </svg>
                <span>Szprycha</span>
            </a>
        </h1>
        <button class="menu-toggle" aria-expanded="false">Menu</button>
        <nav class="menu" aria-label="Główna nawigacja">
            <a href="#uslugi">Usługi</a>
            <a href="#cennik">Cennik</a>
            <a href="#kontakt">Kontakt</a>
        </nav>
    </header>

    <main>
        <div style="background-color: #242420; padding: 15px 20px; border-radius: 8px; margin-bottom: 30px; border: 1px solid #ffcc00; color: #ffcc00; font-weight: 600;">
            <p style="margin: 0;">Cześć, <?= htmlspecialchars($imie) ?>!</p>
        </div>

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
            
            <h3 style="margin-top: 40px; color: #ffffff;">Wizualizacja cen</h3>
            <div style="background: #1c1e24; border-radius: 12px; padding: 24px; border: 1px solid #2a2d35; max-width: 600px;">
                <svg viewBox="0 0 550 <?= count($cennik) * 40 ?>" width="100%" style="display: block;">
                    <?php 
                    $y = 10;
                    foreach ($cennik as $usluga): 
                        $szerokosc = $usluga['cena'];
                    ?>

                        <text x="0" y="<?= $y + 15 ?>" fill="#e6e6e6" font-size="14" font-family="Poppins"><?= htmlspecialchars($usluga['nazwa']) ?></text>

                        <rect x="180" y="<?= $y ?>" width="<?= $szerokosc ?>" height="20" fill="#ffcc00" rx="4" />
                        
                        <text x="<?= 180 + $szerokosc + 10 ?>" y="<?= $y + 15 ?>" fill="#ffcc00" font-size="14" font-family="Poppins" font-weight="bold"><?= $usluga['cena'] ?> zł</text>
                    <?php 
                        $y += 40;
                    endforeach; 
                    ?>
                </svg>
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