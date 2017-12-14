<?
session_start();
?>
<!DOCTYPE html>
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

<hr>
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

<hr>
<div id="content">
  <div class="wrap clearFix">
    <h2>Новини</h2>
    <div class="clearFix">
      <div class="col floatLeft"> <img src="images/icon-location.png" alt="" class="icon">
        <h3>Новий філіал</h3>
        <p>Ми відкрили новий офіс! Його можна знайти за адресою Свободи 12.</p>
      </div>
      <div class="col floatRight"> <img src="images/icon-backup.png" alt="" class="icon">
        <h3>Найкращий сервіс</h3>
        <p>ПАТ "Хмельницькобленерго" є однією з найкращих постачальників електроенергії не тільки у рідному місті, а й за його межами!</p>
      </div>
    </div>
    <div class="clearFix">
      <div class="col floatLeft"> <img src="images/icon-twitter.png" alt="" class="icon">
        <h3>Ми у Твіттері!</h3>
        <p>Тепер ми з'явилися у Твіттері. Нашу сторінку Ви можете знайти за адресою: www.twitter.com/hoe</p>
      </div>
      <div class="col floatRight"> <img src="images/icon-stats.png" alt="" class="icon">
        <h3>Статистика за 2014</h3>
        <p>За 2014 рік Нас стало на 15% більше. Знову вітаємо користувачів, що приєдналися до нас. Ми раді Вам!</p>
      </div>
    </div>
    <div class="clearFix">
      <div class="col floatLeft"> <img src="images/icon-tools.png" alt="" class="icon">
        <h3>Найкращий персонал</h3>
        <p>У нашій компанії працюють тільки найбільш кваліфіковані працівники, що навчалися та працювали у кращих вузах як нашої країни, так і за її межами.</p>
      </div>
      <div class="col floatRight"> <img src="images/icon-awards.png" alt="" class="icon">
        <h3>Нагороди підприємства</h3>
        <p>ПАТ "Хмельницькобленерго" було не одноразово нагороджено за найкращу якість електроенергії, що постачається у Ваші будинки.</p>
      </div>
    </div>

    <h2>Відгуки про компанію</h2>
    <ul class="cols clearFix">
      <li>
        <p>Одне з найкращих підприємств з електропостачання в Україні! 10 років якості та стабільності в отриманнні послуг підприємством.</p>
        <p><strong>Іванов Іван</strong></p>
      </li>
      <li class="middle">
        <p>Одне з найкращих підприємств з електропостачання в Україні! 10 років якості та стабільності в отриманнні послуг підприємством.</p>
        <p><strong>Іванов Іван</strong></p>
      </li>
      <li>
        <p>Одне з найкращих підприємств з електропостачання в Україні! 10 років якості та стабільності в отриманнні послуг підприємством.</p>
        <p><strong>Іванов Іван</strong></p>
      </li>
    </ul>

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

