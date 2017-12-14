<?php
session_start();
require('connect.php');

if($_POST){
$surname=$_POST['surname'];
$name=$_POST['name'];
$nickname=$_POST['nickname'];
$password=$_POST['password'];
$password2=$_POST['password2'];	


if((!empty($surname)) && (!empty($name)) && (!empty($nickname)) && (!empty($password)) && (!empty($password2))) {
	
  	if($password==$password2){

  		$query = "INSERT INTO `users` (surname, name, nickname, password, blocked) 
      VALUES ('$surname', '$name', '$nickname', '$password', 0)";
          $result = mysqli_query($connection, $query);
          if($result) {
              $smsg = "User Created Successfully.";
          }
          else {
              $fmsg ="User Registration Failed";
          }
    }
  }
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
        <? if ($_SESSION) {
        ?> <a href="prof.php" class="button">Профіль</a> <?
        } else { 
        ?> <a href="login.php" class="button">Увійти</a> <?
        } ?>
      </div>
  </div>
</div>

<div id="content" align="center">
  <div class="wrap clearFix">
    <h2>Реєстрація</h2>  
    <form method="POST">
          <ul>
            <li><label>Прізвище</label></li>
            <li><input type='text' name='surname' class="textbox"></li>
            <li><label>Ім'я</label></li>
            <li><input type='text' name='name' class="textbox"></li>
            <li><label>Нік</label></li>
            <li><input type='text' name='nickname' class="textbox"></li>
            <li><label>Пароль</label></li>
            <li><input type='password' name='password' class="textbox"></li>
            <li><label>Повторіть пароль</label></li>
            <li><input type='password' name='password2' class="textbox"><br><br></li>
            <li><input type='submit' name='submit' value='Підтвердити'  class="css_button"></li>
          </ul>
    		
	  </form>
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
