<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/stylesheet.css">
    <title>Posts</title>
</head>

<body>
    <header>
        <?php require("header.php") ?>
    </header>
    <main class="index">
        <?php
        session_start();
        if (isset($_SESSION['user'])){
            $dir = "posts/";
            $indir = array_filter(scandir('posts/'), function($item) {
                return !is_dir('posts/' . $item);
            });
            foreach($indir as $cle) {
                    echo "<div class='article'>";
                    echo "<h3>" . $cle . "</h3>";
                    $fileRead = fopen($dir.$cle,"r");
                    $content = fread($fileRead, filesize($dir.$cle));
                    echo "<div class='text'>";
                    echo htmlspecialchars($content);
                    echo "</div>";
                    echo "<form action='modify.php' method='POST'>
                        <input type='hidden' name='file' value='".$cle."'>
                        <button>Modifier</button>
                        </form>";
                    echo "<form action='delete.php' method='GET'>
                        <input type='hidden' name='file' value='".$cle."'>
                        <button>Supprimer</button>
                        </form>";
                    echo "</div>";
                
            }
        }
        else{
            echo "non connecté";
        }
    ?>
    </main>
</body>

</html>