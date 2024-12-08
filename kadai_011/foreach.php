<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
</head>
<body>
  <?php

  $kadai = [
    "名前"=>"玉ねぎ",
    "値段"=>"200",
    "産地"=>"北海道",
  ];
  
  foreach ($kadai as $key => $value) {
    echo "{$key}：{$value}<br>";
  }

  ?>
</body>
</html>