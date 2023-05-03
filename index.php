<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Censura</title>
</head>

<body>
  <form action="myscript.php" method="post">
    <label for="paragraph">Scrivi un paragrafo</label><br>
    <textarea id="paragraph" name="paragraph" rows="4" cols="50"></textarea>
    <label for="word">Inserisci la parola da censurare:</label><br>
    <input type="text" id="word" name="word"><br>
    <input type="submit" value="censura">
  </form>
</body>

</html>