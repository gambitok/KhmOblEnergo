<?php

session_start();
require('connect.php');

if (isset($_POST['nickname']) and isset($_POST['password'])){

$nickname = $_POST['nickname'];
$password = $_POST['password'];

?>
<script type="text/javascript">
  alert("Hello, ");
</script>
<?

$query = "SELECT * FROM `users` WHERE nickname='$nickname' and password='$password'";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){
	$_SESSION['nickname'] = $username;
	}
	else {$fmsg = "Invalid Login Credentials.";}
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
      <a href="reg.php" class="button">Реєстрація</a> 
    </div>
	  <p>
	  </p>
  </div>
</div>

<div id="content" align="center">
  <div class="wrap clearFix">
    <h2>Вхід</h2>
      <form method="POST">
        <ul>
          <li><label>Введіть логін:</label></li>
          <li><input type="text" name="nickname" placeholder="Login" class="textbox"><br><br></li>
          <li><label>Введіть пароль:</label></li>
          <li><input type="password" name="password" placeholder="Password" class="textbox"></li>
          <li>Не авторизовані? <a href="reg.php"> Реєстрація</a><br><br></li>
          <li><input type="submit" name="button" value="Увійти" class="css_button" id="send"></li>
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


