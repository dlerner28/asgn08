<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <title>Document</title>
  <style>
    header {
background: #e3e3e3;
      padding: 2em;
      text-align:center;
    }
  </style>
  </head>
  <body>
  <ul>
    <?php foreach($dogs as $dog) : ?>
    <li><?=$dog;?></li>
    <?php endforeach; ?>
  
  </ul>

  </body>
</html>