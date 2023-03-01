<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <!--Custom CSS-->
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <!--Plugin CSS-->
        <link href="css/plugin.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="scss/style.scss" type="text/css">
    <title>landing page</title>
</head>
<body>
    <nav></nav>
    
    <header>
        <div class="banner">
            <img src="pexels-no-name-66997.jpg" alt="">
            <h1>wego</h1>
        </div>
        <div class="departure-btn">
            <button class="btn"><i class="fa-solid fa-plane-departure"></i>
                <h4 class="button-label">flights</h4>
            </button>
            <button class="btn"><i class="fa-solid fa-hotel"></i>
                <h4 class="button-label">Hotels</h4>
            </button>
        </div>
    </header>
    <!-- best tours starts -->

    <section class="trending bg-grey pt-17 pb-6">
        <div class="section-shape top-0" style="background-image: url(images/shape8.png);"></div>
        <div class="container">
            <div class="row align-items-center justify-content-between mb-6 ">
                <div class="col-lg-7">
                    <div class="section-title text-center text-lg-start">
                        <h4 class="mb-1 theme1">Top Pick</h4>
                        <h2 class="mb-1">Best <span class="theme">Tour Packages</span></h2>
                        <p>Discover ancient wonders and natural beauty with our unforgettable Jordan tours.</p>
                    </div>
                </div>
                <div class="col-lg-5">  
                </div>
            </div>
            <div class="trend-box">
                <div class="row item-slider">
                    <?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_reg";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$start_date = $_POST['start_date'];
$start_time = $_POST['start_time'];
$end_date = $_POST['end_date'];
$end_time = $_POST['end_time'];

$sql = "SELECT * FROM journeys WHERE journey_date BETWEEN '$start_date' AND '$end_date' AND journey_time BETWEEN '$start_time' AND '$end_time'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    
$counter = 1;
while($row = $result->fetch_assoc()) {
  echo '
    
        
  <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
  <div class="trend-item rounded box-shadow bg-white">
      <div class="trend-image position-relative">
          <img src="../assets/images/' . $row['image_path'] . '" alt="image" class="">
          <div class="color-overlay"></div>
      </div>
      <div class="trend-content p-4 pt-5 position-relative">
          <div class="trend-meta bg-theme white px-3 py-2 rounded">
              <div class="entry-author">
                  <i class="icon-calendar"></i>
                  <span class="fw-bold">' . $row['journey_duration'] . ' Hours Tours</span>
              </div>
          </div>
          <h5 class="theme mb-1"><i class="flaticon-location-pin"></i>' . $row['journey_city'] . '</h5>
          <h3 class="mb-1"><a href="tour-grid.html">' . $row['journey_name'] . '</a></h3>
          <div class="rating-main d-flex align-items-center pb-2">
              <div class="rating">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
              </div>
              <span class="ms-2">(12)</span>
          </div>
          <p class=" border-b pb-2 mb-2">' . $row['journey_information'] . '</p>
          <div class="entry-meta">
              <div class="entry-author d-flex align-items-center">
                  <p class="mb-0"><span class="theme fw-bold fs-5"> $' . $row['journey_price'] . '</span> | Per person</p>
              </div>
          </div>
      </div>
  </div>
</div>
        
  ';

}
} else {
    echo "0 results";
}

$conn->close(); 
?>

                    
                   
                    </div>
                </div>
            </div>  
            <div class="category-main-inner">
                <div class="row align-items-center">
                    <div class="col-lg-2">
                        <h3 class="mb-0 white bg-theme p-3 py-5 text-center rounded my-4">Top Categories</h3>
                    </div>
                    <div class="col-lg-10">
                        <div class="row side-slider">
                            <div class="col-lg-3 col-md-6 my-4">
                                <div class="category-item box-shadow p-2 py-4 text-center bg-white rounded overflow-hidden">
                                    <div class="trending-topic-content">
                                        <img src="images/icons/004-camping-tent.png" class="mb-1 d-inline-block" alt="">
                                        <h4 class="mb-0"><a href="tour-grid.html">Camping</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 my-4">
                                <div class="category-item box-shadow p-2 py-4 text-center bg-white rounded overflow-hidden">
                                    <div class="trending-topic-content text-center">
                                        <img src="images/icons/003-hiking.png" class="mb-1 d-inline-block" alt="">
                                        <h4 class="mb-0"><a href="tour-grid.html">Hiking</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 my-4">
                                <div class="category-item box-shadow p-2 py-4 text-center bg-white rounded overflow-hidden">
                                    <div class="trending-topic-content">
                                        <img src="images/icons/005-sunbed.png" class="mb-1 d-inline-block" alt="">
                                        <h4 class="mb-0"><a href="tour-grid.html">Beach Tours</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 my-4">
                                <div class="category-item box-shadow p-2 py-4 text-center bg-white rounded overflow-hidden">
                                    <div class="trending-topic-content">
                                        <img src="images/icons/006-surf.png" class="mb-1 d-inline-block" alt="">
                                        <h4 class="mb-0"><a href="tour-grid.html">Surfing</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 my-4">
                                <div class="category-item box-shadow p2 py-4 text-center bg-white rounded overflow-hidden">
                                    <div class="trending-topic-content">
                                        <img src="images/icons/002-safari.png" class="mb-1 d-inline-block" alt="">
                                        <h4 class="mb-0"><a href="tour-grid.html">Safari</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 my-4">
                                <div class="category-item box-shadow p-2 py-4 text-center bg-white rounded overflow-hidden">
                                    <div class="trending-topic-content">
                                        <img src="images/icons/008-cycling.png" class="mb-1 d-inline-block"  alt="">
                                        <h4 class="mb-0"><a href="tour-grid.html">Cycling</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 my-4">
                                <div class="category-item box-shadow p2 py-4 text-center bg-white rounded overflow-hidden">
                                    <img src="images/icons/007-hiking-1.png" class="mb-1 d-inline-block" alt="">
                                    <div class="trending-topic-content">
                                        <h4 class="mb-0"><a href="tour-grid.html">Trekings</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </section>
    <!-- best tours ends -->

        <!-- footer starts -->
        <footer class="pt-20 pb-4"  style="background-image: url(images/background_pattern.png);">
            <div class="section-shape top-0" style="background-image: url(images/shape8.png);"></div>
            
            <div class="footer-copyright">
                <div class="container">
                    <div class="copyright-inner rounded p-3 d-md-flex align-items-center justify-content-between">
                        <div class="copyright-text">
                            <p class="m-0 white">2023 Mr.Abdullah. All rights reserved.</p>
                        </div>
                        <div class="social-links">
                            <ul>  
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>    
                </div>
            </div>
            <div id="particles-js"></div>
        </footer>
        <!-- footer ends -->

        <!-- *Scripts* -->
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/particles.js"></script>
        <script src="js/particlerun.js"></script>
        <script src="js/plugin.js"></script>
        <script src="js/main.js"></script>
        <script src="js/custom-swiper.js"></script>
        <script src="js/custom-nav.js"></script>
</body>
</html>