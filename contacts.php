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
    <p>
    </p>
  </div>
</div>

<div id="content">
  <div class="wrap clearFix">
    <h2>Контакти</h2>
      <table border="1">
      <col width="300">
      <col width="300">
      <tr>
        <td><strong>ПІБ</strong></td>
        <td><strong>Посада</strong></td>
        <td><strong>Телефон</strong></td>
      </tr>
      <tr>
        <td>КОЗАЧУК Олег Іванович</td>
        <td>В.о. генерального директора</td>
        <td>78-78-59</td>
      </tr>
      <tr>
        <td>ІВАНЮК Олег Григорович</td>
        <td>Директор комерційний</td>
        <td>70-15-59</td>
      </tr>
      <tr>
        <td>ГУТ Олександр Дмитрович</td>
        <td>Відділ кадрів</td>
        <td>70-15-85</td>
      </tr>
      <tr>
        <td>ТУЛУПОВ Борис Петрович</td>
        <td>Приймальня</td>
        <td>78-78-51</td>
      </tr>
      <tr>
        <td>СЛОБОДЯН Віктор Іванович</td>
        <td>Канцелярія</td>
        <td>78-78-20</td>
      </tr>
      <tr>
        <td>ГРУБІ Георгій Борисович</td>
        <td>КОНТАКТ-ЦЕНТР</td>
        <td>78-78-30</td>
      </tr>
      <tr>
        <td>ГРУБІ Георгій Борисович</td>
        <td>Консультаційний центр</td>
        <td>78-78-40</td>
      </tr>
      </table> 
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

