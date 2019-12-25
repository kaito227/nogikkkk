<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>占い結果</title>
    <link rel="stylesheet" href="stylesheet.css">
    <?php
      require_once('omikuji.php');
      require_once('section.php');
    ?>
  </head>
  <body class="result">
  <?php if ($result == -1) : ?>
    <p><?php echo htmlspecialchars($err_msg, ENT_QUOTES) ?></p>
  <?php else : ?>
    <h1 class="name"><?php echo $unsei[$result]->name ?></h1>
    <h2 class="state"><?php echo $unsei[$result]->state ?></h2>
    <p class="each"><?php echo $unsei[$result]->explain ?></p>
    <h4>健康</h4>
    <p class="each"><?php echo $unsei[$result]->health ?></p>
    <h4>仕事</h4>
    <p class="each"><?php echo $unsei[$result]->work ?></p>
    <h4>恋愛</h4>
    <p class="each"><?php echo $unsei[$result]->love ?></p>
    <h4>金運</h4>
    <p class="each"><?php echo $unsei[$result]->money ?></p>
    <h4>学問</h4>
    <p class="each"><?php echo $unsei[$result]->study ?></p>
    <h4>旅行</h4>
    <p class="each"><?php echo $unsei[$result]->trip ?></p>
 <?php endif; ?>

 <a href="index.html" class="btn">もう一度占う</a>

  </body>
</html>
