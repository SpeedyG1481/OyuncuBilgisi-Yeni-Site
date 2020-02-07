<?php
include("head.php");
include("header.php");
if (!isset($_SESSION['username']))
    header("Location: ./");
$username = $_SESSION['username'];
?>
&nbsp;

<body>
    <div id="product_bg">
        <?php
        $veri = $db->prepare("SELECT * FROM products");
        $veri->execute();
        $reader = 0;
        foreach ($veri as $yaz) {
            $reader++;
            $title = $yaz['name'];
            $content = $yaz['description'];
            $price = $yaz['price'];
            $sale = $yaz['sale'];
            $img = $yaz['img'];
            $id = $yaz['product_id'];
            echo "
            <div class='product'>
            <div class='image'>
                <img src='$img' />
            </div>
            <div class='title'>$title</div>
            <div class='content'>$content</div>
            <div class='footer'>
                <div class='price'>$price ₺</div>
                <div class='buy'><a href='$url/urun_satin_al.php?id=$id'><button class='button'>Satın Al</button></a></div>

            </div>
        </div> &emsp; &emsp; &emsp;";

            if ($reader != 0 && $reader % 2 == 0)
                echo "<br><br><br><br><br><br><br><br><br>";
        } ?>

    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php
    include("footer.php");
    ?>