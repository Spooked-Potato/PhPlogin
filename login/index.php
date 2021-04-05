<html>
<?php session_start(); ?>
<head>
    <meta charset="UTF-8">
    <title>Fmotos</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!--navbar-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--navbar-->
     <!--Footer-->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Footer-->

    <!--css-->
    <link rel="stylesheet" type="text/css" href="nav.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="footer.css">
    <!--Css-->
    <!--siteicon-->
    <link rel="icon" href="../assets/logo/logotipo.jpg" type="image/gif" sizes="16x16">
    <!--siteicon-->
</head>

<body>
    <!--navabar-->

    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <div class="image_countainer">
                <img src="../assets/logo/logotipo.jpg">
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    </div>
    <!--navbar-->

    <!--login-->
    <section id="facilities">
        <div class="loginbox">

            <h1>Entrar Aqui</h1>
        	<?php
        		if(isset($_SESSION['loginalert']))
        		{
        			echo $_SESSION['loginalert'];
        			unset($_SESSION['loginalert']);
        		}
        	?>
            <form name="login" action="login.php" method="POST">
                <p>Utilizador</p>
                <input type="text" name="utilizador" placeholder="Insira o nome de Utilizador ">
                <p>Palavra-Passe</p>
                <input type="password" name="pass" placeholder="Insira a Palavra-Passe">
                <input type="submit" value="Entrar">
                
            </form>
        </div>
    </section>

    <div class="footer">
        <div class="inner_footer">

            <div class="logo_container">
                <img src="../assets/logo/logotipo.jpg">
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
    </div>

    <!--login-->
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

</body>

</html>