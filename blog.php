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

    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>

    <style>
        body{
            text-align:center;
        }

        textarea {
  width: 400px;
  height: 200px;
}
</style>
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
                <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                <li class="nav-item"><a href="blog.php" class="nav-link active">Blog</a></li>
            </ul>

            <div class="searchbar">
                <form action="/action_page.php">
                    <input type="text" placeholder="Search" name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </header>
    </div>


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
        $Heading = $_POST['Heading'];
        $Subheading = $_POST['Subheading'];
        $com = $_POST['com'];
    
        // $name = $get['name'];
    
        $sql = " INSERT INTO `blog`.`blog`(`name`, `Heading`, `Subheading`, `com`, `date`) VALUES ('$name', '$Heading', '$Subheading', '$com', current_timestamp());";
         
       
    if($con->query($sql) == true){
        // echo "Successfully inserted";
    
        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    
    
    // $sql =  mysqli_query(Object(mysqli), 'NULL, "SELECT * FROM blog;"');
    // $result = mysqli_query($con, $sql);
    
    // $resultCheck = mysqli_num_rows($result);
    // if($resultCheck>0){
    //     while($row = mysqli_fetch_array($result)){
    //         echo $row["name"]."<br>";
    //     }
    // }
    
    // Close the database connection
    $con->close();
    
    }
    // <!-- INSERT INTO `reg` (`reg_number`, `name`, `degree`, `year`, `date`) VALUES ('12016462', 'abhiraj', 'b-tech', '20026', '2022-08-15 09:54:19.000000'); -->
    ?>
    
    
    <style>
    .container{
        text-align: center;
        padding: 1em;
    }
    .container2{
        /* text-align: center; */
        padding: 1em;
    }
    ol{
        text-decoration: none;
        list-style: none;
        border: 3px solid black;
        width: 50%;
    
    }
    </style>
    <body>
    <!-- <div class="container">
        <div class="row">
             <button class="reg">Register</button>
             <button class="reg">Register</button>
    
        </div>
    </div> -->

<style>

.form .name{
    width: 20%;
    display: inline;
}
.btn{
    background-color: rgb(107, 202, 247);
}
.ok{
    width: 90%;
    border-radius: 6px;
    outline: none;
    font-size: 16px;
    margin: 11px 0px;
    padding: 1em;
    text-align: center;

}
</style>
    <form action="index.php" method="post" class="form">
    <div class="ok">
        Name <input type="text" id="name" name="name" class="name"><br> 
        <br>
        <br>
    
        Stream <input type="text" id="Heading" name="Heading"><br> 
        <br>
        <br>
    
        Sub Stream <input type="text" id="Subheading" name="Subheading"><br> 
        <br>
        <br>
    </div>
    
    
        <textarea name="com" id="com" cols="30" rows="10" placeholder="Write your blog here.."></textarea>
        <br>
        <br>

    
        
        <button class="btn">Add Blog </button>
       
    
    </form>
    <?php
    ?>
    <!-- <h1>Thank You</h1>
    <p>Here is the information you have submitted:</p>
    <ol >
        <li><em>Name:</em> <?php echo $_POST["name"]?></li>
        <li><em></em> <?php echo $_POST["Heading"]?></li>
        <li><em></em> <?php echo $_POST["Subheading"]?></li>
        <li><em></em> <?php echo $_POST["com"]?></li>
    </ol> -->

<br><br>
    <div class="container">

    <h2  id="n1">Development</h2>
    <h3 id="ad1">Android Development</h3>
        <p>Android software development is the process by which applications are created for devices running the Android operating system. Google states that “Android apps can be written using Kotlin, Java, and C++ languages” using the Android software development kit (SDK), while using other languages is also possible. All non-Java virtual machine (JVM) languages, such as Go, JavaScript, C, C++ or assembly, need the help of JVM language code, that may be supplied by tools, likely with restricted API support. Some programming languages and tools allow cross-platform app support (i.e. for both Android and iOS). Third party tools, development environments, and language support have also continued to evolve and expand since the initial SDK was released in 2008. The official Android app distribution mechanism to end users is Google Play; it also allows staged gradual app release, as well as distribution of pre-release app versions to testers.</p>

        <br><br>

    <h2  id="n2">Data Science</h2>
    <h3 id="ml1">Machine Learning</h3>
        <p>Machine learning (ML) is a type of artificial intelligence (AI) that allows software applications to become more accurate at predicting outcomes without being explicitly programmed to do so. Machine learning algorithms use historical data as input to predict new output values.
Recommendation engines are a common use case for machine learning. Other popular uses include fraud detection, spam filtering, malware threat detection, business process automation (BPA) and Predictive maintenance.</p>
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