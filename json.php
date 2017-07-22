<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 <form  method="POST" action="#">
        <label>Pseudo</label>
        <input type="text" name="user">
        <label>mot de passe</label>
        
        <input type="password" name="password">
        <button>Envoyer</button>
</form>

    <?php 
         $array = [
            [
                 "login" => "admin",
                 "password" => "admin",
             ],
         ];

         echo '<p>'.var_dump($array).'</p>';

         $json = json_encode($array,true);

         echo '<p>'.var_dump($json).'</p>';

         $file = fopen('user.json','w+');
         fwrite($file, $json);
         fclose($file);

        $user1 = [
            "login" => ''.$_POST['user'].'',
            "password" => ''.$_POST['password'].'',
        ];

        $content = file_get_contents('user.json');

        echo '<p>'.var_dump($content).'</p>';

        $decode = json_decode($content,true);

        echo '<p>'.var_dump($decode).'</p>';

        array_push($decode,$user1);

        echo '<p>'.var_dump($decode).'</p>';

        $json2 = json_encode($decode,true);

        echo '<p>'.var_dump($json2).'</p>';

        $file = fopen('user.json','w+');
        fwrite($file, $json2);
        fclose($file);
    ?>
</body>
</html>