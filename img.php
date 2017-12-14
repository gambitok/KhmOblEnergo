<?
session_start();
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
          <li> <a href="contacts.php">Наш офіс</a> </li>
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
    <p>
    </p>
  </div>
</div>

<div id="content">
  <div class="wrap clearFix">
    <h2>Наш офіс</h2>
    <div>
      <img src="/images/office_1.jpg" id="myPicture" width="450" height="400" style="float: left">
      <img src="/images/office_2.jpg" id="myPicture" width="450" height="400" style="float: right;">
    </div>
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

