<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Konsultacje</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
<div class='container'>
    <nav>
        <div class="nav-wrapper">
            <a href="/home" style='margin-left:1em' class="brand-logo">KonsultacjeAPP</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="/konsultacje" class='nav-ele'>Umów konsultacje</a></li>
                <li><a href="#" class='nav-ele'>Zarządzaj konsultacjami</a></li>
            </ul>
        </div>
    </nav>
    <div id='content'>
        @yield('content')
    </div>
    <div id='footer'>
        <p>Autorzy: Kasprzak Dominik, Bartosz Glanowski</p>
        <p>Github projektu: <a class='footer-link' href='https://github.com/Salixu/Slim-app-project'>tutaj</a></p>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="../js/materialize.min.js"></script>
</body>
</html>
