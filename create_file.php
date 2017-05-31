<?php
    $title = $_POST["titre"];
    $content = $_POST["contenu"];
    //$file = fopen($title.".txt", "w");
    if(!is_dir("posts")){
        mkdir("posts");
    }
    $file = fopen("posts/".$title.".txt", "w");
    fwrite($file, "Titre : ".$title."\n"."Contenu : ".$content);
    fclose($file);
    echo "Fichier créé";
?>
    <a href="create.html">
        <button>Home</button>
    </a>
    <a href="index.php">
        <button>Add a Post</button>
    </a>