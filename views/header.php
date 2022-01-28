<!-- meta -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<!-- Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<!-- FontAwesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- JS-Grid CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js" integrity="sha512-blBYtuTn9yEyWYuKLh8Faml5tT/5YPG0ir9XEABu5YCj7VGr2nb21WPFT9pnP4fcC3y0sSxJR1JqFTfTALGuPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>-->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"> -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --> -->
<!-- My styles/Scripts -->
<link rel="stylesheet" href="<?= CSS. '/main.css'; ?>">
<script src="<?= JS. '/checkPath.js'; ?>" defer></script>
<script src="<?= JS. '/dashboard.js'; ?>" defer></script>


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