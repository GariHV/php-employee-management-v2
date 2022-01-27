<!-- meta -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Bootstrap -->
<<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- FontAwesome -->
<script src="https://kit.fontawesome.com/63f29c9463.js" crossorigin="anonymous"></script>
<!-- My styles/Scripts -->
<link rel="stylesheet" href=" <?= CSS.'main.css'; ?>">
<script src=" <?= JS.'checkPath.js'; ?>" defer></script>

<!-- HEADER VISUAL -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <!-- TODO NOMBRE VARIABLE DE DASHBOARD -->
        <a class="navbar-brand">Employee management</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" id="actualPage"></a>
                </li>
                <li class="nav-item">
                    <a id="alterPage" class="nav-link"></a>
                </li>
            </ul>
            <!-- logout form -->
            <form action="./library/loginController.php" method="post" class="d-flex align-items-center">
                <div id="userLogged" class="d-flex flex-row gap-2 m-lg-4">
                    <i class="fas fa-user-circle fa-2x"></i>
                    <p id="nameLogged">admin</p>
                </div>

                <button name="logout" id="logout" type="submit" class="btn btn-outline-warning">Logout</button>
            </form>
        </div>
    </div>
</nav>