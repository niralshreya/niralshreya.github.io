<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <link rel="stylesheet" href="style.css">
    <!-- font awesome file link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <title>InHome Interior</title>
</head>

<body>
    <!-- NAVBAR SECTION -->


    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
            <div>
                <img src="images/logo.png" height="40px" width="40px" alt="unable to load" class="rounded">
                <a class="navbar-brand" href="#">interior</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto my-1">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#aboutus">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#contactus">contact us</a>
                </ul>
                <!-- <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>  -->
            </div>
        </div>
    </nav>
    <!-- CAROUSEL SECTION -->
    <!-- <div class="container-fluid"> -->

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
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
                <img src="images/bedroom1.jpg" height="600" width="100%" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block text-warning">
                    <h4>Bedroom</h4>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/kitchen2.jpg" height="600" width="100%" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block text-dark">
                    <h4>Kitchen</h4>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/banner.jpg" height="600" width="100%" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h4>Living Room</h4>
                    <p>Some representative placeholder content for the third slide.</p>
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
    <!-- </div> -->

    <!-- ABOUT US -->
    <section class="my-5" id="aboutus">
        <div class="py-5">
            <h2 class="text-center"><u>About us</u></h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img src="images/banner.jpg" height="300" width="100%">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h3 class="text-center"><u>About Interior</u></h3>
                    <div>
                        <b><i>
                                <h4 class="text-center my-3">Our Furniture throughly & rigorosly tested</h4>
                            </i></b>
                        <ul class="mr-3"><b>
                                <li>Boiling water proof and anti-termite.</li>
                                <li>Warrenty upto 5 years.</li>
                                <li> Suiting your budget.</li>
                                <li>InHome Modular Kitchen.</li>
                        </ul></b>
                    </div>
                    <a href="about.php" class="btn btn-primary ml-4">Explore More</a>
                </div>

            </div>
        </div>
    </section>


    <!-- SERVICES SECTION -->
    <section class="my-5" id="services">
        <div class="py-5">
            <h2 class="text-center">
                <u>Our Services</u>
            </h2>
            <p class="text-center">End to End Designs</p>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 border-right border-warning my-3 text-info">
                    <div class="text-center">
                        <i class="fa fa-anchor"></i>
                        <h3>Modular Kitchen</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, sit.</p>
                    </div>
                </div>

                <div class="col-md-3 border-right border-warning  my-3 text-info">
                    <div class="service-box text-center">
                        <i class="fa fa-anchor"></i>
                        <h3>Living Room</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, sit.</p>
                    </div>
                </div>


                <div class="col-md-3 border-right border-warning my-3 text-info">
                    <div class="service-box text-center">
                        <i class="fa fa-anchor"></i>
                        <h3>Bed room</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, sit.</p>
                    </div>
                </div>

                <div class="col-md-3 border-right border-warning my-3 text-info">
                    <div class="service-box text-center">
                        <i class="fa fa-anchor"></i>
                        <h3>Pooja Unit</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, sit.</p>
                    </div>
                </div>

                <div class="col-md-3 border-right border-warning my-3 text-info">
                    <div class="service-box text-center">
                        <i class="fa fa-anchor"></i>
                        <h3>Wadrobe</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, sit.</p>
                    </div>
                </div>

                <div class="col-md-3 border-right border-warning my-3 text-info">
                    <div class="service-box text-center">
                        <i class="fa fa-anchor"></i>
                        <h3>Crockery Unit</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, sit.</p>
                    </div>
                </div>
                <div class="col-md-3 border-right border-warning my-3 text-info">
                    <div class="service-box text-center">
                        <i class="fa fa-anchor"></i>
                        <h3>Sofa Set</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, sit.</p>
                    </div>
                </div>
                <div class="col-md-3 border-right border-warning my-3 text-info">
                    <div class="service-box text-center">
                        <i class="fa fa-anchor"></i>
                        <h3>Dinning Area</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, sit.</p>
                    </div>
                </div>
                <div class="text-center my-3 py-2">
                    <a href="contactus.php" class="btn-sm btn-primary">Book online
                        Apointment
                    </a>
                </div>
            </div>
    </section>


    <!-- GALLERY SECTION -->

    <section class="my-5" id="gallery">
        <div class="py-5">
            <h2 class="text-center"><u>Gallery</u></h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12  pb-3">
                    <img src="images/banner.jpg" height="300px" width="100%" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 pb-3">
                    <img src="images/kitchen1.jpg" height="300px" width="100%" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 pb-3">
                    <img src="images/bedroom.jpg" height="300px" width="100%" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 pb-3">
                    <img src="images/bedroom1.jpg" height="300px" width="100%" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 pb-3">
                    <img src="images/banner.jpg" height="300px" width="100%" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 pb-3">
                    <img src="images/bedroom1.jpg" height="300px" width="100%" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT US SECTION -->

    <!-- col2 -->

    <section class="my-2 bg-muted" id="contactus">
        <div class="py-3">
            <h2 class="text-center"><u>Contact Us</u></h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="text-center" id="logo">
                    <img src="images/logo.png" height="80px" width="100px" alt="unable to load" class="rounded">
                </div>
                <div>
                    <h5 class="text-center my-2 py-2">INHOME</h5>
                    <p class="text-center"><b>Giving your home new style </b></P>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-lg-6  my-1 text-center">
                    <h5 class="text-center">Phone number</h5>
                    <ul class="text-center">
                        <li>+91-9008-845100</li>
                        <li>+91-9008-845100</li>
                        <li>+91-9008-845100</li>
                        <li>+91-9008-845100</li>
                    </ul>
                </div>

                <div class="col-lg-6 my-1">
                    <h5 class="text-left">Adress</h5>
                    <address>
                        #178/183, peninsula parkville,thindlu,sarjapura, banglore-562125
                        karnataka|kerala|tamilnadu|qatar
                    </address>
                    <address>
                        #178/183, peninsula parkville,thindlu,sarjapura, banglore-562125
                        karnataka|kerala|tamilnadu|qatar
                    </address>
                </div>
                <div class="col-lg-6 text-center my-4">
                    <button class="btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Book online
                        Apointment
                    </button>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- 
