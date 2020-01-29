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
            echo "
            <a href='haber.php?haber=1'><div class='new' style='background-image: url(\"$yaz[background]\")'>
            <div class='title'>$yaz[title]</div>

            <div class='content'> $yaz[content]</div>

            <div class='footer'>
                <div class='right'>$yaz[date]&nbsp;&nbsp;</div>
                <div class='left'>&nbsp;&nbsp;$yaz[username]</div>
            </div>
        </div></a>";

            if ($reader != 0 && $reader % 4 == 0)
                echo "<br><br>";
            $reader++;
        }
        ?>
    </div>
    &nbsp;

    <?php
    include("footer.php");
    ?>