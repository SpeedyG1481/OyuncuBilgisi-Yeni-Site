<?php
include("./options/options.php");
if (isset($_POST['mail']) && isset($_POST['telephone'])) {

    $mail = $_POST['mail'];
    $tel = $_POST['telephone'];

    $query  = $db->query("SELECT username FROM users WHERE telephone='$tel' AND e_mail='$mail'", PDO::FETCH_ASSOC);
    if ($query->rowCount() > 0) {

    } else {
        header("Location: ./error.php?hata_id=kullaniciBulunamadi");
    }
} else {
    header("Location: ./");
}
