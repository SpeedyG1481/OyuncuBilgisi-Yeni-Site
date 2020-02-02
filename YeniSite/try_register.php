<?php
include("./options/options.php");
if (
    isset($_POST['name_surname']) &&
    isset($_POST['telephone']) &&
    isset($_POST['gender']) &&
    isset($_POST['born']) &&
    isset($_POST['username']) &&
    isset($_POST['mail']) &&
    isset($_POST['password'])
) {

    $ad_soyad = $_POST['name_surname'];
    $telefon = $_POST['telephone'];
    $cinsiyet = $_POST['gender'];
    $dogum_tarihi = $_POST['born'];
    $k_adi = $_POST['username'];
    $sifre = $_POST['mail'];
    $mail = $_POST['password'];

    $sorgu = $db->query("SELECT * FROM users WHERE username = '$k_adi' OR e_mail = '$mail' OR telephone = '$telefon'", PDO::FETCH_ASSOC);
    if ($sorgu->rowCount() == 0) {
        $kayit = $db->prepare("INSERT INTO users SET username = ?, telephone = ?, name_surname = ?,
         password = ?, gender = ?,born_date = ?, register_date = ?, balance = ?, permission = ?, e_mail = ?");
        $insert = $kayit->execute(array($k_adi, $telefon, $ad_soyad, md5($sifre), $cinsiyet, $dogum_tarihi, date("Y-m-d"), 0, 0, $mail));
        if ($insert) {
            session_start();
            $_SESSION['username'] = $k_adi;
            header("Location: index.php");
        }
    } else {
        header("Location: ./error.php?hata_id=varOlanKullanici");
    }
} else {
    header("Location: ./error.php?hata_id=gecersizDeneme");
}
