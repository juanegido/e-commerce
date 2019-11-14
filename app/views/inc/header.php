<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device=width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="id=edge">
    <link rel="stylesheet" type="text/css" href="<?php echo PATH_URL; ?>/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<title><?php echo SITENAME; ?></title>
</head>
<body>
    <!--Navegación-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">
                <p>TACHBOT</p>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a id="1" class="nav-item nav-link" href="about">SOBRE NOSOTROS</a>
                    <a class="nav-item nav-link" href="services">SERVICIOS</a>
                    <a class="nav-item nav-link" href="skills">HABILIDADES</a>
                    <a class="nav-item nav-link active" href="/LOGIN_Tachbot/vista/homePage.php">BOTS</a>
                    <a class="nav-item nav-link" href="blog">BLOG</a>
                    <a class="nav-item nav-link" href="contact">CONTACTO</a>
                    <a class="nav-item nav-link" href="/LOGIN_Tachbot/vista/login.php">LOGIN <span
                            class="sr-only"></span></a>
                </div>
            </div>
        </div>
    </nav>

	
	<!--JAVASCRIPT-->
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>