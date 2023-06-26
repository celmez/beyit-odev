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
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos labore molestiae numquam. Aut nostrum perspiciatis tempora. Aperiam mollitia sit vel? Amet dolore dolores iure modi, officiis repellendus veniam veritatis voluptatibus!</span><span>Alias cupiditate doloribus illo ipsam magnam molestias nobis officia omnis quisquam, quod tempore temporibus, veniam. Aliquam autem, dignissimos dolorem doloremque, earum harum incidunt nisi quae reiciendis rem soluta sunt unde.</span><span>Nobis provident, quaerat. Accusamus animi, blanditiis cum cupiditate et iure optio placeat, quasi quia, quis reiciendis voluptate! Corporis deserunt error est, eveniet excepturi neque nulla provident quas, sed sunt, voluptatibus?</span><span>Cumque dolore et illo, in ipsum nihil sit ut veniam. Ab aspernatur cum debitis deserunt ea enim, illo ipsam, iure, nesciunt obcaecati recusandae reiciendis saepe suscipit tenetur vel voluptatem voluptates!</span><span>Accusantium aliquam consectetur dolor fugit nihil odit quam qui, similique sit veniam veritatis voluptatibus. Architecto atque cupiditate dicta est ex exercitationem explicabo maiores, nihil, omnis placeat possimus quo unde veritatis.</span><span>Delectus dicta enim nihil odit. Aspernatur consequuntur ipsam natus necessitatibus? Aspernatur labore laudantium molestias nemo, nobis sapiente ut. Aspernatur dicta laborum numquam ratione vero! Facilis, rerum veniam! Laborum perferendis, voluptas.</span><span>Ab at deserunt dignissimos dolore doloremque ducimus eligendi eos error et exercitationem in incidunt, iste magni minima nemo nulla perspiciatis, quis, quos sequi sunt tenetur ut voluptatem! Illo, quod vitae.</span><span>Atque dolore earum eius eveniet quam rerum sapiente temporibus voluptate voluptates voluptatum? Animi assumenda corporis debitis est, eum impedit maiores natus non obcaecati officiis optio repellendus repudiandae saepe veniam vero.</span><span>Ab accusantium aliquid architecto asperiores consectetur, delectus distinctio et eveniet ex excepturi exercitationem explicabo labore libero molestiae nam nisi pariatur placeat, quasi quisquam, reiciendis reprehenderit repudiandae veritatis voluptas voluptatem voluptates!</span><span>Alias corporis culpa eius facere fugit officia! Architecto aut, commodi consequuntur deleniti dolorum explicabo fugiat libero maiores modi nihil, nobis optio perferendis praesentium quaerat quia quibusdam tenetur. Cumque, dignissimos, dolor.</span><span>Ad adipisci beatae consectetur consequuntur debitis deleniti dignissimos, dolor ea eaque eligendi esse facere facilis fuga, impedit inventore ipsam iure libero magnam molestiae necessitatibus numquam possimus quas repudiandae saepe sequi.</span><span>Dolorem laudantium ratione tempore! Debitis nam natus nobis officia officiis quia sed ut. Dicta pariatur quasi soluta ullam ut. Alias consequuntur debitis deserunt eligendi fugiat odio optio suscipit temporibus voluptas.</span><span>Ad aliquid asperiores autem consectetur consequuntur culpa debitis deserunt dolorum, earum eius eveniet expedita fuga hic labore minus nostrum nulla quae, quis quisquam quod recusandae repellendus sit soluta veritatis, voluptatibus.</span><span>Ab consequatur cumque, debitis deserunt distinctio doloremque ea id inventore libero magni mollitia nulla, perspiciatis quisquam repudiandae vero vitae voluptatibus. Beatae deleniti dicta distinctio eos fuga illum, laboriosam laudantium placeat.</span><span>Aliquam autem beatae doloremque ducimus eaque, expedita impedit ipsum nemo omnis possimus quos sint. Animi eaque error quia quis vel! Atque commodi cumque inventore ipsam magnam obcaecati quod saepe sit!</span><span>Architecto, asperiores assumenda aut commodi consequuntur dolor doloribus eos id, illum itaque maxime natus nesciunt nihil nulla officiis optio porro quas quasi repudiandae saepe similique sint soluta temporibus vero voluptate!</span><span>Eligendi esse exercitationem facere temporibus unde voluptatem voluptates! Beatae blanditiis delectus distinctio dolores et ipsam iure laborum, laudantium necessitatibus possimus, quo sit ut veritatis. Animi at fuga ipsam perspiciatis velit!</span><span>A ad amet animi architecto assumenda atque beatae dignissimos doloribus eligendi enim esse excepturi, fugiat ipsum laborum modi nesciunt nihil nobis non officia perferendis porro reprehenderit saepe similique totam voluptatem.</span><span>Architecto atque deleniti iste laboriosam nam qui reprehenderit voluptates. Accusamus aperiam architecto beatae blanditiis consectetur deserunt dolores eaque earum, eos est eveniet iste maxime minus, quas quis sit vel vero?</span><span>Aliquid maxime perferendis possimus veniam voluptates. Ab aspernatur assumenda consectetur debitis dolor ducimus error et eum, ipsam labore laboriosam molestias, neque nulla odit perspiciatis quis quisquam quo soluta voluptatem voluptatibus!</span>
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
