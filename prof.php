<?php
session_start();
require('connect.php');

if (!($_SESSION)) {
?>	
<script type="text/javascript">
alert("Спочатку увійдіть!");
window.location.href =  "login.php";
</script>
<?
}
?>

<html lang="en" dir="ltr">

<head>
  <title>HOE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/print.css" media="print">
</head>

<body>
<header class="clearFix">
  <div class="wrap"> <a id="logo" href="#">Хмельницькобленерго</a>
    <hr>
    <nav>
      <div id="nav"> <strong>Navigation</strong>
        <ul>
          <li class="active"> <a href="index.php">Домашня</a> </li>
          <li> <a href="about.php">Про нас</a> </li>
          <li> <a href="contacts.php">Контакти</a></li>
          <li> <a href="img.php">Наш офіс</a> </li>
            <?if ($_SESSION) {
            ?><li> <a href="prof.php">Профіль</a> </li><?
            } else { ?>
            <li> <a href="reg.php"> Реєстрація </a> </li><?
            }?>
        </ul>
      </div>
    </nav>
  </div>
</header>

<div id="intro">
  <div class="inner">
    <div class="wrap clearFix">
      <h1><strong>Хмельницькобленерго</strong></h1>
      <p>Провідна електропостачальна компанія України</p>
      <a href="logout.php" class="button">Вийти</a> </div>
  </div>
</div>

<div id="content" >
  <div class="wrap clearFix">
    <h2>Профіль</h2>
  	<p>
  	  <?
  	  $query = "SELECT * FROM `users` WHERE nickname='$nickname' and password='$password'";
      $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
      $count = mysqli_num_rows($result);
  		echo "Nickname: ".$_SESSION['nickname'].'<br>'.'<br>';
  		echo "Password: ".$_SESSION['password'].'<br>'; 
  	  ?>
    </p>
	</p>
  </div>
</div>

<hr class="noPrint">
<div id="twitter">
  <div class="wrap clearFix"> <span class="icon"></span>
     <p>Щоб дізнатися більш детальну інформацію про роботу підприємства загляньте на наш інформаційний сайт: 
      <a href="http://www.hoe.com.ua/">http://www.hoe.com.ua/</a></p>
  </div>
</div>
<hr>

<footer class="clearFix">
  <div class="wrap clearFix">
    <p class="floatRight"> 
      Copyright &copy; 2012 
      <a href="#">MyDzyName</a> 
      &ndash; All Rights Reserved
    </p>
    <p class="socialIcons"> 
      <a href="#" class="rss">RSS</a> 
      <a href="#" class="facebook">Facebook</a> 
      <a href="#" class="twitter">Twitter</a> 
    </p>
  </div>
</footer>

</body>
</html>
