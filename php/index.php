<?php include __DIR__ . '/partials/database.php' 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Css-->
    <link rel="stylesheet" href="./style.css">

    <title>Php Ajax Dischi</title>
</head>
<body>
    <!--Header-->
    <header>
        <div class="container">
            <img class="logo" src="./img/logo.png" alt="Spotify">
        </div>
    </header>

    <!--Main-->
    <main>
        <div class="container">
            <?php foreach ($database as $content) { ?>
                <ul class="cards">
                    <li><img src="<?php echo $content['poster']?>" alt=""></li>
                    <li><h4> <?php echo $content['title']; ?> </h4></li>
                    <li><h6><?php echo $content['author']; ?></h6></li>
                    <li><h5><?php echo $content['year']; ?></h5></li>
                    <li><h6><?php echo $content['genre']; ?></h6></li>
                </ul>

            <?php } ?>
        </div>
    </main>
</body>
</html>