<?php
include("head.php");
include("header.php");
?>
&nbsp;

<body>
    <div id="content" style="background-color: transparent">
        <div class="bottom">
            <div class="right">
                <?php if (isset($_SESSION['username'])) { ?>
                    <p style="font-size: 26px;"> Hoşgeldiniz, <?php echo $_SESSION['username']; ?>!</p>
                    <?php
                    $name = $_SESSION['username'];
                    $veri = $db->prepare('SELECT * FROM users WHERE username = :isim');
                    $veri->bindValue(':isim', $name, PDO::PARAM_STR);
                    $veri->execute();
                    $data = $veri->fetchAll(PDO::FETCH_ASSOC)[0];
                    $bakiye = number_format($data['balance']);
                    $mail = $data['e_mail'];
                    $date = $data['register_date'];
                    $gender = intval($data['gender']);
                    $tel_no = $data['telephone'];
                    $ad_soyad = $data['name_surname'];
                    $cinsiyet = (($gender == 0 ? "Belirsiz" : ($gender == 1 ? "Bay" : "Bayan")));
                    echo "
                    <br>
                    <img style='text-align: center;' src='https://minotar.net/avatar/$name/100.png'/>
                    <p style='font-size: 23px;'>Adınız Soyadınız;  $ad_soyad</p>
                    <p style='font-size: 23px;'>Telefon Numaranız;  $tel_no</p>
                    <p style='font-size: 23px;'>Bakiyeniz;  $bakiye ₺</p>
                    <p style='font-size: 23px;'>E-Mail Adresiniz;  $mail</p>
                    <p style='font-size: 23px;'>Kayıt Tarihiniz;  $date</p>
                    <p style='font-size: 23px;'>Cinsiyetiniz;  $cinsiyet</p>"; ?>

                    <br>
                    <button class="button" value="Çıkış Yap" onclick="window.location.href = 'logout.php'">Çıkış Yap</button>
                    <br>
                    <br>
                <?php } else { ?>
                    <p style="font-size: 26px;">Hoşgeldiniz, misafir!</p>
                    <form action="login.php" method="post">
                        Kullanıcı Adı:<br>
                        <input class="tb" type="text" name="username" placeholder="Kullanıcı Adınız" required>
                        <br>
                        Şifre:<br>
                        <input class="tb" type="password" name="password" placeholder="*******" required>
                        <br><br>
                        <input class="button" type="submit" value="Giriş Yap">
                    </form>
                    <a href="forgot_pw.php" style="float: right;">Şifremi Unuttum&nbsp;&nbsp;</a>
                    <br><br>
                <?php } ?>
            </div>

            <div class="left">
                <img class="leftSlider" src="./images/slider_1.png" style="width:100%">
                <img class="leftSlider" src="./images/slider_2.jpg" style="width:100%">
                <img class="leftSlider" src="./images/slider_3.jpg" style="width:100%">
            </div>
        </div>
        <?php
        if (isset($_SESSION['username']))
            echo "<br><br><br><br><br><br><br><br><br><br>";

        $veri = $db->prepare("SELECT * FROM news, users, user_news WHERE (user_news . user_id = users . user_id) AND (user_news . news_id = news . news_id)");
        $veri->execute();
        $reader = 0;
        foreach ($veri as $yaz) {
            echo "
            <a href='haber.php?haber_id=$yaz[news_id]'><div class='new'>
            <div class='title'>$yaz[title]</div>
            <div class='footer'>
                <div class='right'>$yaz[date]&nbsp;&nbsp;</div>
                <div class='left'>&nbsp;&nbsp;$yaz[username]</div>
            </div>
        </div></a>";

            if ($reader != 0 && $reader % 3 == 0)
                echo "<br><br>";
            if ($reader == 9)
                break;
            $reader++;
        }
        ?>
    </div>
    <br><br><br>
    <?php
    include("footer.php");
    ?>