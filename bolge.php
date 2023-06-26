<?php
    require_once 'config/Connect.php';

    $region = @$_GET['b'];

    if( $region == 'karadeniz-bolgesi' )
    {
        $region = 'Karadeniz';
    }

    else if( $region == 'akdeniz-bolgesi' )
    {
        $region = 'Akdeniz';
    }

    else if( $region == 'ic-anadolu-bolgesi' )
    {
        $region = 'İç Anadolu';
    }

    else if( $region == 'dogu-anadolu-bolgesi' )
    {
        $region = 'Doğu Anadolu';
    }

    else if( $region == 'marmara-bolgesi' )
    {
        $region = 'Marmara';
    }

    else if( $region == 'ege-bolgesi' )
    {
        $region = 'Ege';
    }

    else if( $region == 'guneydogu-anadolu-bolgesi' )
    {
        $region = 'Güneydoğu Anadolu';
    }

    else if( $region == '' )
    {
        $functions->helper( SITE_URL );
    }

    echo '<title>yemedendoydum.com - '.$region.'</title>';

    $control = $connect->db->prepare("SELECT * FROM iller WHERE bolge=:region");
    $control->execute(
        array(
            'region' => $region
        )
    );
    $count = $control->rowCount();

    if( $count != 0 )
    {
        require_once 'assets/header.php';
?>
        <style type="text/css">
            ul li a {
                color: #c21a68;
            }
        </style>
        <ul style="text-align: center;">
            <li>
                <h2>
                    <?= $region." Bölgesi'ndeki Şehirler ( ".$count." Şehir )"; ?>
                </h2>
            </li>
        <br>
<?php
        foreach( $control as $row )
        {
?>
            <li>
                <a href="<?= SITE_URL."sehir/".$functions->seflink( $row['sehir'] ); ?>">
                    <img src="https://cdn.yemek.com/mnresize/1250/833/uploads/2016/09/kozalak-manti-asama-10.jpg" height="200" width="300" />
                    <br>
                    <?= $row['sehir']; ?>
                </a>
            </li>
            <br>
<?php
        }
    }

    else
    {
        $functions->helper( SITE_URL."404" );
    }
?>
    </ul>
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
<?php require_once 'assets/footer.php'; ?>