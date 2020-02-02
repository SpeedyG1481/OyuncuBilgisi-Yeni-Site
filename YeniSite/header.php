<header>
    <div id="logo">
        <img src="../<?php echo $url ?>/images/logo.png">
    </div>

    <div class="navbar">
        <?php if (isset($_SESSION['username'])) { ?>

            <a href="index.php">Anasayfa</a>
            <a href="market.php">Market & Ürünler</a>
            <a href="hakkimizda.php">Hakkımızda</a>
            <a href="destek.php">Destek & İletişim</a>

        <?php } else { ?>
            <a href="index.php">Anasayfa</a>
            <a href="register.php">Kayıt Ol</a>
            <a href="market.php">Market & Ürünler</a>
            <a href="hakkimizda.php">Hakkımızda</a>
            <a href="destek.php">Destek & İletişim</a>


        <?php } ?>
    </div>
</header>