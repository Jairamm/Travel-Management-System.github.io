  <?php
         $conn = mysqli_connect("localhost", "root", "", "collegedb");
         $id = $_REQUEST['$idd'];
         $sel ="SELECT * FROM `profile` WHERE id='$id'";
        $r = mysqli_query($conn,$sel);
        $res = mysqli_fetch_array($r ,MYSQLI_BOTH); 
  ?>  
<!-- html code  -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form-open_world</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="/123678.jpg">
    <style>
      h4{
        text-align: center;
      }
        .container{
            margin-top: 20px ;
        }
        body{
            background-color:yellow;
        }
    </style>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </head>
  <html>
    <body>
        <!-- navbar  -->
      <nav class="navbar   fixed-top p-0">
    <div class="container-fluid  bg-light">
      <a class="navbar-brand" href="#"><img
          src="https://img.icons8.com/?size=100&id=Oma9tSIHTMlv&format=png&color=000000" alt="..." height="50px "><span
          class="text-first-head">Open_world</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><a href="login_sign.html">Login/SignUp</a></h5>

          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body second ">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="routing1.html"><img
                  src="https://img.icons8.com/?size=100&id=26075&format=png&color=000000" alt="..." height="30px "> Trip
                Plan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="weather.html"><img
                  src="https://img.icons8.com/?size=100&id=59759&format=png&color=000000" alt="..." height="30px ">
                Weather</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="flight.php"><img src="https://img.icons8.com/?size=100&id=8771&format=png&color=000000"
                  alt="..." height="30px "> Flight</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="flight.php"><img src="https://img.icons8.com/?size=100&id=60605&format=png&color=000000"
                  alt="..." height="30px "> Hotels</a>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link" href="#"><img src="https://img.icons8.com/?size=100&id=26075&format=png&color=000000"
                  alt="..." height="30px "> ChatBot</a>
            </li> -->
            </li>
            <li class="nav-item">
              <a class="nav-link" href="maps.html"><img
                  src="https://img.icons8.com/?size=100&id=8212&format=png&color=000000" alt="..." height="30px "> World
                Maps</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <img src="https://img.icons8.com/?size=100&id=11781&format=png&color=000000" height="30px" alt="...">
                Account
              </a>
              <ul class="dropdown-menu first  ">
                <li><a class="dropdown-item" href="profile.php"><img
                      src="https://img.icons8.com/?size=100&id=25618&format=png&color=000000" height="30px" alt="..">
                    Profile</a></li>
                <li><a class="dropdown-item" href="https://www.lonelyplanet.com/articles/best-places-to-visit-in-india"><img
                      src="https://img.icons8.com/?size=100&id=12621&format=png&color=000000" height="30px" alt="..">
                    Blogs</a></li>
                <li>
                  <a class="dropdown-item" href="feedback.php"><img
                      src="https://img.icons8.com/?size=100&id=8212&format=png&color=000000" height="30px" alt="..">
                    Feedback</a>
                </li>
                <li><a class="dropdown-item" href="web1\index.html"><img
                      src="https://img.icons8.com/?size=100&id=7781&format=png&color=000000" height="30px" alt="..">
                    Live Chat</a></li>
              </ul>
            </li>
          </ul>
          <form class="d-flex mt-3" role="search" action="" >
            <input class="form-control me-2 search-box" id="search" name="searchable " type="search"
              placeholder="Search Services" id="search" aria-label="Search" autocomplete="off">
            <button class="btn btn-outline-success" type="button" onclick="sebtn()"id='sea' >Search</button>
          </form>
          <br>
          <div id="result-box">
          </div>
        </div>
      </div>
    </div>
  </nav>
    <!-- main -->
      <div class="container ">
        <div class="py-5 text-center">
          <!-- <img class="d-block mx-auto mb-4" src="https://wallpapercave.com/wp/wp4128829.jpg" alt=""   > -->
          <h2>Change personal Information</h2>
          <p class="lead">
            Welcome to Open_World.org 
          </p>
        </div>
       
         <div class="row g-5">

       <div class="col-md-5 col-lg-4 order-md-last">
        <div class="card" style="width: 18rem;">
  <img src="https://th.bing.com/th/id/OIP.dOnPPG2QVHadeR55NQBf8gHaE6?rs=1&pid=ImgDetMain" class="card-img-top" alt="..." >
  <div class="card-body">
    <h5 class="card-title text-center">Top Discount PLan</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Extra Discount uptp 80% </li>
    <li class="list-group-item">Free plan Advisior </li>
  </ul>
  <div class="card-body">
    <a href="https://www.smartertravel.com/top-summer-destinations/" class="card-link">Explore</a>
    <a href="https://www.smartertravel.com/top-summer-destinations/" class="card-link">Visit Web</a>
  </div>
