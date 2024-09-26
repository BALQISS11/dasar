<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" href="index.php?halaman=welcome">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?halaman=hari1">haripertama</a>
                                </li>
                                <a class="nav-link" href="index.php?halaman=hari1">harikedua</a>
                                </li>
                                <a class="nav-link" href="index.php?halaman=hari1">hariketiga</a>
                                </li>
                                <a class="nav-link" href="index.php?halaman=hari1">harikeempat</a>
                                </li>
                                <a class="nav-link" href="index.php?halaman=hari1">harikelima</a>
                                </li>
                                <a class="nav-link" href="index.php?halaman=hari1">harikeenam</a>
                                </li>
                                <a class="nav-link" href="index.php?halaman=hari1">hariketujuh</a>
                                </li>
                                <a class="nav-link" href="index.php?halaman=hari1">harikedelapan</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

    <?php 

        if(isset($_GET['halaman'])){
            switch ($_GET['halaman']){
                case "haripertama":
                    include "haripertama/index.php";
                    break;
                case "harikedua":
                    include "harikedua/index.php";
                    break;
                case "hariketiga":
                    include "hariketiga/index.php";
                    break;
                case "harikeempat":
                    include "harikeempat/index.php";
                    break;
                case "harikelima":
                    include "harikelima/index.php";
                    break;
                case "harikeenam":
                    include "harikeenam/index.php";
                    break;
                case "hariketujuh":
                    include "hariketujuh/index.php";
                    break;
                case "harikedelapan":
                    include "harikedelapan/index.php";
                    break;
                }
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>