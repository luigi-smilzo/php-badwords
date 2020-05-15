<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    <?php 
    $paragraph = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda mollitia eveniet, dolorem nostrum neque error minima quod aspernatur ex commodi id deleniti deserunt quae qui dolores quo, saepe eligendi fugit!';
    $length = strlen($paragraph);
    $badword = $_GET['badword'];
    $replacement = str_replace('dolor', '***', $paragraph);
    ?>

    <p><?php echo $paragraph ?></p>
    <p>Questo paragrafo è lungo: <strong><?php echo $length ?></strong> caratteri</p>
    <hr>
    <h3>Prova replacement:</h3>
    <p><?php echo $replacement ?></p>
</body>
</html>