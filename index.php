<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="utf-8">
    <title>COUNTER SAMPLE</title>
  </head>

  <body>
    <h1>Counter with PHP</h1>

    <?php

    $file = "count.txt";
    $count = 0;

    if(file_exists($file)) {
      $count = file_get_contents($file);
    }

    $count ++;

    file_put_contents($file,$count);

    echo "COUNT:".$count;

    ?>

  </body>
</html>
