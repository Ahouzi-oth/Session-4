


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Piéce Auto Al Akhawayn.ma</title>
    <link rel="stylesheet" href="./css/piece-auto.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>
    <header>
        <div class="head">
            <h2 class="logoo">
                <a class="logo" href="index.html"><img src="images/car box .png" alt="logo" style="width: 200px;"> </a>
            </h2>
            <div class="search-box">
                <input type="text" placeholder="Rechercher une pièce, une marque...">
                <button type="button">⌕</button>
            </div>

            <div class="compt">

                <a class="connexion" href="">connexion</a>

            </div>

        </div>

        <nav class="nav">

            <a class="navigation" href="home.php">Accueil</a>
            <a class="navigation" href="piece-auto.php">Pièce Auto</a>
            <a class="navigation" href="">Ctégories</a>
            <a class="navigation" href="">contact</a>

        </nav>
        <hr>
    </header>



    <div class="cartes">

    <?php foreach ($produits as $produit): ?>

        <div class="carte">
            <div class="content">

                <a href=""><img class="cart" src="<?= $produit["image"] ?>" alt="disque de frein"></a>
                <p class="marque">Marque : <?= $produit["marque"] ?></p>
                <p class="phrase-carte"><?= $produit["nom"] ?></p>
                <p class="annee">▦ <?= $produit["annee_fabrication"] ?></p>
                <p class="evaluation">⭐ 4.8 (120 avis)</p>

                <div class="sub-infos">
                    <p class="prix"><?= $produit["prix"] ?></p>

                    <a class="ajouter-panier" href=""><i class="fa-solid fa-cart-arrow-down"></i> ajouter au panier </a>
                </div>
            </div>
        </div>

        <?php endforeach; ?>

    </div>




    <footer class="footer">
        <div class="foooter">
            <div>
                <div>
                    <a class="log" href="index.html"><img src="images/car box .png" alt="logo" style="width: 200px;"> </a>
                </div>
                <div>
                    <p class="phrase-foot">© 2026 Piéce Auto Al Akhawayn. Tout droits réservés</p>
                </div>
            </div>

            <div class="Livraison">
                <p><i class="fa-solid fa-truck"></i> Livraison rapide <br> Par tout au maroc </p>

            </div>

            <div class="origine">
                <p><i class="fa-solid fa-medal"></i> Pièces d'origine <br> Qalités garanties </p>

            </div>
            <div class="service">
                <p><i class="fa-solid fa-headset"></i> Service client <br> Toujours à votre écoute </p>

            </div>
            <div class="medi">
                <a class="media" href="https://www.instagram.com/?hl=fr"><i class="fa-brands fa-instagram"></i>  </a>
                <a class="media" href="https://web.facebook.com/?locale=fr_FR&_rdc=1&_rdr#"><i class="fa-brands fa-facebook"></i>  </a>
                <a class="media" href="https://www.whatsapp.com/?lang=fr"><i class="fa-brands fa-whatsapp"></i> </a>
            </div>

        </div>
    </footer>



</body>

</html>