<?php
  include_once("helpers/url.php");
  include_once("data/categories.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="apple-touch-icon" sizes="180x180" href="img/logo.svg">
    <link rel="icon" type="image/png" sizes="32x32" href="img/logo.svg">
    <link rel="icon" type="image/png" sizes="16x16" href="img/logo.svg">
  <title>BLOG PHP</title>
  <!-- ESTILOS DO PROJETO --> 
  <link rel="stylesheet" href="<?= $BASE_URL ?>/css/styles.css">
  
  <!-- GOOGLE FONTS -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
</head>

<body>
  <header>
    <a href="<?= $BASE_URL ?>" id="logo">
      <img src="<?= $BASE_URL ?>/img/logo.svg" alt="Blog Codar">
    </a>
      
    <?php

$posts = [
    [
      'id' => 2,
      'title' => 'Introdução',
      'description' => 'Aprenda o paradigma de PHP, uma linguagem em alta no mercado.',
      'tags' => ['World Wide Web', 'PHP', 'programação Avançada'],
      'img' => 'prog-2.jpg'
    ],
    [
      'id' => 3,
      'title' => 'Tipos de dados',
      'description' => 'O sistema de tipos do PHP suporta vários tipos atômicos que podem ser compostos juntos para criar tipos mais complexos.',
      'tags' => ['lógica', 'tipos', 'dados'],
      'img' => 'prog-3.jpg',
    ],
    [
      'id' => 4,
      'title' => 'Variaveis',
      'description' => 'Neste post você vai aprender tudo que precisa sobre variaveis!',
      'tags' => ['programação', 'PHP', 'variavel'],
      'img' => 'prog-4.jpg'
    ],
    [
      'id' => 5,
      'title' => 'Expressoes e Operadores',
      'description' => 'Neste post você vai aprender tudo que precisa sobre variaveis!',
      'tags' => ['operadores', 'PHP', 'expressoes'],
      'img' => 'prog-5.jpg'
    ],
    [
      'id' => 6,
      'title' => 'Estruturas de Controle',
      'description' => 'Neste post você vai aprender tudo que precisa sobre variaveis!',
      'tags' => ['estrutura', 'PHP', 'controle'],
      'img' => 'prog-6.jpg'
    ],
    [
      'id' => 7,
      'title' => 'Estruturas de Repetição',
      'description' => 'Neste post você vai aprender tudo que precisa sobre variaveis!',
      'tags' => ['estrutura', 'PHP', 'repetição'],
      'img' => 'prog-7.jpg'
    ],
    [
      'id' => 8,
      'title' => 'Função',
      'description' => 'Neste post você vai aprender tudo que precisa sobre variaveis!',
      'tags' => ['programa', 'PHP', 'função'],
      'img' => 'prog-8.jpg'
    ],
    [
      'id' => 9,
      'title' => 'String',
      'description' => 'Neste post você vai aprender tudo que precisa sobre variaveis!',
      'tags' => ['String', 'PHP', 'avançando'],
      'img' => 'prog-9.jpg'
    ],
    [
      'id' => 10,
      'title' => 'Arrays',
      'description' => 'Neste post você vai aprender tudo que precisa sobre variaveis!',
      'tags' => ['Arrays', 'PHP', 'avançando'],
      'img' => 'prog-4.jpg'
    ],
    [
      'id' => 11,
      'title' => 'POO',
      'description' => 'Neste post você vai aprender tudo que precisa sobre variaveis!',
      'tags' => ['poo', 'PHP', 'orientação'],
      'img' => 'prog-2.jpg'
    ],
    [
      'id' => 12,
      'title' => 'MYSQL',
      'description' => 'Neste post você vai aprender tudo que precisa sobre variaveis!',
      'tags' => ['mysql', 'PHP', 'bancodedados'],
      'img' => 'prog-7.jpg'
    ],
    [
      'id' => 13,
      'title' => 'Data',
      'description' => 'Neste post você vai aprender tudo que precisa sobre variaveis!',
      'tags' => ['data', 'PHP', 'date'],
      'img' => 'prog-5.jpg'
    ],
  ];
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> WELCOME BLOG</title>
</head> 

    <nav>
      <ul id="navbar">
        <li><a href="<?= $BASE_URL ?>" class="nav-link">Home</a></li>
        <li><a href="<?= $BASE_URL ?>about.php" class="nav-link">About</a></li>
        <li><a href="<?= $BASE_URL ?>contato.php" class="nav-link">Contact</a></li>
      </ul>
    </nav>
  </header>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
