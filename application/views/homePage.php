<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CodeIgniter</title>
</head>
<body>
  <h1>Hello 
    <?php 
      foreach ($name as $value) {
        echo $value . " ";
      }
    ?>
  </h1>
</body>
</html>