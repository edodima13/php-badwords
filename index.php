<?php 
    //creare una variabile con file di testo
    $text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod quas voluptatum vel perferendis eveniet accusamus iste nulla, sit officiis fuga.';
    //stampare il testo e la sua lunghezza
    $lenght_text = strlen($text);
    //far generare dall'utente una parola da censurare tramite get
    $badword = $_GET['badword'];
    //sostituire con tre (***) la parola da censurare
    $censored_text = str_replace($badword, '***', $text);
?>
<?php 
    echo $censored_text; 
    echo $lenght_text;  
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>