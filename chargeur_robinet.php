<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="css/navBar.css">
    <link rel="stylesheet" href="css/fridgebook.css">
</head>
<?php
    $xml = simplexml_load_file("Elements/Documents/images/GeekZone_Gamme.xml")
?>
<body>
    <section>
        <div class="fixe navBar">

            <ul>
                <li class="float-left">
                    <a href="index.html"> <img class="logoGeek" src="images/geekzone.png"></a>
                </li>
                <li class="float-center float-left">Geekzone<br><span style="font-size: 16px;">A PLACE TO WIN</span>
                </li>
                <li class="nav-item-img float-right">
                    <a href="connexion.html"><img src="images/client.png"> </a>
                </li>
                <li class="nav-item-img float-right">
                    <a href="panier.html"><img style="width: 55px" src="images/panier.png"></a>
                </li>
            </ul>

            <div class="fixe sousNavbar">
                <button class="dropbtn "><a href="Boutique.html">Nos Boutiques</a></button>
                <div class="dropdown">
                    <button class="dropbtn"><a href="">Catégorie</a></button>
                    <div class="dropdown-content">
                        <a href="Produit_cuisine.html">Cuisine</a>
                        <a href="Produit_gadget.html">Gadget</a>
                        <a href="Produit_mode.html">Mode</a>
                        <a href="Produit_portable.html">Portable</a>
                        <a href="Produit_usb.html">Usb</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="pub">STONKS</div>
    <ul id="place">
        <li id="content">
            <img class="taile_img" src="Elements/Documents/images/gadget/powerball.jpg" alt="fichier introuvable">
        </li>
        <li id="content" class="txt1">
            <p>
                <h1>magnets fridgebook : 14,9€</h1>
            </p>
        </li>
        <li class="txt2">
            <p>
                <h2 style="text-align: center;">Recréez l'environnement de votre réseau social préféré ... sur votre frigo ! grâce à nos<br> magnets fridgebook. Mettez à jour votre statut et commentaires à l'aide du stylo feutre fourni. </h2>
            </p>
        </li>
        <li class="panier">Ajouter au pannier </li>
    </ul>

</body>

</html>