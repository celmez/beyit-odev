<?php
    session_start();
    ob_start();
    date_default_timezone_set( 'Europe/Istanbul' );

    define( 'SITE_URL', 'http://localhost/beyit-odev/' );

    class Connect
    {
        public $db;
        public function __construct()
        {
            try
            {
                $this->db = new PDO('mysql:host=localhost;dbname=yemek;charset=utf8mb4;', 'root', '');
            }

            catch( PDOException $error )
            {
                die( $error->getMessage() );
            }
        }
    }
    require_once 'Functions.php';

    $connect = new Connect();
    $functions = new Functions();
?>