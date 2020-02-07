<?php
include("head.php");
include("header.php");
if (!isset($_SESSION['username']))
    header("Location: ./");
$username = $_SESSION['username'];
?>
&nbsp;

<body>
    <div id="content">
        <form action="odeme.php" method="post">
            <br>
            <p style="font-size: 25px;">Ödeme türünü seçiniz:</p>
            <select class="tb" name="odemeturu">
                <option value='2'>Mobil Ödeme</option>
                <option value='1'>Kredi Kartı</option>
            </select>
            <br><br>
            <p style="font-size: 25px;">Miktar giriniz:</p>
            <input class="tb" min="1" max="250" type="number" name="amount" required placeholder="Yüklemek istediğiniz miktarı giriniz.." /></p>
            <input required type="hidden" name="oyuncu" value="<?php echo $username; ?>">
            <button type="submit" class="button">Ödeme Yap</button>
        </form>
        </form>
    </div>
    <br><br><br>
    <?php
    include("footer.php");
    ?>