<?php
  
  $paragraph = $_POST["paragraph"];
  $censoredWord = $_POST["word"];
  $newParagraph = str_replace($censoredWord, str_repeat('*', strlen($censoredWord)), $paragraph);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    <div class="d-flex">
      <h3>Parola da censurare: "<?php echo $censoredWord;?>" </h3>
      <div></div>
    </div>
    <div>
      <h2>Paragrafo da censurare</h2>
      <p><?php echo $paragraph; ?></p>
      <h4>Lunghezza paragrafo: <?php echo strlen($paragraph);?> lettere</h4>
    </div>
    <hr>
    <div>
      <h2>Paragrafo censurato</h2>
      <p><?php echo $newParagraph; ?></p>
      <h4>Lunghezza paragrafo: <?php echo strlen($newParagraph);?> lettere</h4>
    </div>
    <form action="index.php">
      <input type="submit" value="Torna">
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>