<?php
  
  $paragraph = $_POST["paragraph"];
  $censoredWord = $_POST["word"];
  $newParagraph = str_replace($censoredWord, "***", $paragraph);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div>
    <h2>Paragrafo da censurare</h2>
    <p><?php echo $paragraph; ?></p>
  </div>
  <div>
    <span>Parola da censurare: </span>
    <span><?php echo $censoredWord; ?></span>
  </div>
  <div>
    <h2>Paragrafo censurato</h2>
    <p><?php echo $newParagraph; ?></p>
  </div>
</body>

</html>