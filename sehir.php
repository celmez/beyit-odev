<?php
    require_once 'config/Connect.php';

    $c = @$_GET['c'];
    $c2 = $functions->degi( $c );

    $control = $connect->db->prepare("SELECT * FROM iller WHERE sehir=:city");
    $control->execute(
        array(
            'city' => $c2
        )
    );
    $count = $control->rowCount();

    if( $count != 0 )
    {
        require_once 'assets/header.php';

        $cek = $connect->db->prepare("SELECT * FROM yemekler WHERE yemek_il=:food_city");
        $cek->execute(
            array(
                'food_city' => $c2
            )
        );
        $countFood = $cek->rowCount();

?>
        <style type="text/css">
            .food-city {
                text-align: center;
                margin-top: 1%
            }
            .food-city ul li a {
                color: #c21a68;
            }
        </style>
        <div class="food-city" id="food-city">
<?php
        $ro = $cek->fetch( PDO::FETCH_ASSOC );
?>
            <h2>
                <?= $ro['yemek_il']." ilimize ait ".$countFood." adet yemek vardır"; ?>
            </h2>
            <br>
<?php
        foreach( $cek as $row )
        {
?>
                <ul>
                    <li>
                        <img src="https://cdn.yemek.com/mnresize/1250/833/uploads/2016/09/kozalak-manti-asama-10.jpg" height="200" width="300" />
                    </li>
                    <li>
                        <a href="#">
                            <b> <?= $row['yemek_adi']; ?> </b>
                        </a>
                    </li>
                    <li>
                        <p> <?= $row['yemek_aciklama']; ?> </p>
                    </li>
                    <li>
                        <a href="<?= SITE_URL."yemek/".$row['yemek_link']; ?>"> <?= 'Yemeğe Git' ?> </a>
                    </li>
                </ul>
            <br>
<?php
        }
?>
        </div>
<?php
    }

    else
    {
        $functions->helper( SITE_URL."basic.php" );
    }

    echo '<br/><br/><br/><br/><br/>';
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