</div>
       <!-- some add here   -->
          </div>
          <div class="col-md-7 col-lg-8">
            <h4 class="mb-3">😊😊</h4>
            <form  class="needs-validation" novalidate="" action="#" method="post" enctype="multipart/form-data" >
              <div class="row g-3">
                <div class="col-sm-6">
                  <label for="Name" class="form-label" >Name</label>
                  <input
                    type="text"
                    title="Enter the name"
                    class="form-control"
                    name="Name"
                    id="Name"
                    placeholder="Your Name"
                    value="<?php  echo $res['name']; ?>"
                    required
                    readonly
                  />
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>

                <div class="col-sm-6">
                  <label for="Gender" class="form-label">Gender</label>
                  <input
                    type="text"
                    class="form-control"
                    title="your Gender"
                    name="Gender"
                    id="Gender"
                    placeholder=""
                    value="<?php  echo $res['gender']; ?>"
                    required=""
                    required
                  />
                  <div class="invalid-feedback">
                    Valid last name is required.
                  </div>
                </div>
                

                <div class="col-12">
                  <label for="Username" class="form-label">Username</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text">@</span>
                    <input
                      type="text"
                      class="form-control"
                      name="Username"
                      title="Enter unique Username"
                      id="Username"
                      placeholder="Username"
                      required=""
                      required
                      value="<?php  echo $res['username']; ?>"
                    />
                    <div class="invalid-feedback">
                      Your username is required.
                    </div>
                  </div>
                </div>

                <div class="col-12">
                  <label for="Email" class="form-label"
                    >Email
                    <span class="text-body-secondary"></span></label
                  >
                  <input
                    title="Enter the Email"
                    type="email"
                    class="form-control"
                    name="Email"
                    id="Email"
                    placeholder="you@example.com"
                    required
                    value="<?php  echo $res['email']; ?>"
                  />
                  <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                  </div>
                </div>

                <div class="col-12">
                  <label for="Address" class="form-label">Address</label>
                  <input
                    type="text"
                   title="Your Address"
                    class="form-control"
                    name="Address"
                    id="Address"
                    placeholder="1234 Main St"
                    required=""
                    required
                    value=""
                  />
                  <div class="invalid-feedback">
                    Please enter your shipping address.
                  </div>
                </div>

                <div class="col-12">
                  <label for="Phone" class="form-label"
                    >Phone
                    <span class="text-body-secondary"></span></label
                  >
                  <input
                    type="number"
                    title="Phone or Whatapp number"
                    class="form-control"
                    name="Phone"
                    id="Phone"
                    placeholder="eg. 8840206985"
                    value="<?php  echo $res['phone']; ?>"
                  />
                </div>

                <div class="col-md-5">
                  <label for="Country" class="form-label">Country</label>
                  <select class="form-select"name="Country" id="Country" required="" >
                    <option value="">Choose...</option>
                    <option value="United States" >United States</option>
                    <option value="india" >india</option>
                    <option value="Pakistan" >Pakistan</option>
                    <option value="Sri lanka" >Sri lanka</option>
                    <option value="Bangladesh" >Bangladesh</option>
                    <option value="Afghanistan" >Afghanistan</option>
                    <option value="Nepal" >Nepal</option>
                    <option value="China" >China</option>
                    <option value="Myanmar" >Myanmar</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid country.
                  </div>
                </div>

                <div class="col-md-4">
                  <label for="State" class="form-label">State</label>
                  <select class="form-select"name="State" id="State" required>
                    <option>Choose...</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="Panjab">Panjab</option>
                    <option value="Madhya pradesh">Madhya pradesh</option>
                    <option value="Odisha">Odisha</option>
                    <option value="Telangana">Telangana</option>
                    <option value="Uttarakhand">Uttarakhand</option>
                    <option value="Other">Other</option>
                  </select>
                  <div class="invalid-feedback">
                    Please provide a valid state.
                  </div>
                </div>

                <div class="col-md-3">
                  <label for="Profession" class="form-label">Profession</label>
                  <input
                    type="text"
                    title="Profession"
                    class="form-control"
                    name="Profession"
                    id="Profession"
                    placeholder=" "
                    required
                    value="<?php  echo $res['profession']; ?>"
                  />
                  <div class="invalid-feedback">Zip code required.</div>
                </div> 
                Profile Picture: <input type="file" name="img"> 
              </div>
             <hr class="my-4" />
     <button class="w-100 btn btn-warning btn-lg " type="submit" id="submit" >
               Save
              </button>
            </form>
          </div>
        </div>
      </div>

<!-- PHP edit database  -->
<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
     $name = $_POST["Name"];
     $email = $_POST["Email"];
     $username = $_POST["Username"];
     $profession = $_POST["Profession"];
     $phone = $_POST["Phone"];
     $gender = $_POST["Gender"];
     $ids = $res["id"];

    $update = "UPDATE `profile` SET `username`='$username',`name`='$name',`email`='$email',`phone`='$phone',`profession`='$profession',`gender`='$gender' WHERE id ='$ids' ";
    if (mysqli_query($conn, $update)) {
        echo "<h4>Data is Update</h4>";
    }
}

?>


<!-- for images  -->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ids = $res["id"];
    $Name = $_FILES["img"]["name"];
    $Size = $_FILES["img"]["size"];
    $Type = $_FILES["img"]["type"];
    $temp_N = $_FILES["img"]["tmp_name"];
    $conn = mysqli_connect("localhost", "root", "", "collegedb");
    $loc = "all/";
    $insert = "UPDATE `profile` SET `image`='$Name' where id ='$ids' ";
    if (mysqli_query($conn, $insert)) {
        move_uploaded_file($temp_N, $loc . $Name);
        echo "FIle Upload Successfully";
    } else {
        echo "FIle Upload Failed";
    }
}
?>
    </body>
  </html>
</html>
