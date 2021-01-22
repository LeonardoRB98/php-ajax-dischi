<?php include 'db.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <title>Dischi</title>
</head>
<body>
    <header>
        <div class="wrapper">
            
        </div>
    </header>
    <main> 
        <div class="wrapper">
            <?php foreach ($albums as $album) { ?>
            <div class="album_container">
                <div class="thumbnail_container">
                    <img src=<?php echo $album[poster]; ?> alt="poster">
                </div>
                <h2><?php echo $album[title]; ?></h2>
                <h3><?php echo $album[author]; ?></h3>
                <h4><?php echo $album[year]; ?></h4>
            </div>
            <?php } ?>
        </div>
    </main>
</body>
</html>