<?php
$insert = FALSE;
if (isset ($_POST ['name'])){


    $server = "localhost";
    $username = "root";
    $password = "";

    $con =  mysqli_connect($server, $username, $password);

    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }

    
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `cont`.`cont` (`name`, `mail`, `desc`, `date`) VALUES ('$name', '$mail', '$desc', current_timestamp());";

    
if($con->query($sql) == true){
    // echo "Successfully inserted";

    // Flag for successful insertion
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}

// Close the database connection
$con->close();

}
// <!-- INSERT INTO `reg` (`reg_number`, `name`, `degree`, `year`, `date`) VALUES ('12016462', 'abhiraj', 'b-tech', '20026', '2022-08-15 09:54:19.000000'); -->
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

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
                <li class="nav-item"><a href="contact.php" class="nav-link active">Contact</a></li>
                <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
            </ul>

            <div class="searchbar">
                <form action="/action_page.php">
                    
                    
                </form>
            </div>
        </header>
    </div>
    <style>
*{
    margin: 0;
    padding: 0;
}
.top{
    width: 15rem;
    height: 15rem;
    padding: 1em;
}
.haad{
    border: 5px ;
display: flex;
justify-content: center;
}
header{
    border: 5px ;
display: flex;
justify-content: center;
}
.bg{
    width: 100%;
    position: absolute;
    z-index: -1;
    opacity: 0.6;
}
form{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}
input, textarea{
    
    border: 2px solid black;
    border-radius: 6px;
    outline: none;
    font-size: 16px;
    width: 70%;
    margin: 11px 0px;
    padding: 7px;
}
.btn{
    color: white;
    background-color: rgb(107, 202, 247);
    padding: 8px 12px;
    font-size: 20px;
    border: 2px solid white;
    border-radius: 14px;
    cursor: pointer;
}

.submitMsg{ 
    border: 1rem solid transparent;
    background-color: rgb(107, 202, 247);
    text-align: center;
}
</style>
<body>
<header>

<h1>Contact Form</h1>


</header>
<?php
        if($insert == true){
        echo "<br><p class='submitMsg'>Thanks for submitting your form.</p>";
        }
    ?>
<!-- reg_number, name, degree, AND  passout year -->
<form action="cont.php" method="post">
    <input type="text" name="name" id="name" placeholder="Enter your Name">
    <input type="text" name="mail" id="mail" placeholder="Enter your Email">
    <!-- <input type="email" name="email" id="email" placeholder="Enter your email"> -->
    <!-- <input type="phone" name="year" id="year" placeholder="Enter your Passout Year"> -->
    <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
    <button class="btn">Submit</button> 
</form>
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

<script src="script.js"></script>

</html>




