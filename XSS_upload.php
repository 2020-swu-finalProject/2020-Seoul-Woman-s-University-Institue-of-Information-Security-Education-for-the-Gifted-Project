<html>
  <head>
  </head>
  <body>
    <?php
      $name1 = htmlspecialchars($_GET['command']);
      $name2 = $_GET['command'];
    ?>
    <h1>작동된 코드:</h1>
    <?php
      echo $name2;
    ?>
    <h1>작동된 코드(보안 적용):</h1>
    <?php
      echo $name1;
    ?>
  </body>
</html>