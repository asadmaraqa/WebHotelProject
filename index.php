<?php session_start();
//Validation login Session

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="bootstrap_code/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@1,500&family=Montserrat&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="style.css" />
    <title>Web Hotel Co</title>
</head>

<body>
    <div class="mt-4 container-fluid">
        <nav class="navbar navbar-expand-md navbar-light bg-white">
            <div class="mx-auto container-lg ">
                <a class="navbar-brand mx-auto px-lg-4" href="index.php"><img src="images/logo.png" alt="" width="260"
                        height="20" class="d-inline-block align-text-top" /></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a class="nav-link active px-lg-4 fs-5 " aria-current="page" href="index.php"><b>
                                    Home</b></a>
                        </li>

                        <li class="nav-item dropdown px-lg-4 fs-5">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <b>Articles</b>
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-lg-4 fs-5" href="pages/contact.html"><b>Contact us</b> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-lg-4 fs-5" href="pages/login_newuser.html"><b>Login/New user</b>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <img class="justify-content-end img-fluid" src="images/g832.png" width="600" alt="" />
                </div>
                <div class="col-lg-6 text-center my-auto ">
                    <div>
                        <h1 class="heading-font display-4">
                            Faster and more secure <br />
                            hosting
                        </h1>
                        <h4 class="mt-4 text-muted">
                            You have came the right web hositing website, We will take care of
                            you.
                        </h4>
                    </div>
                </div>
            </div>
    </section>
    <div class="container mt-5">
        <?php
    if (isset($_SESSION['fname'])) {
        echo "Welcome";
        echo $_SESSION['fname'];
        echo '<div class="form-group"><div class="form-group" align="center"><a class="btn btn-primary btn" href="php/logout.php" style="color:white">Logout</a> </div>   </div>';
 
        }else { echo "Hello Please sign in"; }
        ?>
        <hr>

        <section>
            <h2 class="text-center heading-font container">Articles categories</h2>
            <div
                class="card-group row row-cols-md-2 row-cols-lg-3 col-lg-8 g-3 container mx-auto border p-2 background-custom "><?php
    include_once("config.php");
    $sql = "SELECT category_id, name,image,description FROM categories";
    $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
    while( $record = mysqli_fetch_assoc($resultset) ) {
    ?><div class="col">
                    <div class="card mx-auto " style="width: 15rem">
                        <div>
                            <div>
                                <a href="category.php?<?php echo $record['id']; ?>"><img alt="" class="card-img-top"
                                        src="<?php echo $record['image']; ?>"></a>
                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="card-title">
                                <a href="#"><?php echo $record['name']; ?></a>
                            </div>

                            <div class="card-text"><?php echo $record['description']; ?></div>

                        </div>

                    </div>
                </div>
                <?php } ?></div>
        </section>

        <section>
            <div>
                <h2 class="text-center heading-font  mt-5">Last Articles</h2>
                <div
                    class="card-group row row-cols-lg-3 row-cols-md-2 g-4 col-lg-8 col-xs-10 container mx-auto border p-3 background-custom ">


                    <?php    
        $result = mysqli_query($conn, "SELECT articles.article_id, articles.title,SUBSTRING(articles.text,1,50),articles.author,articles.publish_date,users.first_name, users.last_name FROM articles INNER JOIN users
        ON articles.author = users.user_name  order by article_id desc ");
        while($row = mysqli_fetch_array($result)) {
    ?>
                    <div>
                        <div class="card mx-auto  ">
                            <div class="card-body">
                                <div class="card-title"> <?php echo $row['title']; ?><br>
                                </div>
                                <div class="card-text"> <?php echo $row['SUBSTRING(articles.text,1,50)'];  ?> ...<br>
                                </div>
                                <div>Author:<?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?> </div>
                                <div>Date: <?php echo $row['publish_date']; ?><br></div>
                                <a href="pages/articales.php?id=<?php echo $row['article_id'] ?>">
                                    <button class=" btn btn-primary btn-custom">Read
                                        more</button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <?php   
        }  
     ?>


                </div>
            </div>
    </div>
    </section>
    <section>
        <!-- Footer -->
        <footer class="footer-custom text-center text-white mx-auto mt-4">
            <!-- Grid container -->
            <div class="container p-4">
                <!-- Section: Links -->
                <section class="">
                    <!--Grid row-->
                    <div class="row justify-content-between">
                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase">Customer support</h5>

                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#!" class="text-white">support@webhotel.com</a>
                                </li>
                                <li>Phone: 0 1234567</li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase">Sales</h5>

                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#!" class="text-white">sale@webhotel.com</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white">phone 0 1234567</a>
                                </li>
                            </ul>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4 mb-md-0 mx-sm-auto">
                            <h5 class="text-uppercase">Social media</h5>

                            <ul class="list-unstyled d-flex d-inline-flex mb-0">
                                <li>
                                    <a class="btn btn-outline-light btn-floating m-1" href="#" role="button"><i
                                            class="bi bi-facebook"></i></a>
                                </li>
                                <li>
                                    <a class="btn btn-outline-light btn-floating m-1" href="#" role="button"><i
                                            class="bi bi-twitter"></i></a>
                                </li>
                                <li>
                                    <a class="btn btn-outline-light btn-floating m-1" href="#" role="button"><i
                                            class="bi bi-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="btn btn-outline-light btn-floating m-1" href="#" role="button"><i
                                            class="bi bi-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </section>
                <!-- Section: Links -->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                © 2021 Copyright:
                <a class="text-white" href="#">Asad Maraqa</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </section>
    <script src="bootstrap_code/js/bootstrap.bundle.min.js"></script>
</body>

</html>