Footer -->

    <section class="my-2">
        <div class="container-fluid fixed-bottom" width="100%">
            <div class="row primary">
                <div class="col-md-6 py-1 text-center text-white">copyright@2020 company name</div>
                <div class="col-md-6">
                    <ul id="social-icons" class="text-center py-1">
                        <li>
                            <a href="https://www.facebook.com/friends/" class="fa fa-facebook"></a>
                        </li>
                        <li>
                            <a href="https://web.whatsapp.com/" class="fa fa-whatsapp"></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/shreyaniral/" class="fa fa-instagram"></a>
                        </li>

                    </ul>
                </div>

            </div>
        </div>
    </section>












    <!-- <div><a href="contactus.php" class="btn btn-primary">Book Appointment</a></div> -->
    <!-- Button trigger modal -->
    <!-- <button class="btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Book online Apointment
 </button>   -->
    <!-- <button type="submit" class="btn btn-primary my-4" data-bs-toggle="modal" data-bs-target="#exampleModal">Submit</button> -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog"> 
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <section class="my-2" id="contactus">
                        <div class="py-3">
                            <h2 class="text-center">CONTACT US</h2>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="offset-md-2 col-md-8">
                                    <form action="/website/index.php" method="post">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" class="form-control" id="name"
                                                aria-describedby="emailHelp">
                                        </div>

                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" class="form-control" id="email"
                                                aria-describedby="emailHelp">
                                            <small id="emailHelp" class="form-text text-muted">We'll never share your
                                                email with anyone else.</small>
                                        </div>

                                        <div class="form-group">
                                            <label for="mobile">Mobile</label>
                                            <input type="mobile" name="mobile" class="form-control" id="mobile"
                                                aria-describedby="emailHelp">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary my-4">Submit</button>
                                    </form>
                                </div>
                    </section>
                    <!-- <div class="modal-footer bg-info">
                    </div>
                </div> -->

            </div>
        </div>
    </div>
    </div>
    </div>

    <!-- foot section -->

    <!-- <div id="footer"> -->
    <!-- <div class="container-fluid" width="100%">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-widget">
                        <h4>ABOUT COMPANY</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas placeat ex mollitia amet repellat expedita itaque velit error necessitatibus ea.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="footer-widget">
                        <h4>LATEST NEWS</h4>
                        <ul class="latest-news">
                            <li><a href="">Lorem ipsum dolor sit amet consectetur.</a></li>
                            <li><a href="">Lorem ipsum dolor sit amet consectetur.</a></li>
                            <li><a href="">Lorem ipsum dolor sit amet consectetur.</a></li>
                            <li><a href="">Lorem ipsum dolor sit amet consectetur.</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="footer-widget">
                        <h4> COMPANY ADDRESS</h4>
                        <adress>
                            <b>FLAT NO SH-105</b>
                            <br>shriram smrithi appartment<br> pin-code:562107<br> ph-no:12349079789
                        </adress>
                        </adress>
                    </div>
                </div>
            </div>
        </div>
    </div> --
    
    <!-- FOOTER SECTION -->



    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $desc = $_POST['desc'];
        
      
      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "contacts";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `contactus` (`name`, `email`, `concern`, `dt`) VALUES ('$name', '$email', '$desc', current_timestamp())";
        $result = mysqli_query($conn, $sql);
 
        if($result){
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your entry has been submitted successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }
        else{
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }

      }

    }

    
?>











    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>


</body>

</html>