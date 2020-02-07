<?php
include("head.php");
include("header.php");
?>
&nbsp;

<body>
    <div id="content" style="background-color: transparent">
        <?php

        $veri = $db->prepare("SELECT * FROM news, users, user_news WHERE (user_news . user_id = users . user_id) AND (user_news . news_id = news . news_id)");
        $veri->execute();
        $reader = 0;
        foreach ($veri as $yaz) {
            $reader++;
            $icerik = $yaz['content'];
            $icerik_goster = substr($icerik, 0, 225);
            $icerik_goster .= "...<br>
            <a href='haber.php?haber_id=$yaz[news_id]'>Tamamı için tıklayın.</a>";
            echo "
            <div class='new'>
                <div class='title'>
                <a style='text-decoration: none; color: white;'href='haber.php?haber_id=$yaz[news_id]'>$yaz[title]</a>
                </div>

                <div class='content'>
                    $icerik_goster
                </div>

                <div class='new-bottom'>
                OS: $yaz[read_times]
                    <div class='left'>&nbsp;&nbsp;Yazar; $yaz[username]</div>
                    <div class='right'>Tarih; $yaz[date]&nbsp;&nbsp;</div>

                </div>
            </div>";

            if ($reader % 2  == 0)
                echo "<br><br>";
            if ($reader == 100)
                break;
        }
        ?>


    </div>
    <br><br><br>
    <?php
    include("footer.php");
    ?>