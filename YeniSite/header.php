<header>
    <div id="logo">
        <img src="../<?php echo $url ?>/images/logo.png">
    </div>

    <div class="navbar">
        <a href="index.php">Anasayfa</a>
        <?php if (isset($_SESSION['username'])) { ?>
            <a href="kredi_yukle.php">Kredi Yükle</a>

        <?php } else { ?>
            <a href="register.php">Kayıt Ol</a>

        <?php } ?>
        <a href="market.php">Market & Ürünler</a>
        <a href="destek.php">Destek & İletişim</a>
        <a href="haberler.php">Haberler</a>
    </div>
</header>