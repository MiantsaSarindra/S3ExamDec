<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produit - E-commerce</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <a href="/" class="logo">E-Varotra</a>
                <ul class="menu">
                    <li><a href="/">Accueil</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="product-detail">
            <img src="/images/<?= $produit['img'] ?>" width="300" alt="<?= $produit['name'] ?>">
            <div class="info">
                <h1><?= $produit['name'] ?></h1>
                <p><?= $produit['descr'] ?></p>
                <p><strong>Prix :</strong> <?= $produit['prix'] ?>Ar</p>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 E-Varotra</p>
    </footer>
</body>
</html>