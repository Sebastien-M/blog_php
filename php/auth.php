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


    if(userverif() == true){
        echo "<p>Logged</p>";
        echo '<script> location.href="../index.php"</script>';
        session_start();
    }
    else{
        echo "<p>Wrong user or password</p>";
    }

    function userverif(){
        $files = preg_grep('/^([^.])/', scandir("../utilisateurs"));
        foreach ($files as $key) {
            $filename = $_POST['name']."."."txt";
            $content = file_get_contents("../utilisateurs/".$key);
            if($_POST['name']."."."txt" == $key && md5($_POST['pass']) == $content){
                session_start();
                $_SESSION['user'] = $_POST['name'];
                return true;
            }
        }
    }
    
?>
</body>
</html>
