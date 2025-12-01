<?php include 'db_connection.php'; ?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Grad School HTML5 Template</title>
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
<!--
    
TemplateMo 557 Grad School

https://templatemo.com/tm-557-grad-school

-->
  </head>

<body>

   
  <!--header-->
<?php   
include('include/navbar.php');
?>

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="assets/images/course-video.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="caption">
              <h6>Graduate School of Management</h6>
              <h2><em>Your</em> Classroom</h2>
              <div class="main-button">
                  <div class="scroll-to-section"><a href="#section2">Discover more</a></div>
              </div>
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->
<!-- ***** Main Banner Area End ***** -->


<?php
// Database query
$sql = "SELECT * FROM features";
$result = $conn->query($sql);
?>

<section class="features">
  <div class="container">
    <div class="row">

      <?php
      if ($result && $result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              ?>
              <div class="col-lg-4 col-12">
                <div class="features-post">
                  <div class="features-content">
                    <div class="content-show">
                      <h4>
                  
                        <?php echo htmlspecialchars($row['title']); ?>
                      </h4>
                    </div>
                    <div class="content-hide">
                      <p><?php echo htmlspecialchars($row['description']); ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <?php
          }
      } else {
          echo "<p>No features found.</p>";
      }
      ?>

    </div>
  </div>
</section>




<!-- ===== Step : Tabs Section ===== -->


<?php
$sql = "SELECT * FROM why_us_tabs";
$result = $conn->query($sql);
?>

<section class="section why-us" data-section="section2">
  <div class="container">
    <div class="row">
      
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Why choose Grad School?</h2>
        </div>
      </div>

      <div class="col-md-12">
        <div id="tabs">

          <!-- Tabs Menu -->
          <ul>
            <?php
            if ($result && $result->num_rows > 0) {
                $i = 1;
                $result->data_seek(0); // pointer ko reset karte hain
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <li>
                      <a href="#tabs-<?php echo $i; ?>">
                        <?php echo htmlspecialchars($row['title']); ?>
                      </a>
                    </li>
                    <?php
                    $i++;
                }
            }
            ?>
          </ul>

          <!-- Tabs Content -->
          <section class="tabs-content">
            <?php
            if ($result && $result->num_rows > 0) {
                $i = 1;
                $result->data_seek(0); // dobara loop ke liye pointer reset
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <article id="tabs-<?php echo $i; ?>">
                      <div class="row">
                        <div class="col-md-6">
                          <img src="<?php echo htmlspecialchars($row['image']); ?>" alt="">
                        </div>
                        <div class="col-md-6">
                          <h4><?php echo htmlspecialchars($row['title']); ?></h4>
                          <p><?php echo nl2br(htmlspecialchars($row['description'])); ?></p>
                        </div>
                      </div>
                    </article>
                    <?php
                    $i++;
                }
            } else {
                echo "<p>No tabs found.</p>";
            }
            ?>
          </section>

        </div>
      </div>

    </div>
  </div>
</section>



<!-- ===== Step : Registration  Section ===== -->


  <!-- <section class="section coming-soon" data-section="section3">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-xs-12">
          <div class="continer centerIt">
            <div>
              <h4>Take <em>any online course</em> and win $326 for your next class</h4>
              <div class="counter">

                <div class="days">
                  <div class="value">00</div>
                  <span>Days</span>
                </div>

                <div class="hours">
                  <div class="value">00</div>
                  <span>Hours</span>
                </div>

                <div class="minutes">
                  <div class="value">00</div>
                  <span>Minutes</span>
                </div>

                <div class="seconds">
                  <div class="value">00</div>
                  <span>Seconds</span>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="right-content">
            <div class="top-content">
              <h6>Register your free account and <em>get immediate</em> access to online courses</h6>
            </div>
            <form id="contact" action="" method="get">
              <div class="row">
                <div class="col-md-12">
                  <fieldset>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="phone-number" type="text" class="form-control" id="phone-number" placeholder="Your Phone Number" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="button">Get it now</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section> -->



  <?php




// Success message ke liye variable
$success_message = "";

// Jab form submit ho
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];

  // Data insert query
  $sql = "INSERT INTO registrations (name, email, phone)
          VALUES ('$name', '$email', '$phone')";

  // if ($conn->query($sql) === TRUE) {
  //   $date = date("Y-m-d H:i:s");
  //   $success_message = "
  //     <div style='background:#e0ffe0; padding:15px; border:1px solid #0a0; margin-bottom:20px;'>
  //       <h3>🎉 Registration Successful!</h3>
  //       <p><strong>Name:</strong> $name</p>
  //       <p><strong>Email:</strong> $email</p>
  //       <p><strong>Phone:</strong> $phone</p>
  //       <p><strong>Registered On:</strong> $date</p>
  //     </div>
  //   ";
  // } else {
  //   $success_message = "<div style='color:red;'>Error: " . $conn->error . "</div>";
  // }
}




?>



<section class="section coming-soon" data-section="section3">
  <div class="container">
    <div class="row">

      <div class="col-md-7 col-xs-12">
        <div class="continer centerIt">
          <div>
            <h4>Take <em>any online course</em> and win $326 for your next class</h4>
            <div class="counter">
              <div class="days">
                <div class="value">00</div>
                <span>Days</span>
              </div>
              <div class="hours">
                <div class="value">00</div>
                <span>Hours</span>
              </div>
              <div class="minutes">
                <div class="value">00</div>
                <span>Minutes</span>
              </div>
              <div class="seconds">
                <div class="value">00</div>
                <span>Seconds</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-5">
        <div class="right-content">
          <div class="top-content">
            <h6>Register your free account and <em>get immediate</em> access to online courses</h6>
          </div>

          <!-- Success message show yahan hoga -->
          <?php echo $success_message; ?>

          <!-- Registration Form -->
          <form id="contact" method="post" action="">
            <div class="row">
              <div class="col-md-12">
                <fieldset>
                  <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required="">
                </fieldset>
              </div>
              <div class="col-md-12">
                <fieldset>
                  <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" required="">
                </fieldset>
              </div>
              <div class="col-md-12">
                <fieldset>
                  <input name="phone" type="text" class="form-control" id="phone" placeholder="Your Phone Number" required="">
                </fieldset>
              </div>
              <div class="col-md-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="button">Get it now</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
