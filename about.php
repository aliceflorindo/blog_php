
<?php
  include_once("templates/header.php");
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
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <title>BLOG PHP</title>
  <!-- ESTILOS DO PROJETO --> 
  <link rel="stylesheet" type="text/css" href="css/styles.css" media="screen"/>
  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">

<style>
     /* ABOUT */

      body{
        background-color: whitesmoke;
      }

  .about{
    text-align: center;

  }

  .about h1{
    color:#663399;
  }

  .apren{
    text-align: center;
            
  }

  .apren h3{
    text-align:center;
    margin-left:300px;
    width: 850px;
    transition: background-color 0.3s ease;
    border-radius: 6px;
    height: 100px;  
    background-color: white;
  
  }
  .apren h3:hover{
    background-color: #663399;
  }
 
</style>

</head>

<body>  

<div class="about">
  <h1>𝗔𝗕𝗢𝗨𝗧</h1><br><br>

    <h2>PHP do Zero a Maestria</h2><br>
    <h3>Aprenda tudo o que você precisa para ser um programador profissional <br>
        em PHP, criando projetos e com exercícios práticos</h3><br><br>
  
</div>


<div class="apren">
    <h1>O que você aprenderá</h1><br>
    <i class="fa-solid fa-check"></i>
    <h3>Criar uma rede social colaborativas de filmes, parecida com o IMDB (do absoluto zero)</h3>
    <h3>Programar de forma avançada com a linguagem PHP</h3>
    <h3>Estruturas de repetição e condição em PHP</h3>
    <h3>PHP e MySQL (PDO, conexão, CRUD)</h3>
    <h3>Páginas dinâmicas com PHP, MySQL, HTML e CSS</h3>
    <h3>Tipos de dados em PHP</h3>
    <h3>Orientação a Objetos em PHP</h3>
    <h3>Bancos de dados com PHP</h3>
    <h3>Design patterns com PHP</h3>
    <h3>E muito mais, o curso vai te preparar para ser realmente um desenvolvedor PHP!</h3>
</div><br><br><br><br><br><br><br>




<script> 
  $('h1').fadeOut("2000").fadeIn("2000")
</script>
<?php
  include_once("templates/footer.php")
?>
</body>
</html>