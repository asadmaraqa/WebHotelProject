<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="../bootstrap_code/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@1,500&family=Montserrat&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

    <link rel="stylesheet" href="../style.css" />
    <title>Web Hotel Co - contact us</title>
</head>

<body>
    <div class="mt-4 container">
        <nav class="navbar navbar-expand-md navbar-light bg-white mx-auto">
            <div class="mx-auto container-lg">
                <a class="navbar-brand mx-auto px-lg-4" href="index.php"><img src="../images/logo.png" alt=""
                        width="260" height="20" class="d-inline-block align-text-top" /></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link px-lg-4 fs-5" aria-current="page" href="../index.php"><b> Home</b></a>
                        </li>
                        <li class="nav-item dropdown px-lg-4 fs-5">
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                            <a class="nav-link px-lg-4 fs-5 " href="contact.html"><b>Contact us</b>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-lg-4 fs-5" href="../pages/login_newuser.html"><b>Login/New user</b>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <section class=>
        <div class="mx-auto">
            <h2 class="text-center heading-font container mt-5">Article</h2>
            <div
                class="card-group row row-cols-md-3 g-4 col-lg-8 col-sm-11 col-xs-11 container mx-auto border p-3 background-custom ">


                <?php    
            include_once("../config.php");
            $id=$_GET['id'];
        $result = mysqli_query($conn, "SELECT articles.article_id, articles.title,articles.text,author,articles.publish_date, users.first_name,users.last_name FROM articles INNER JOIN users
        ON articles.author = users.user_name WHERE article_id=$id");
        while($row = mysqli_fetch_array($result)) {
    ?>
                <div class="col-lg-10 col-lg-10 col-sm-11 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title text-center">
                                <h4> <?php echo $row['title']; ?> </h4><br>
                            </div>
                            <div class="card-text">
                                <?php echo $row['text'];  ?> <br>
                            </div>
                            <div class="d-flex">
                                Author: <?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?>
                            </div>
                            <div>Date: <?php echo $row['publish_date']; ?><br></div>

                        </div>
                    </div>
                </div>

                <?php   
        }  
     ?>
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
    <script src="../bootstrap_code/js/bootstrap.bundle.min.js"></script>
</body>

</html>