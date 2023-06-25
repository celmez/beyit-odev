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
        <ul style="text-align: center;">
            <li>
                <h2>
                    <?= $region." Bölgesi'ndeki Şehirler ( ".$count." Şehir )"; ?>
                </h2>
            </li>
<?php
        foreach( $control as $row )
        {
?>
            <li>
                <a href="<?= SITE_URL."sehir/".$functions->seflink( $row['sehir'] ); ?>">
                    <?= $row['sehir']; ?>
                </a>
            </li>
<?php
        }
    }

    else
    {
        $functions->helper( SITE_URL );

        if( $_SERVER['HTTP_REFERER'] == '' )
        {
            $functions->helper( SITE_URL );
        }
    }
?>
    </ul>
<?php require_once 'assets/footer.php'; ?>