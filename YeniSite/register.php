<?php
include("head.php");
include("header.php");
if (isset($_SESSION['username']))
    header("Location: ./");
?>
&nbsp;

<body>
    <div id="content" style="background-color: transparent;">
        <form action="try_register.php" method="POST">

            <div class="registerLeft">
                <h2>Kişisel Bilgiler </h2>
                Ad Soyad:<br> <input type="text" class="tb" name="name_surname" placeholder="Adınız Soyadınız" required><br>
                Telefon: <br><input type="tel" class="tb" minlength="11" maxlength="11" name="telephone" placeholder="05xx xxx xx xx" required><br>
                <br> Cinsiyet:<br> <input type="radio" name="gender" value="0" checked>Belirsiz <input type="radio" name="gender" value="1">Bay <input type="radio" name="gender" value="2">Bayan
                <br> <br>Doğum Tarihi:<br> <input type="date" class="tb" name="born" required><br><br><br>
                <br>
            </div>
            <div class="registerRight">
                <h2>Diğer Bilgiler </h2>
                Kullanıcı Adınız:<br> <input type="text" minlength="4" class="tb" name="username" placeholder="Kullanıcı Adınız" required><br>
                E-Mail:<br> <input type="email" class="tb" name="mail" placeholder="ob@mcoyuncubilgisi.com" required><br>
                Şifre:<br> <input type="password" class="tb" minlength="8" name="password" placeholder="*********" required><br>
                <input type="checkbox" name="agreement" required><span style="font-size: 25px;"><a href="sozlesme.php" target="_blank" style="text-decoration: none; color: #d400ff;">Kullanıcı sözleşmesini</a> okudum ve
                        kabul ettim. </span>
                <br><br>    
                <input class="button" type="submit" value="Kayıt Ol">
                <br> <br> <br>
            </div>
        </form>
    </div>
    <br><br><br>
    <?php
    include("footer.php");
    ?>