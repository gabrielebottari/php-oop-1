<?php
    include __DIR__ . './db.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <!-- CSS -->
        <link rel="stylesheet" href="css/style.css">
        <title>PHP OOP 1</title>
    </head>
    <body class="bg-primary">
        <div class="container">
            <h1 class="text-center text-warning fw-bold p-5">Lista Saghe Cinematografiche</h1>
            <div class="row">
                <?php foreach ($movies as $movie) { ?>
                    <div class="col-4">
                        <div class="card border-primary">
                            <img src="<?php echo $movie->imageUrl; ?>" class="card-img-top" alt="...">
                            <div class="card-body bg-primary fw-bolder">
                                <h3 class="card-title text-warning"><?php echo $movie->title; ?></h3>
                                <p class="card-text"><?php echo $movie->getDescription(); ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>