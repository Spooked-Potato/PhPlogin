<?php 
	session_start();
		$user = $_SESSION['user'];
        setcookie("tempo", true, time() + 60);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fmotos</title>
    <!--navbar-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--navbar-->
    <!--Cards-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,300,400&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!--Cards-->
    <!--Footer-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Footer-->
    <!--css-->
    <link rel="stylesheet" type="text/css" href="nav.css">
    <link rel="stylesheet" type="text/css" href="info.css">
    <link rel="stylesheet" type="text/css" href="footer.css">
    <!--css-->
    <!--siteicon-->
    <link rel="icon" href="../assets/logo/logotipo.jpg" type="image/gif" sizes="16x16">
    <!--siteicon-->
</head>

<body>

    <!--navabar-->

    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <div class="image_countainer">
                <img src="../../assets/logo/logotipo.jpg">
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto">
                <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../../_cliente/Brands/index.php">Marcas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../category/index.php">Estilos-Kawasaki</a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link" style="color:white" aria-current="page" href="../../_cliente/logout.php">Sair [ <?php echo $user; ?> ]</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    </div>
    <!--navbar-->

    <!--info-->

    <section id="facilities">
        <div class="container">
            <div class="title">
                <h1>Mota Versus-1000</h1>
                <p>Toda a informação sobre a mota Versus-1000!</p>
                <hr>
            </div>
            <div class="row">
                <div class="main">
                    <div class="content">
                        <img src="../assets/Versus1000.jpg" alt="Ducati" style="width:100%"><br>
                        <br><br>
                        <p>Qualquer que seja o seu caminho,a nova Versys 1000 oferece o máximo prazer de condução.</p>
                        <p>Sozinho ou acompanhado, em qualquer canto do mundo, a combinação perfeita de um motor quatro cilindros em linha de elevado desempenho com um quadro verdadeiramente ágil,torna-se a receita perfeita para uma viagem única e muito divertida.</p>
                        <p> Juntando uma posiçãode condução mais vertical, temos o pacote ideal para as voltas na cidade, o que de formanatural se sentirá nos caminhos mais sinuosos.</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--info-->

    <!--footer-->
    <div class="footer">
        <div class="inner_footer">

            <div class="logo_container">
                <img src="../../assets/logo/logotipo.jpg">
            </div>

            <div class="footer_third">
                <h1>Feito Por</h1>
                <a href="#">Artur Dias </a>
            </div>

            <div class="footer_third">
                <h1>Contactos</h1>
                <p>a29060@aemtg.pt</p>
            </div>

            <div class="footer_third">
                <h1>Turma e Numero</h1>
                <p> Turma 12G,<br>
                    Numero 2</p>
            </div>
        </div>
    <!--footer-->
    <!--nav-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <!--nav-->
    <!--cards-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!--cards-->
</body>

</html>