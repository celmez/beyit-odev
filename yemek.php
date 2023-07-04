<?php
    require_once 'config/Connect.php';

    $food = @$_GET['food'];

    echo '<title>Yemeden Doydum - '.$functions->degi( $food ).'</title>';

    $control = $connect->db->prepare("SELECT * FROM yemekler WHERE yemek_link=:food_url");
    $control->execute(
        array(
            'food_url' => $food
        )
    );
    $count = $control->rowCount();

    if( $count != 0 )
    {
        require_once 'assets/header.php';
?>
        <div style="text-align: center; margin-top: 1%;">
<?php
        foreach( $control as $row )
        {
?>
            <ul>
                <li>
                    <h2> <?= $row['yemek_adi']; ?> </h2>
                </li>
                <li>
                    <img src="https://cdn.yemek.com/mnresize/1250/833/uploads/2016/09/kozalak-manti-asama-10.jpg" height="200" width="300" />
                </li>
                <li>
                    <p style="max-width: 50%; margin-left: 25%;">
                        <span> <?= $row['yemek_aciklama']; ?> </span>
                    </p>
                </li>
                <br>
                <li>
                    <p> Yemeğin ait olduğu bölge: <a href="<?= SITE_URL."bolge/".$functions->seflink( $row['yemek_bolge']."-bolgesi" ); ?>"><b> <?= $row['yemek_bolge']; ?> </b></a> </p>
                </li>
                <li>
                    <p> Yemeğin ait olduğu şehir: <b> <a href="<?= SITE_URL."sehir/".$functions->seflink( $row['yemek_il'] ); ?>"> <?= $row['yemek_il']; ?> </a> </b> </p>
                </li>
            </ul>
<?php
        }
?>
        </div>
        <br>
<?php
    }

    else
    {
        $functions->helper( SITE_URL."404" );
    }
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
        position: fixed;
        bottom: 0;
    }
</style>

<footer class="footer" id="footer">
    <div class="foot-text">
        ©2023 yemedendoydum.com | Her hakkı saklıdır.
        <br>
        Beyit Kutsi Özalan | 211909003
    </div>
</footer>
<?php require_once  'assets/footer.php'; ?>
