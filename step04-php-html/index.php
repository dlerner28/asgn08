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
    <h1>This is a test</h1>
     <p><?= "Hello, " .htmlspecialchars($_GET['name']) .". Nice to meet you." ?></p>
 


  </body>
</html>