<?php
    $title = $_POST["titre"];
    $content = $_POST["contenu"];
    //$file = fopen($title.".txt", "w");
    $file = fopen("txt/".$title.".txt", "w");
    fwrite($file, "Titre : ".$title."\n"."Contenu : ".$content);
    fclose($file);
    echo "Fichier créé";
?>

    <a href="create.html">
        <button>Home</button>
    </a>