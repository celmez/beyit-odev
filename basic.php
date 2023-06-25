<?php
    require_once 'config/Connect.php';
?>
<ul>
    <li><h2>Bölgeler</h2></li>
    <li><a href="<?= SITE_URL."bolge.php?bolge=".$functions->seflink( 'Karadeniz Bölgesi' ); ?>">Karadeniz Bölgesi</a></li>
    <li><a href="<?= SITE_URL."bolge.php?bolge=".$functions->seflink( 'Akdeniz Bölgesi' ); ?>">Akdeniz Bölgesi</a></li>
    <li><a href="<?= SITE_URL."bolge.php?bolge=".$functions->seflink( 'İç Anadolu Bölgesi' ); ?>">İç Anadolu Bölgesi</a></li>
    <li><a href="<?= SITE_URL."bolge.php?bolge=".$functions->seflink( 'Doğu Anadolu Bölgesi' ); ?>">Doğu Anadolu Bölgesi</a></li>
    <li><a href="<?= SITE_URL."bolge.php?bolge=".$functions->seflink( 'Marmara Bölgesi' ); ?>">Marmara Bölgesi</a></li>
    <li><a href="<?= SITE_URL."bolge.php?bolge=".$functions->seflink( 'Ege Bölgesi' ); ?>">Ege Bölgesi</a></li>
    <li><a href="<?= SITE_URL."bolge.php?bolge=".$functions->seflink( 'Güneydoğu Anadolu Bölgesi' ); ?>">Güneydoğu Anadolu Bölgesi</a></li>
</ul>