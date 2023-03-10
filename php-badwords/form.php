<?php

// messaggio completo
$message=$_POST['message'];
// echo "<h2>$message</h2>";

$message_length=strlen($message);
// echo "<p>$message_length</p>";


// messaggio con la parola censurata in ***
$badword=$_POST['badwords'];

$message_replace=str_replace($badword,"***",$message);
// echo "<h3>$message_replace</h3>";

$message_replace_length=strlen($message_replace);
// echo "<p>$message_replace_length</p>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP FORM</title>
</head>
<body>
    
<h2>IL MESSSAGGIO ORIGINALE E':</h2>
<p> 
  <?=$message ?> <br>
  lunghezza messaggio: <?= $message_length?>
</p>

<h2>MESSAGGIO CENSURATO:</h2>
<p>
  <?= $message_replace?> <br>
  lunghezza messaggio censurato: <?= $message_replace_length?>
</p>

  
  
  


</body>
</html>