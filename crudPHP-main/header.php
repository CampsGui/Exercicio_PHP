<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <!-- link bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet"/>
    <!-- <link rel="stylesheet" href="./css/style.css"> -->
    <style>
        body {
            margin: 0;
            padding: 0;
            color: #f2f2f2;
            font-family: 'Poppins', sans-serif;
        }

        body a {
            color: #f2f2f2;
            font-family: 'Poppins', sans-serif;
        }

        .video-background {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -1;

        }

        .content {
            position: relative;
            z-index: 1;
            padding: 20px;
            color: white;
            text-align: center;
        }
    </style>
</head>
<body>
    <video class="video-background" autoplay muted loop>
        <source src="videos\video.mp4" type="video/mp4" />
    </video>

    <div class="content">
        <header> 
            <div class="container-fluid p-5 bg-primary text-white text-center">
                <h1>SGE - Sistema de Gerenciamento Escolar</h1>
                <p></p>
            </div>
        </header>
    </div>
</body>
</html>