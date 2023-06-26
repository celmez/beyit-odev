<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        yemedendoydum.com
    </title>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="<?= SITE_URL."assets/css/reset.css"; ?>" />
    <link rel="stylesheet" type="text/css" href="<?= SITE_URL."assets/css/style.css"; ?>" />
</head>
<body>
    <nav class="navbar" id="nav">
        <div class="logo" id="logo">
            <a href="<?= SITE_URL; ?>">
                yemedendoydum.com
            </a>
        </div>
        <style type="text/css">
            .menu-ul li a {
                display: inline-block;
                padding-bottom: 0.25rem;
                position: relative;
                color: #f3f4f5;
                user-select: none;
                -ms-user-select: none;
                -moz-user-select: none;
                -webkit-user-select: none;
            }
            .menu-ul li a::before {
                content: "";
                position: absolute;
                left: 0;
                bottom: 0;
                width: 0;
                height: 2px;
                background-color: #f3f4f5;
                transition: width 0.50s ease-out;
            }
            .menu-ul li a:hover::before {
                width: 100%;
            }
        </style>
        <div class="menu" id="menu">
            <ul class="menu-ul">
                <li>
                    <a href="<?= SITE_URL."hakkimizda"; ?>">
                        Hakkımızda
                    </a>
                </li>
                <li>
                    <a href="<?= SITE_URL."turk-yemek-kulturu"; ?>">
                        Türk Yemek Kültürü
                    </a>
                </li>
            </ul>
        </div>
        <div class="search-box" id="search-box">
            <form action="" method="POST" autocomplete="off">
                <input type="text" id="word" name="word" placeholder="Ara" />
                <button style="cursor: pointer;" name="search">
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </div>
    </nav>
    <style type="text/css">
        .menu-region {
            border: 1px solid #c21a68;
            border-radius: 10px;
            background-color: #c21a68;
            padding: 10px 20px;
        }
        .menu-region .bolgeler li a {
            display: inline-block;
            padding-bottom: 0.25rem;
            position: relative;
            color: #f3f4f5;
            user-select: none;
            -ms-user-select: none;
            -moz-user-select: none;
            -webkit-user-select: none;
        }
        .menu-region .bolgeler li a::before {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 0;
            height: 2px;
            background-color: #f3f4f5;
            transition: width 0.50s ease-out;
        }
        .menu-region .bolgeler a:hover::before {
            width: 100%;
        }
        .menu-region .bolgeler li .bolgeler-title {
            color: #f3f4f5;
            font-weight: bolder;
            user-select: none;
            -ms-user-select: none;
            -moz-user-select: none;
            -webkit-user-select: none;
        }
    </style>
    <div class="menu-region" id="menu-region">
        <ul class="bolgeler">
            <li><h2 class="bolgeler-title">Bölgeler</h2></li>
            <li><a href="<?= SITE_URL."bolge/".$functions->seflink( 'Karadeniz Bölgesi' ); ?>">Karadeniz Bölgesi</a></li>
            <li><a href="<?= SITE_URL."bolge/".$functions->seflink( 'Akdeniz Bölgesi' ); ?>">Akdeniz Bölgesi</a></li>
            <li><a href="<?= SITE_URL."bolge/".$functions->seflink( 'İç Anadolu Bölgesi' ); ?>">İç Anadolu Bölgesi</a></li>
            <li><a href="<?= SITE_URL."bolge/".$functions->seflink( 'Doğu Anadolu Bölgesi' ); ?>">Doğu Anadolu Bölgesi</a></li>
            <li><a href="<?= SITE_URL."bolge/".$functions->seflink( 'Marmara Bölgesi' ); ?>">Marmara Bölgesi</a></li>
            <li><a href="<?= SITE_URL."bolge/".$functions->seflink( 'Ege Bölgesi' ); ?>">Ege Bölgesi</a></li>
            <li><a href="<?= SITE_URL."bolge/".$functions->seflink( 'Güneydoğu Anadolu Bölgesi' ); ?>">Güneydoğu<br>Anadolu Bölgesi</a></li>
        </ul>
    </div>