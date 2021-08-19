!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        

        <link rel="stylesheet" href="style.css">
        <!-- font awesome file link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <title>Hello, world!</title>
</head>

<body
    <!-- NAVBAR SECTION -->
    

     <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">interior</a>
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
                        <a class="nav-link active" href="index.php">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Gallery</a>
                    </li>
                    <li class="nav-item">
          <a class="nav-link active" href="index.php" >contact us</a> 
                    </ul>
                 <!-- <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>  -->
            </div>
        </div>
    </nav>
    <section class="my-2" id="contactus">
    <div class="py-3">
        <h2 class="text-center">CONTACT US</h2>
      </div>
  <div class="container-fluid"> 
     <div class="row">
         <div class="offset-md-4 col-md-4">
         <form action="/website/index.php" method="post">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp"> 
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group">
        <label for="mobile">Mobile</label>
        <input type="mobile" name="mobile" class="form-control" id="mobile" aria-describedby="emailHelp"> 
        </div>
        <div class="form-group">
        <label for="desc">Description</label>
        <textarea class="form-control" name="desc" id="desc" cols="10" rows="5"></textarea> 
    </div>
    
<button type="submit" class="btn btn-primary my-4">Submit</button>
    </form>
</div>
</section>

<!-- location -->
<section class="my-2" id="contactus">
    <div class="py-3">
        <h2 class="text-center">Location</h2>
      </div>
      <div class="container-fluid">
          <div class="row">
              <div class="offset-md-4 col-md-4">
              <address>
            #178/183, peninsula parkville,thindlu,sarjapura, banglore-562125 karnataka|kerala|tamilnadu|qatar
        </address>
        <a href="www.inhomeid.com" class="btn btn-primary">Browse Here</a
              </div>
          </div>
      </div>

      <section class="my-3">
        <div class="container-fluid fixed-bottom" width="100%">
            <div class="row primary">
                <div class="col-md-6">copyright@2020 company name</div>
                <div class="col-md-6">
                    <ul id="social-icons" class="float-md-right">
                        <li>
                            <a href="" class="fa fa-facebook-square"></a>
                        </li>
                        <li>
                            <a href="" class="fa fa-twitter-square"></a>
                        </li>
                        <li>
                            <a href="" class="fa fa-linkedin-square"></a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
</section>

<section class="my-2">
        <div class="container-fluid fixed-bottom" width="100%">
            <div class="row primary">
                <div class="col-md-6 py-2 text-center text-white">copyright@2020 company name</div>
                    <div class="col-md-6">
                        <ul  id="social-icons" class="text-center py-2">
                            <li>
                                <a href="" class="fa fa-facebook"></a>
                            </li>
                            <li>
                                <a href="" class="fa fa-whatsapp"></a>
                            </li>
                            <li>
                                <a href="" class="fa fa-instagram"></a>
                            </li>

                        </ul>
                    </div>
            
            </div>
        </div>
    </section>













</body>
</html>