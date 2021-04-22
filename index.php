<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_BADWORDS</title>
</head>
<body>

    <?php

        $paragraph = "PHP (acronimo ricorsivo di PHP: Hypertext Preprocessor, preprocessore di ipertesti; originariamente acronimo di Personal Home Page) è un linguaggio di scripting interpretato, originariamente concepito per la programmazione di pagine web dinamiche. L'interprete PHP è un software libero distribuito sotto la PHP License.";
        
        $badword = $_GET["badword"];

        $new_paragraph = str_replace($badword, "***", $paragraph);

    ?>

    <h2>Testo non censurato</h2>

    <h4>(Lunghezza Paragrafo: <?php echo strlen($paragraph) ?> caratteri)</h4>

    <p><?php echo $paragraph ?></p>

    <h2>Testo censurato</h2>

    <h4>(Lunghezza Paragrafo: <?php echo strlen($new_paragraph) ?> caratteri)</h4>

    <p><?php echo $new_paragraph ?></p>

</body>
</html>