<link rel="stylesheet" type="text/css" href="assets/css/reset.css" />
<?php
    require_once 'config/Connect.php';

    $c = @$_GET['c'];
    $c2 = $functions->degi( $c );

    echo '<title>yemedendoydum.com - '.$c2.'</title>';

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
        foreach( $control as $row )
        {
?>
            <ul style="text-align: center;">
                <li>
                    <h1 style="user-select: none; -ms-user-select: none; -moz-user-select: none; -webkit-user-select: none;"> <?= "<b>".$row['sehir']."</b>"; ?> </h1>
                </li>
            </ul>
            <div class="foods" id="foods">
                <ul>
                    <li>
                        <a href="">
                            <img src="https://cdn.yemek.com/mnresize/1250/833/uploads/2016/09/kozalak-manti-asama-10.jpg" style="height: 200px; width: 300px;" />
                            <p>
                                Yemek 1
                            </p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://cdn.yemek.com/mnresize/1250/833/uploads/2016/09/kozalak-manti-asama-10.jpg" style="height: 200px; width: 300px;" />
                            <p>
                                Yemek 2
                            </p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://cdn.yemek.com/mnresize/1250/833/uploads/2016/09/kozalak-manti-asama-10.jpg" style="height: 200px; width: 300px;" />
                            <p>
                                Yemek 3
                            </p>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="">
                            <img src="https://cdn.yemek.com/mnresize/1250/833/uploads/2016/09/kozalak-manti-asama-10.jpg" style="height: 200px; width: 300px;" />
                            <p>
                                Yemek 4
                            </p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://cdn.yemek.com/mnresize/1250/833/uploads/2016/09/kozalak-manti-asama-10.jpg" style="height: 200px; width: 300px;" />
                            <p>
                                Yemek 5
                            </p>
                        </a>
                    </li>
                </ul>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
<?php
        }
    }

    else
    {
        $functions->helper( SITE_URL."basic.php" );
    }

    echo '<br/><br/><br/><br/><br/>';
    require_once 'assets/footer.php';
?>