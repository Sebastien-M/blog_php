<?php
    $title = $_POST["titre"];
    $content = $_POST["contenu"];
    if(!is_dir("posts")){
        mkdir("posts");
    }
    $file = fopen("posts/".$title.".txt", "w");
    fwrite($file, $content);
    fclose($file);
    echo "Fichier créé";
?>
    <a href="index.php">
        <button>Home</button>
    </a>
    <a href="create.html">
        <button>Add a Post</button>
    </a>