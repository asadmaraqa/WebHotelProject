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
    <div class="mt-4 container-fluid">
        <nav class="navbar navbar-expand-md navbar-light bg-white mx-auto">
            <div class="mx-auto container-lg">
                <a class="navbar-brand mx-auto px-lg-4" href="../index.php"><img src="../images/logo.png" alt=""
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
                            <a class="nav-link px-lg-4 fs-5" href="contact.html"><b>Contact us</b>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-lg-4 fs-5 active" href="login_newuser.html"><b>Login/New user</b>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <section>
        <h2 class="text-center heading-font mt-5">New User</h2>
        <div class="
          card-group
          row 
          g-4
         col-lg-7 col-sm-10
          container
          mx-auto
          border
          p-3
          background-custom
        ">

            <div class="mx-auto mt-5 col-lg-6 col-md-10 col-xs-11">
                <form action="../php/regnewuser.php" method="post">
                    <div>
                        <div>
                            <label class="form-label" for="userName">User name</label>
                            <input type="text" id="userName" name="user_name"
                                class="form-control form-control-lg input-custom" required />
                        </div>
                        <div>
                            <label class="form-label" for="firstName">First Name</label>
                            <input type="text" id="firstName" name="firstName"
                                class="form-control form-control-lg input-custom" required />
                        </div>
                        <div>
                            <label class="form-label" for="lastName">Last Name</label>
                            <input type="text" id="lastName" name="lastName"
                                class="form-control form-control-lg input-custom" required />

                        </div>

                        <div class="">
                            <label for="password" class="form-label">password</label>
                            <input type="password" name="password" class="form-control form-control-lg input-custom"
                                id="password" required />

                        </div>
                        <div>
                            <label class="form-label" for="email">Email</label>
                            <input type="email" id="email" name="email"
                                class="form-control form-control-lg input-custom" required />


                        </div>

                        <div>
                            <input class="btn btn-lg btn-primary reg-cusotm " type="submit" value="registater" />
                        </div>
                    </div>
                </form>



            </div>
        </div>
    </section>
    <section>
        <!-- Footer -->
        <footer class="footer-custom text-center text-white mx-auto mt-5">
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
                ?? 2021 Copyright:
                <a class="text-white" href="#">Asad Maraqa</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </section>
    <script src="../bootstrap_code/js/bootstrap.bundle.min.js"></script>
</body>

</html>