<?php
include("head.php");
include("header.php");
?>
&nbsp;

<body>
    <div id="content" style="background-color: #12264ba6;">
        <h1>Kullanıcı Sözleşmesi</h1>
        <p style='font-size: 35px;'>•</p>
        <?php

        $sorgu = $db->prepare("SELECT * FROM contract ORDER BY c_id");
        $sorgu->execute();
        foreach ($sorgu as $veri) {
            $cont = $veri['content'];
            echo "<p style='font-size: 25px;'>• $cont</p>";
        }

        ?>
        <p style='font-size: 35px;'>•</p>
    </div>
    <br><br><br>
    <?php
    include("footer.php");
    ?>