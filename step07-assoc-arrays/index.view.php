<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Document</title>
  </head>
  <body>
  <ul>
    <?php foreach($task as $operation => $val) : ?>
    <li><strong><?= $operation; ?></strong> <?=$val; ?></li>
    <?php endforeach; ?>
    </ul>

  </body>
</html>