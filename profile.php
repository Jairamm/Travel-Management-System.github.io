<?php
session_start();
if (isset($_SESSION["user"])) {
  $conn = mysqli_connect("localhost", "root", "", "collegedb");
  $ids = $_SESSION['user'];
  $sel = "SELECT * FROM `profile` WHERE id='$ids'";
  $r = mysqli_query($conn, $sel);
  $res = mysqli_fetch_array($r, MYSQLI_BOTH);
  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>profile</title>
    <link rel="stylesheet" href="add.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
    <style>
      body {
        background: -webkit-linear-gradient(left, yellow, red);
        /* background-image:linear-gradient(red, yellow) ; */
      }

      .emp-profile {
        padding: 3%;
        margin-top: 3%;
        margin-bottom: 3%;
        border-radius: 0.5rem;
        background: #fff;
      }

      .profile-img {
        text-align: center;
      }

      .profile-img img {
        width: 70%;
        height: 100%;
      }

      .profile-img .file {
        position: relative;
        overflow: hidden;
        margin-top: -20%;
        width: 70%;
        border: none;
        border-radius: 0;
        font-size: 15px;
        background: #212529b8;
      }

      .profile-img .file input {
        position: absolute;
        opacity: 0;
        right: 0;
        top: 0;
      }

      .profile-head h5 {
        color: #333;
      }

      .profile-head h6 {
        color: #0062cc;
      }

      .profile-edit-btn {
        border: none;
        border-radius: 1.5rem;
        width: 70%;
        padding: 2%;
        font-weight: 600;
        color: #6c757d;
        cursor: pointer;
      }

      .proile-rating {
        font-size: 12px;
        color: #818182;
        margin-top: 5%;
      }

      .proile-rating span {
        color: #495057;
        font-size: 15px;
        font-weight: 600;
      }

      .profile-head .nav-tabs {
        margin-bottom: 5%;
      }

      .profile-head .nav-tabs .nav-link {
        font-weight: 600;
        border: none;
      }

      .profile-head .nav-tabs .nav-link.active {
        border: none;
        border-bottom: 2px solid #0062cc;
      }

      .profile-work {
        padding: 14%;
        margin-top: -15%;
      }

      .profile-work p {
        font-size: 12px;
        color: #818182;
        font-weight: 600;
        margin-top: 10%;
      }

      .profile-work a {
        text-decoration: none;
        color: #495057;
        font-weight: 600;
        font-size: 14px;
      }

      .profile-work ul {
        list-style: none;
      }

      .profile-tab label {
        font-weight: 600;
      }

      .profile-tab p {
        font-weight: 600;
        color: #0062cc;
      }
      #ran{
        border-radius: 50%;
      }
    </style>
  </head>

  <body>
    
    <link href="maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
    <script src="maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <div class="container emp-profile">
      <form action="#" method="post">
        <div class="row">
          <div class="col-md-4">
            <div class="profile-img">
              <img src="all/<?php echo $res['image']; ?> " value="<?php $res['image']; ?>" alt="Add Picture"id='ran' />

              <!-- <div class="file btn btn-lg btn-primary">
                </div> -->
                

            </div>
          </div>
          <div class="col-md-6">
            <div class="profile-head">
              <h5><?php echo $res['name']; ?></h5>
              <h6>(<?php echo $res['gender']; ?>)</h6>
              <p class="proile-rating"><b>ID : <span><?php echo $res['id']; ?></span></b></p>
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                    aria-selected="true">ABOUT</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                    aria-controls="profile" aria-selected="false"></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-2">
            <a href="editpage.php?$idd=<?php echo $res['id'] ?>"> <button type="button" class="profile-edit-btn"
                name="btnAddMore" value="Edit Profile" />Edit </button>
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="profile-work">
              <p></p>
              <a href="logout.php" style="color:red "><img src="https://img.icons8.com/?size=100&id=ydJtUOZO_dfS&format=png&color=000000"height='40px' alt="">Logout</a><br />
              <p></p>
             <big><a style="color:black">Country</a> : <a ><?php echo $res['country']; ?></a><br>
              <a style="color:black">State</a> : <a ><?php echo $res['state']; ?></a><br />
              <!-- <a style="color:black">Zip</a> : <a ><?php echo $res['zip']; ?></a><br /> -->
             </big> 
            </div>
          </div>
          <div class="col-md-8">
            <div class="tab-content profile-tab" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row">
                  <div class="col-md-6">
                    <label>Username</label>
                  </div>
                  <div class="col-md-6">
                    <p><?php echo $res['username']; ?></p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label>Name</label>
                  </div>
                  <div class="col-md-6">
                    <p><?php echo $res['name']; ?></p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label>Email</label>
                  </div>
                  <div class="col-md-6">
                    <p><?php echo $res['email']; ?></p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label>Phone</label>
                  </div>
                  <div class="col-md-6">
                    <p><?php echo $res['phone']; ?></p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label>Profession</label>
                  </div>
                  <div class="col-md-6">
                    <p><?php echo $res['profession']; ?></p>
                  </div>
                  
                </div>
                
              </div>
              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="row">
                  <div class="col-md-6">
                    <label>Experience</label>
                  </div>
                  <div class="col-md-6">
                    <p>Expert</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label>Hourly Rate</label>
                  </div>
                  <div class="col-md-6">
                    <p>10$/hr</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label>Total Projects</label>
                  </div>
                  <div class="col-md-6">
                    <p>230</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label>English Level</label>
                  </div>
                  <div class="col-md-6">
                    <p>Expert</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label>Availability</label>
                  </div>
                  <div class="col-md-6">
                    <p>6 months</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <label>Your Bio</label><br />
                    <p>Your detail description</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
        <a href="index1.html" type="button"><button class="btn btn-outline-success " type="button">HOME</button></a>
<!-- <a href="index1.html" type="button"><button>HOME</button></a> -->
    </div>
    <?php
} else {
  echo "<center><h1>- - > Please login to - - > </h1><button onclick=location.href='login_sign.html'>Continue 💫</button></center>";
}
?>
  </div>
</body>
</html>