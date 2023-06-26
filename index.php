<?php
    require_once 'config/Connect.php';
    require_once 'assets/header.php';

    $random = $connect->db->prepare("SELECT * FROM yemekler ORDER BY RAND() LIMIT 4");
    $random->execute();
?>
<?php
    echo '<div class="foos">';
    echo '<br />';
    foreach( $random as $ran )
    {
?>
        <ul style="text-align: center;">
            <li>
                <img src="https://cdn.yemek.com/mnresize/1250/833/uploads/2016/09/kozalak-manti-asama-10.jpg" height="200" width="300" />
            </li>
            <li>
                <p>
                    <b> <?= $ran['yemek_adi']; ?> </b>
                </p>
            </li>
            <li>
                <a href="#">
                    Bölge: <?= $ran['yemek_bolge']; ?>
                </a>
            </li>
            <li>
                <a href="#">
                    Şehir: <?= $ran['yemek_il']; ?>
                </a>
            </li>
            <li>
                <a href="<?= SITE_URL."yemek/".$ran['yemek_link']; ?>">
                    <b> Yemeğe Git </b>
                </a>
            </li>
        </ul>
        <br>
<?php
    }
    echo '</div>';
?>
    <style type="text/css">
        .footer {
            text-align: center;
            width: 100%;
            padding: 10px 20px;
            background-color: #c21a68;
            color: #ffffff;
            user-select: none;
            -ms-user-select: none;
            -moz-user-select: none;
            -webkit-user-select: none;
        }
    </style>

    <footer class="footer" id="footer">
        <div class="foot-text">
            ©2023 yemedendoydum.com | Her hakkı saklıdır.
            <br>
            Beyit Kutsi Özalan | 211909003
        </div>
    </footer>
<?php
    require_once 'assets/footer.php';
?>