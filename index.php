<?php
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>document</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>
    <div class="container-flui">
        <div class="row">
            <div class="col m-4">
                <form action="./text.php" method="POST">
                    <input type="text" name="text" id="testo" placeholder="text">
                    <input type="text" name="badword" id="censura" placeholder="bad word">
                    <button class="btn btn-sm btn-primary" type="submit">submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>