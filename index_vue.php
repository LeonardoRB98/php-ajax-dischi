<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi Vue</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <div id="app">
        <!-- header -->
        <header>
            <div class="wrapper">
                    
            </div>
        </header>
        <!-- /header -->

        <!-- main -->
        <main>
            <div class="wrapper">
                <div class="album_container" v-for="album in albums">
                    <div class="thumbnail_container">
                        <img :src="album.poster" alt="">
                    </div>
                    <h2>{{ album.title }}</h2>
                    <h3>{{ album.author }}</h3>
                    <h4>{{ album.year }}</h4>
                </div>
            </div>
        </main>
        <!-- /main -->
    </div>
    <script src="js/app.js"></script>
</body>
</html>