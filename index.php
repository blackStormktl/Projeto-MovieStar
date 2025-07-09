
<?PHP
    include_once('globals.php');
    include_once('db.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoveStar</title>
    <link rel="shortcut icon" href="img/moviestar.ico" type="image/x-icon">

    <!-- icones -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- css bootstrap -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.7/css/bootstrap.css" integrity="sha512-Dg29JTs/r029HFd/aOkPcgmeELzRHukL99WqC7FPC+oyF4DClbMLlQANt5tXI1sgjpBGbcQIRqR4YNjI2LbNeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


          <!-- css do projeto -->
       <link rel="stylesheet" href="<?=$URL_BASE?>/css/style.css">


</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg" id="main-navbar">
            <a href="<?=$URL_BASE?>" class="navbar-brand">
                <img src="<?=$URL_BASE?>img/logo.svg" alt="MoviStar" id="logo">
                <span id="moviestar-title">MovieStar</span>
            </a>

            <button class="navbar-toggler" data-toggle="collpase" data-target="#navbar" type="button" area-controls="navbar" aria-expanded="false" aria-label="toggle-navigation">
                <i class="fas fa-bars"></i>
            </button>


        <form action="" method="GET" id="serach-form" class="form-inline my-2 my-lg-0">
            <input type="search" name="q" id="search" class="form-control mr-sm-2" placeholder="Buscar Filmes" aria-label="Search">

            <button class="btn my-2 my-sm-0" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>

        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="<?=$URL_BASE?>auth.php" class="nav-link">Entrar /Cadastrar</a>
                </li>
            </ul>
        </div>
    </nav>
    </header>
    <div id="main-container" class="container-fluid">
        <h1>corpo do site</h1>
    </div>


    <footer id="footer">
    <div class="social-container">
        <ul>
            <li>
                <a href="http://">
                    <i class="fab fa-facebook"></i>
                </a>
            </li>


            <li>
                <a href="http://">
                    <i class="fab fa-instagram"></i>
                </a>
            </li>


            <li>
                <a href="http://">
                    <i class="fab fa-youtube"></i>
                </a>
            </li>
        </ul>
    </div>
    <div id="footer-links-container">
            <ul>
                <li>
                    <a href="http://">Adicionar Filme</a>
                </li>

                <li>
                    <a href="">Adicionar critica</a>
                </li>

                <li><a href="Entrar / registrar"></a></li>
            </ul>
        </div>

        <p>&copy;2025 BeetWare</p>
    </footer>


     <!-- js bootstrap -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.7/js/bootstrap.js" integrity="sha512-4rgYnurxnFSdCDrgqqH1h/sOb4/tUd1MXYeCeu5PcYa+svtguh06/TGpvGwvJB6a3SNp2cDaN2f8F5yZ1o/vPg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>