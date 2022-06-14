<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    
    <link rel="stylesheet" type="text/css" href="../assets/css/variables.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/navbar_mobile.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/landingPage.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/add_Event.css">

    <script src="https://unpkg.com/scrollreveal"></script>
</head>

<body>
    <div id="toggle"></div>
    <div id="sidebar">
        <header>
            <nav class="nav-list" id="nav-bar">
                <a class="link-logo" href="#start">
                    <img src="../assets/img/logo-simplifica-eventos-white.svg" alt="Logo Simplifica Eventos"
                        id="logo">
                </a>

                <ul class="list">
                    <li class="item"><a href="../index.php">HOME</a></li>
                    <li class="item"><a href="./services.php"><span>SERVIÇOS</span></a></li>
                    <li class="item"><a href="">PACOTES</a></li>
                    <li class="item"><a href="./loginUser.php"><?= isset($_SESSION['section_user']) ? 'DASHBOARD' : 'LOGIN' ?></a></li>
                </ul>
            </nav>
        </header>
    </div>