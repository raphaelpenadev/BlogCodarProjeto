<?php

include_once('helpers/url.php');

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <title>Blog Codar</title>
  <link rel="stylesheet" href="<?= $BASE_URL ?>/css/style.css">
</head>

<body>
  <header>
    <a href="<?= $BASE_URL ?>" id="logo">
      <img src="<?= $BASE_URL ?>/img/logo.svg" alt="Blog Codar">
    </a>

    <nav>
      <ul id="navbar">
        <li><a href="<?= $BASE_URL ?>">Home</a></li>
        <li><a href="<?= $BASE_URL ?>">Categorias</a></li>
        <li><a href="<?= $BASE_URL ?>">Sobre</a></li>
        <li><a href="<?= $BASE_URL ?>contato.php">Contato</a></li>
      </ul>
    </nav>
  </header>