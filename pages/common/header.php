<?php 
    function baseUrl()
    {
        return "http://" . $_SERVER['HTTP_HOST'];
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>PHPSandbox</title>
        <link rel="stylesheet" type="text/css" href="<?= baseUrl() ?>/resources/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?= baseUrl() ?>/resources/css/style.css">
        <script type="text/javasript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script type="text/javasript" src="<?= baseUrl() ?>/resources/js/bootstrap.min.js"></script>
        <script type="text/javasript" src="<?= baseUrl() ?>/resources/js/script.js"></script>
  	</head>
    <body>
        <?php include('nav.php') ?>
        <div class="container">