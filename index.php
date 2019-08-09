<!DOCTYPE html>
<!--
www.ebubekirbastama.com
Bu Sistem By&Ebubekir Bastama Tarafın'dan Usom Spam List Bilgilerini almak için  Open Source Olarak 
Yazılmıştır satılması kesinlikle Yasaktır.
-->
<html>
    <head>
        <meta charset="UTF-8">
    <title>Siyah Muhafız (C.)</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
        $url = "https://www.usom.gov.tr/url-list.txt";
        $okunan = file($url);
        ?>
    <div class="container">
        <h2>Usom Spam Web Site Listesi</h2>
        <ul class="list-group">
            <?php
            foreach ($okunan as $i => $ipler) {
                echo '<li class="list-group-item">' . $ipler . '</li>';
            }
            ?>
        </ul>
    </div>
</body>
</html>