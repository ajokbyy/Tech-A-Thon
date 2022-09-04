<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <li class="nav-item"><a href="home.php" class="nav-link active" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
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


    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/4.jpg" class="d-block w-100" alt="">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Development</h3>
                    <button type="button" class="btn btn-primary">Website</button>
                    <button type="button" class="btn btn-danger">Application</button>
                    <button type="button" class="btn btn-success">Game</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block" id="b2">
                    <h3>Security</h3>
                    <button type="button" class="btn btn-primary">Ethical hacking</button>
                    <button type="button" class="btn btn-danger">Cyber Security</button>
                    <button type="button" class="btn btn-success">Blockchain</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Data Science</h3>
                    <button type="button" class="btn btn-primary">Machine Learning</button>
                    <button type="button" class="btn btn-danger">Artificial Intelligence</button>
                    <button type="button" class="btn btn-success">Operating Systems</button>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>





    <div class="container col-xxl-8 px-4 py-1">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5" id="hello">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="images/5.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" loading="lazy"
                    id="img1">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">Welcome to Code Vikings</h1>
                <p class="lead">Here you will write and share blogs about Web development, Application development, Game
                    development, Cyber Security, Ethical hacking, Blockchain technologies, Data Science, Machine
                    Learning, Artificial Intelligence, Operating Systems with your friends.
                </p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a href="blog.php"><button type="button" class="btn btn-outline-primary btn-lg px-4 me-md-2">Click me to write the blog
                        &nbsp;<i class="fa-solid fa-arrow-right-long"></i></button></a>
                    <!-- <button type="button" class="btn btn-outline-danger btn-lg px-4">Default</button> -->
                </div>
            </div>
        </div>
    </div>

    <!-- <form action="/action_page.php" class="blog1">
        <h3 id="w1">Write your Blog</h3>
        <textarea id="w3review" name="w3review" rows="4" cols="50" placeholder="Write your blog here"></textarea>
        <br>
        <input type="submit" value="Submit">
      </form> -->

    <div class="row mb-2">
        <h3 id="popularblogs">Popular blogs</h3>
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">Development</strong>
                    <h3 class="mb-0">Android development</h3>
                    <div class="mb-1 text-muted">Seb 03, 2022</div>
                    <p class="card-text mb-auto">Android software development is the process by which applications are
                        created for devices running the Android operating system.</p>
                    <a href="blog.php#n1" class="stretched-link">Continue reading</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <!-- <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                        role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                        focusable="false"> -->
                    <title>Placeholder</title>
                    <!-- <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
                            dy=".3em">Thumbnail</text> -->
                    <img src="images/7.jpg" alt="" width="200" height="250">
                    <!-- </svg> -->

                </div>
            </div>
        </div>


        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success">Data Science</strong>
                    <h3 class="mb-0">Machine Learning</h3>
                    <div class="mb-1 text-muted">Seb 03, 2022</div>
                    <p class="mb-auto">Machine learning (ML) is a type of artificial intelligence (AI) that allows software applications to become more accurate</p>
                    <a href="blog.php#n2" class="stretched-link">Continue reading</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <!-- <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                        role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                        focusable="false"> -->
                    <title>Placeholder</title>
                    <!-- <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
                            dy=".3em">Thumbnail</text> -->
                    <img src="images/8.jpg" alt="" width="200" height="250">
                    <!-- </svg> -->

                </div>
            </div>
        </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>


</body>

</html>