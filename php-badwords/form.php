
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP FORM</title>
</head>
<body>
    
    <?php

    // messaggio completo
$message=$_POST['message'];
echo $message;
  echo ' '.strlen($message).' caratteri ' ;


//   messaggio con la parola censurata in ***
$badword=$_POST['badwords'];
$message_replace=str_replace($badword,"***",$message);
echo $message_replace;
echo ' '.strlen($message_replace).' caratteri ' ;


  ?>



  
  
  


</body>
</html>