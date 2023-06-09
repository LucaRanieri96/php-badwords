<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

  <title>Censura</title>
</head>

<body>
  <div class="container">
    <h1 class="mb-4">Scrivi un paragrafo ed una parola da censurare</h1>
    <form action="myscript.php" method="post">
      <label for="paragraph"><strong>Scrivi un paragrafo:</strong></label>
      <div>
        <textarea id="paragraph" name="paragraph" rows="8" cols="100">Il paragrafo (o capoverso) è innanzitutto una porzione di testo formata da uno o più periodi e isolata da ciò che precede e ciò che segue. All’interno del paragrafo sono raggruppate porzioni di informazione omogenee, perciò il passaggio a un nuovo capoverso (il cosiddetto a capo) implica una pausa molto forte nel testo. 
        "paragrafo" in "La grammatica italiana" enciclopedia TRECCANI.
        </textarea>
      </div>
      <div>
        <label for="word"><strong>Inserisci la parola che vuoi censurare -> </strong></label>
        <input type="text" id="word" name="word">
      </div>
      <input type="submit" value="censura">
    </form>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>