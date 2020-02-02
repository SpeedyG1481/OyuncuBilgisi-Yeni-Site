<?php
include("./options/options.php");
if (isset($_POST['username']) && isset($_POST['password'])) {
    $password = $_POST['password'];
    $username = $_POST['username'];
    $pw = md5($password);
    $query  = $db->query("SELECT username FROM users WHERE username='$username' AND password='$pw'", PDO::FETCH_ASSOC);
    if ($query->rowCount() > 0) {
        session_start();
        $_SESSION['username'] = $username;
        header("Location: ../$url");
    }else{
        header("Location: ./error.php?hata_id=basarisizGiris");
    }
}else{
    header("Location: ./error.php?hata_id=unknown");
}
