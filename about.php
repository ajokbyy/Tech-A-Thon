<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

    <title>Blog Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a5ba3abdc4.js" crossorigin="anonymous"></script>
</head>


<body>

    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <span class="logo">
                    <img class="fs-4" src="images/logo.png" alt="">
                    <span class="fs-4" id="name">Code Vikings</span>
                </span>
            </a>

            <ul class="nav nav-pills" id="nav1">
                <li class="nav-item"><a href="home.php" class="nav-link" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                <li class="nav-item"><a href="about.php" class="nav-link active">About</a></li>
                <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
            </ul>

            <div class="searchbar">
                <form action="/action_page.php">
                    <input type="text" placeholder="Search" name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </header>
    </div>


    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <p class="col-md-4 mb-0 text-muted">© Codevikings Inc, 2022</p>

            <a href="/"
                class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap"></use>
                </svg>
                <img class="fs-4" src="images/logo.png" alt="" width="80">
            </a>

            <ul class="nav col-md-4 justify-content-end">
                <li class="nav-item"><a href="home.php" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link px-2 text-muted">Contact</a></li>
                <li class="nav-item"><a href="about.php" class="nav-link px-2 text-muted">About</a></li>
                <li class="nav-item"><a href="blog.php" class="nav-link px-2 text-muted">Blog</a></li>
                <!-- <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li> -->
            </ul>
        </footer>
    </div>


    <a href="#" class="gotop"><i class="fas fa-arrow-up"></i></a>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>

<script src="js/script.js"></script>

</html>