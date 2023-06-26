<?php
    require_once 'config/Connect.php';

    $value = @$_POST['value'];

    $control = $connect->db->query("SELECT * FROM yemekler WHERE yemek_adi LIKE '%$value%' ORDER BY ID DESC limit 5");
    $count = $control->rowCount();

    if( $count == 0 )
    {
?>
        <p style="color: #f3f4f5; text-align: center; user-select: none; -ms-user-select: none; -moz-user-select: none; -webkit-user-select: none;">
            <b> Maalesef böyle bir yemek bulunamadı!!! </b>
        </p>
<?php
    }

    else
    {
        foreach( $control as $val )
        {
?>
            <ul style="text-align: center;">
                <li>
                    <a href="<?= SITE_URL."yemek/".$functions->seflink( $val['yemek_adi']."-".$val['yemek_il'] ); ?>" style="color: #f3f4f5;">
                        <img src="https://cdn.yemek.com/mnresize/1250/833/uploads/2016/09/kozalak-manti-asama-10.jpg" height="50" width="80" />
                        <br>
                        <?= $val['yemek_adi']."<br />"; ?>
                    </a>
                </li>
                <br>
                <br>
            </ul>
<?php
        }
    }
?>