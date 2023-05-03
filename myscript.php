<html>
    <head>
        <title>Risultato censura</title>
    </head>
    <body>
        <?php
            $paragraph = $_POST["paragraph"];
            $censoredWord = $_POST["word"];

            echo$paragraph ;
            echo strlen($paragraph);  

            $newParagraph = str_replace($censoredWord, "*****", $paragraph);

            echo$newParagraph;
        ?>
    </body>
</html>