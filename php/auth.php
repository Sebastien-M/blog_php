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
    }
    else{
        echo "<p>Wrong user or password</p>";
        echo md5($_POST['pass']);

    }

    function userverif(){
        $name = file_get_contents("../json/users.json");
        $json = json_decode($name);
        $pass = md5($_POST['pass']);
        echo $pass;
        
        foreach ($json as $key => $value) {
            if($_POST['name'] == $value->{'name'} && $pass == $value->{'password'}){
                return true;
            }
        }
    }
    
?>
</body>
</html>
