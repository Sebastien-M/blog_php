<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        unlink("posts/".$_GET['file']);
        echo "<p>Fichier supprimé</p>";
    ?>
    <a href="index.php">
        <button>Home</button>
    </a>
    <a href="index.php">
        <button>Add a Post</button>
    </a>
</body>
</html>