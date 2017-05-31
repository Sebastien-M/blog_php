<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modif</title>
</head>

<body>
    <?php
        foreach ($_POST as $key=>$values) {
            $filename = str_replace("_",".",$key);
            $content = file_get_contents("posts/". $filename);
            echo "<form action='modif_sent.php' method='POST'>";
            echo "<input type='text' name='".$filename."' value= '".$filename."'>";
            echo "<textarea rows='4' name='".$content."' cols='50' id='contenu'>".$content."</textarea>";
            echo "<input type='submit' value='Envoyer'>";
            echo "</form>";
            // echo $content;
        }
    ?>
</body>

</html>