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
$yazar_kadi = $data['username'];
$tarih = $data['date'];
$yazar_adi =  $data['name_surname'];
$hit = $data['read_times'];
$hit++;
$sonuc = $db->exec("UPDATE news SET read_times = '$hit' WHERE news_id = '$haber_id'");

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

                <div class="left">Yazar: <?php echo $yazar_adi; ?>(<?php echo $yazar_kadi; ?>)&nbsp;</div>
                <div class="right">&nbsp;Tarih: <?php echo $tarih; ?></div>
                <span style="font-size:25px;">Okunma Sayısı: <?php echo $hit; ?></span>
            </div>
    
        </div>
    </div>
    <br><br><br>
    <?php
    include("footer.php");
    ?>