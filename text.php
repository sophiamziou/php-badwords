<?php
$text = $_POST['text'];
$bad_word = $_POST['badword'];
$textlength = strlen($text);
$newtext = str_replace($bad_word, '***', $text);
$newtextlength = strlen($newtext);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>document</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
</head>

<body>
    <h1>
        <?php echo $text . " " . $textlength; ?>
    </h1>
    <h1>
        <?php echo $newtext . " " . $newtextlength; ?>
    </h1>
</body>

</html>