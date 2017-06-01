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
    <a href="create.html"><button>Add a Post</button></a>
    <h1>Posts</h1>
    <?php
        $dir = "posts/";
        $indir = array_filter(scandir('posts/'), function($item) {
            return !is_dir('posts/' . $item);
        });
        foreach($indir as $cle) {
                echo "<div class='article'>";
                echo "<h3>" . $cle . "</h3>";
                $content = file_get_contents($dir . $cle);
                echo $content;
                echo "<form action='modify.php' method='POST'>
                    <input type='hidden' name='file' value='".$cle."'>
                    <button>Modifier</button>
                    </form>";
                echo "<form action='delete.php' method='POST'>
                    <input type='hidden' name='file' value='".$cle."'>
                    <button>Supprimer</button>
                    </form>";
                echo "</div>";
                
        }
    ?>
</body>

</html>