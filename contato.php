
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
 /*CONTATO*/
 .cont{
    text-align: center;
   
  }

.email{
  margin-left: 60px;
  padding-top: 100px;
}

.email h1{
  color: #9400D3;
}

.tell{
  margin-left: 630px;
  margin-top: -170px;
}

.tell h1{
  color: #9400D3;
}

.chat{
  margin-left: 1150px;
  margin-top: -145px;
}

.chat h1{
  color:#9400D3;
}

</style>

</head>

<body>  

<div class="cont"><br><br>
  <h1>Está com duvida? <br>
    Como você prefere entrar em contato conosco?</h1><br><br>
</div>

  
<div class="email">
  <i class="fa-solid fa-envelope"></i>
  <h1>𝗘𝗠𝗔𝗜𝗟</h1>
  <p>tem alguma duvida?</p>
  <h2>php@gmail.com</h2>
</div><br>

<div class="tell"> 
    <i class="fa-solid fa-phone"></i>
    <h1>𝗧𝗘𝗟𝗘𝗙𝗢𝗡𝗘</h1>
    <p>você pode ligar a qualquer hora</p>
    <h2>(85) 990329-0192</h2>
</div>

<div class="chat"> 
<i class="fa-brands fa-rocketchat"></i>
  <h1>𝗖𝗛𝗔𝗧</h1>
  <p>precisa de uma ajuda agora?</p>
  <h2>Basta abrir o chat no app</h2>
</div>


<?php
  include_once("templates/footer.php")
?>

<script> 
  $('h1').fadeOut("2000").fadeIn("2000")
</script>

</body>
</html>