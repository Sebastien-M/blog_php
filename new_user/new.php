<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nouvel Utilisateur</title>
</head>

<body>
    <?php
        if(isset($_POST['user']) 
            && isset($_POST['pass'])){
            $pseudo = $_POST['user'];
            $pass = $_POST['pass'];
            
            $crypt = md5($pass);
            $crypt2 = sha1($pass);
            if(!is_dir("../utilisateurs")) {
                mkdir("../utilisateurs");
            }
            $new_file = fopen("../utilisateurs/".$pseudo.".txt", "w");
            fwrite($new_file, $crypt);
            fclose($new_file);
        }
    ?>
        <p>Utilisateur créé</p>
        <a href="../index.php">
        <button>Home</button>
        </a>
</body>

</html>