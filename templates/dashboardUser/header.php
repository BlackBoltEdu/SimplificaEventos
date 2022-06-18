<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - Simplifica Eventos</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="../assets/bootstrap/assets/img/favicon.png" rel="icon">
  <link href="../assets/bootstrap/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  <link href="../assets/bootstrap/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/bootstrap/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/bootstrap/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/bootstrap/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assets/bootstrap/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assets/bootstrap/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/bootstrap/assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link href="../assets/css/styleAdmin.css" rel="stylesheet">
  <link href="../assets/bootstrap/assets/css/style.css" rel="stylesheet">
</head>

<body>

  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Simplifica Eventos</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

       

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?= $_SESSION['section_user']['name'] ?></span>
          </a>

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?= $_SESSION['section_user']['name'] ?></h6>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sair</span>
              </a>
            </li>

          </ul>
        </li>

      </ul>
    </nav>

</header>