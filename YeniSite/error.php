<?php
include("head.php");
include("header.php");
if (!isset($_GET['hata_id']))
    header("Location: ./");

$hata = $_GET['hata_id'];
?>
&nbsp;

<body>
    <div id="content" style="background-color: #12264ba6">

        <img src="./images/error.png" width="30%">
        <h1 style="color: red;">Hata!</h1>
        <?php
        if ($hata == "varOlanKullanici") {
            echo "<p style='font-size: 35px;'>Böyle bir kullanıcı zaten mevcut! Lütfen mail adresinizin, telefon 
            numaranızın ve kullanıcı adınızın benzersiz olmasına dikkat ediniz!</p>
            <p style='font-size: 30px;'> Anasayfaya yönlendiriliyorsunuz...</p>";
        } else if ($hata == "basarisizGiris") {
            echo "<p style='font-size: 35px;'>Kullanıcı adınızı ve şifrenizi tekrar kontrol ediniz...</p>
            <p style='font-size: 30px;'> Anasayfaya yönlendiriliyorsunuz...</p>";
        } else if ($hata == "kullaniciBulunamadi") {
            echo "<p style='font-size: 35px;'>Girdiğiniz bilgileri tekrar kontrol ediniz! Böyle bir kullanıcı bulunamadı...</p>
            <p style='font-size: 30px;'> Anasayfaya yönlendiriliyorsunuz...</p>";
        } else if ($hata == "odemeBasarisiz") {
            echo "<p style='font-size: 35px;'>Ödeme başarısız oldu! Lütfen tekrar deneyin...</p>
            <p style='font-size: 30px;'> Anasayfaya yönlendiriliyorsunuz...</p>";
        } else {
            echo "<p style='font-size: 35px;'> Bilinmeyen bir hata oluştu...</p>
            <p style='font-size: 30px;'> Anasayfaya yönlendiriliyorsunuz...</p>";
        }
        header('refresh: 7; url=index.php');
        ?>
    </div>
    <br><br><br>
    <?php
    include("footer.php");
    ?>