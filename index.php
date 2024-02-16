<?php
    include __DIR__ . './db.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP OOP 1</title>
    </head>
    <body>
        <h1>Lista Film</h1>
        <ul>
            <?php foreach ($movies as $movie): ?>
            <li><?php echo $movie->getDescription(); ?></li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>