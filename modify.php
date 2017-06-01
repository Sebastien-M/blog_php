<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/stylesheet.css">
    <title>Modif</title>
</head>

<body>
    <?php
        $content = file_get_contents("posts/". $_POST['file']);
        echo "<form id='mofifyForm' action='modif_sent.php' method='POST'>";
        echo "<label>Nouveau nom de fichier</label>";
        echo "<input type='text' name='titre' value= '".$_POST['file']."'>";
        // Previous file name
        echo "<input type='hidden' name='previous' value= '".$_POST['file']."'>";
        // Content of file
        echo "<label>Nouveau contenu du fichier</label>";
        echo "<textarea rows='4' name='content' cols='50' id='contenu'>".$content."</textarea>";
        echo "<input type='hidden' name='file' value='".$_POST['file']."'>";
        echo "<button>Modifier</button>";
        echo "</form>";
    ?>
</body>

</html>