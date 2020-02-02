<?php
include("head.php");
include("header.php");
if (isset($_SESSION['username']))
    header("Location: ./");
?>
&nbsp;

<body>
    <div id="content" style="background-color: #12264ba6;">
        <h1 style="font-size:50px;">Şifremi Unuttum</h1><br><br>
        <form action="forgot_password.php" method="post">
            <p style='font-size: 25px;'>Mail Adresiniz:</p>
            <input type="email" minlength="5" name="mail" class="tb" required placeholder="ob@mcoyuncubilgisi.com">
            <p style='font-size: 25px;'>Telefon Numaranız:</p>
            <input type="tel" name="telephone" class="tb" minlength="11" maxlength="11" required placeholder="05xx xxx xx xx">
            <br><br><input type="submit" class="button" value="Gönder">
        </form>
    </div>
    <br><br><br>
    <?php
    include("footer.php");
    ?>