</section>




<!-- ===== Step : Course Section ===== -->
<!-- ===== Step : Course Section ===== -->
<section class="section courses" data-section="section4">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Choose Your Course</h2>
        </div>
      </div>

      <!-- ✅ Owl Carousel wrapper -->
      <div class="owl-carousel owl-theme">

        <?php
        $sql = "SELECT * FROM courses";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            $button_text = $row['price_type'] == 'Free' ? 'Free' : 'Pay';

            echo '
            <div class="item">
              <img src="' . $row['image'] . '" alt="' . htmlspecialchars($row['alt_text']) . '">
              <div class="down-content">
                <h4>' . htmlspecialchars($row['title']) . '</h4>
                <p>' . htmlspecialchars($row['description']) . '</p>
                <div class="author-image">
                  <img src="' . $row['author_image'] . '" alt="Author">
                </div>
                <div class="text-button-pay">
                  <a href="#">' . $button_text . ' <i class="fa fa-angle-double-right"></i></a>
                </div>
              </div>
            </div>';
          }
        } else {
          echo "<p>No courses found.</p>";
        }
        ?>

      </div>
      <!-- ✅ End of Owl Carousel wrapper -->

    </div>
  </div>
</section>

<!-- ✅ Activate the slider -->
<script>
$(document).ready(function(){
  $(".owl-carousel").owlCarousel({
    items: 3,              // Show 3 cards
    loop: true,            // Infinite scroll
    margin: 30,            // Space between cards
    autoplay: true,        // Auto play
    autoplayTimeout: 3000, // 3 seconds
    autoplayHoverPause: true,
    responsive:{
      0:{ items:1 },
      768:{ items:2 },
      992:{ items:3 }
    }
  });
});
</script>





<!-- ===== Step : Text and vedio Section ===== -->
<?php
$sql = "SELECT * FROM videos LIMIT 1"; // Fetch only one record
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
  $row = $result->fetch_assoc();
?>
<!-- HTML starts here (outside PHP) -->
<section class="section video" data-section="section5">
  <div class="container">
    <div class="row">
      <div class="col-md-6 align-self-center">
        <div class="left-content">
          <span>our presentation is for you</span>
          <h4>
            <?php echo htmlspecialchars($row['title']); ?> 
            <em><?php echo htmlspecialchars($row['subtitle']); ?></em>
          </h4>
          <p><?php echo htmlspecialchars($row['description']); ?></p>
      <div class="main-button">
      <a href="#" style="pointer-events: none; cursor: default;">
      <?php echo htmlspecialchars($row['button_text']); ?>
      </a>
      </div>
        </div>
      </div>
      <div class="col-md-6">
        <article class="video-item">
          <div class="video-caption">
            <h4><?php echo htmlspecialchars($row['video_title']); ?></h4>
          </div>
          <figure>
            <a href="<?php echo htmlspecialchars($row['video_link']); ?>" class="play">
              <img src="<?php echo htmlspecialchars($row['image_path']); ?>" alt="Video Thumbnail">
            </a>
          </figure>
        </article>
      </div>
    </div>
  </div>
</section>
<!-- HTML ends here -->
<?php
} else {
  echo "<p>No video found.</p>";
}
?>


<!-- ===== Step 3: Contact Section ===== -->

<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['send_message'])) {
  $name = $conn->real_escape_string($_POST['name']);
  $email = $conn->real_escape_string($_POST['email']);
  $message = $conn->real_escape_string($_POST['message']);

  $sql = "INSERT INTO contact_messages (name, email, message)
          VALUES ('$name', '$email', '$message')";

  if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Message Sent Successfully!');</script>";
  } else {
    echo "<script>alert('Error: " . $conn->error . "');</script>";
  }
}
?>

<!-- ===== Step 3: Contact Section ===== -->
<section class="section contact" data-section="section6">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Let’s Keep In Touch</h2>
          </div>
        </div>
        <div>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <form id="contact" action="" method="post">
          <div class="row">
            <div class="col-md-12">
              <fieldset>
                <input name="name" type="text" class="form-control" id="name" placeholder="Your Name..." required>
              </fieldset>
            </div>
            <div class="col-md-12">
              <fieldset>
                <input name="email" type="email" class="form-control" id="email" placeholder="Your Email..." required>
              </fieldset>
            </div>
            <div class="col-md-12">
              <fieldset>
                <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message..." required></textarea>
              </fieldset>
            </div>
            <div class="col-md-12">
              <fieldset>
                <button type="submit" name="send_message" class="button">
                  Send Message Now
                </button>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-6">
        <!-- Optional: Google Map or any image -->
        <div id="map">
          <iframe src="https://maps.google.com/maps?q=Pakistan&t=&z=13&ie=UTF8&iwloc=&output=embed"
                width="100%" height="495px" frameborder="0" style="border:0" allowfullscreen>
                </iframe>
        </div>
      </div>
    </div>
  </div>
</section>


  <?php
  include('include/footer.php');
  ?>

  
  
  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
          if($(e.target).hasClass('external')) {
            return;
          }
          e.preventDefault();
          $('#menu').removeClass('active');
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
    <?php
    $conn->close();
    ?>

</body>
</html>