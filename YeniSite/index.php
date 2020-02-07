<?php
include("head.php");
include("header.php");

function get_gravatar($email, $s = 80, $d = 'mp', $r = 'g', $img = false, $atts = array())
{
    $url = 'https://www.gravatar.com/avatar/';
    $url .= md5(strtolower(trim($email)));
    $url .= "?s=$s&d=$d&r=$r";
    if ($img) {
        $url = '<img src="' . $url . '"';
        foreach ($atts as $key => $val)
            $url .= ' ' . $key . '="' . $val . '"';
        $url .= ' />';
    }
    return $url;
}

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
                    $avatar = get_gravatar($mail);
                    $born_date = $data['born_date'];
                    $cinsiyet = (($gender == 0 ? "Belirsiz" : ($gender == 1 ? "Bay" : "Bayan")));
                    echo "
                    <br>
                    <img style='text-align: center;' src='$avatar'/>
                    <p style='font-size: 23px;'>Ad-Soyad;  $ad_soyad</p>
                    <p style='font-size: 23px;'>Telefon;  $tel_no</p>
                    <p style='font-size: 23px;'>Bakiyeniz;  $bakiye ₺</p>
                    <p style='font-size: 23px;'>E-Mail;  $mail</p>
                    <p style='font-size: 23px;'>Doğum Tarihi;  $born_date</p>
                    <p style='font-size: 23px;'>Cinsiyetiniz;  $cinsiyet</p>
                    <p style='font-size: 23px;'>Kayıt Tarihi;  $date</p>"; ?>

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
                <?php
                $veri = $db->prepare("SELECT * FROM slider");
                $veri->execute();
                $reader = 0;
                foreach ($veri as $yaz) {
                    echo "<a href='$yaz[url]'><img class='leftSlider' src='$yaz[src]' style='width:100%'></a>";
                }
                ?>

            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br>

    <?php
    include("footer.php");
    ?>