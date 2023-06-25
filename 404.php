<?php require_once 'config/Connect.php'; ?>
<style type="text/css">
    body {
        overflow-x: hidden;
        background-color: #c21a68;
    }
    html {
        scroll-behavior: smooth;
    }
    * {
        text-decoration: none;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        color: #f3f4f5;
    }
    .logo {
        font-size: 25px;
        color: #ffffff;
        user-select: none;
        -ms-user-select: none;
        -moz-user-select: none;
        text-align: center;
        margin-top: 10%;
    }
    .logo a {
        color: #ffffff;
    }
    .message {
        text-align: center;
        margin-top: 5%;
    }
    .message h1 {
        font-size: 100px;
        user-select: none;
        -ms-user-select: none;
        -moz-user-select: none;
        -webkit-user-select: none;
    }
    .message a::before {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        width: 0;
        height: 2px;
        background-color: #f3f4f5;
        transition: width 0.25s ease-out;
    }
    .message a {
        display: inline-block;
        padding-bottom: 0.25rem;
        position: relative;
        font-size: 28px;
    }
    .message a:hover::before {
        width: 100%;
    }
</style>
<div class="logo" id="logo">
    <h1>
        yemedendoydum.com
    </h1>
</div>
<div class="message">
    <h1>
        <b> 404 NOT FOUND </b>
    </h1>
    <a href="<?= SITE_URL; ?>">
        Ana Sayfaya Dön
    </a>
</div>