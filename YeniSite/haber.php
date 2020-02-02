<?php
include("head.php");
include("header.php");
if (!isset($_GET['haber_id']))
    header("Location: ./");

$haber_id = $_GET['haber_id'];

$query  = $db->prepare("SELECT * FROM news, users, user_news WHERE news . news_id = :id 
AND user_news . news_id = :id AND users . user_id = user_news . user_id");
$query->bindValue(':id', $haber_id, PDO::PARAM_INT);
$query->execute();
$data = $query->fetchAll(PDO::FETCH_ASSOC)[0];

$haber_basligi = $data['title'];
$icerik = $data['content'];
$yazar = $data['username'];
$tarih = $data['date'];

?>
&nbsp;

<body>
    <div id="content" style="background-color: #12264ba6;">
        <div class="news">
            <div class="title"><?php echo $haber_basligi; ?></div>
            <br>
            <div class="content"><?php echo $icerik; ?></div>
            <br>
            <div class="footer">
                <div class="left">Haber Yazarı: <?php echo $yazar; ?></div>
                <div class="right">Haber Tarihi: <?php echo $tarih; ?></div>
            </div>
            
        </div>
    </div>
    <br><br><br>
    <?php
    include("footer.php");
    ?>