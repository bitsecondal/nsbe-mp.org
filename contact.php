<?php
$HOMEPATH = str_replace("public_html", "", $_SERVER['DOCUMENT_ROOT']);
$HOMEPATH .= "phpenv.php";
require($HOMEPATH);
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta property="og:locale" content="en_US" />
  <meta property="og:site_name" content="NSBE Montgomery Professionals" />
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="" />
  <meta name="twitter:creator" content="" />

  
  <meta name="description" content="NSBE Montgomery Professionals is a chapter of the National Society of Black Engineers, located in Montgomery, Alabama.">
  <meta property="og:description" content="NSBE Montgomery Professionals is a chapter of the National Society of Black Engineers, located in Montgomery, Alabama." />
  <meta name="twitter:description" content="NSBE Montgomery Professionals is a chapter of the National Society of Black Engineers, located in Montgomery, Alabama." />
  

  
  <meta name="author" content="NSBE Montgomery Professionals">
  

  
  <title>NSBE Montgomery Professionals</title>
  <meta property="og:title" content="NSBE Montgomery Professionals" />
  <meta name="twitter:title" content="NSBE Montgomery Professionals" />
  

  

  

  
  <meta property="og:type" content="website" />
  

  
  <meta name="robots" content="index, follow" />
  

  

  
  <script type="text/javascript" src=/js/analytics.min.js></script>
  

  <script async id="mcjs" src="/js/mailchimp.min.js"></script>
  <script async src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script data-ad-client="ca-pub-5755792965145196" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <link rel="shortcut icon" href="/images/nsbemplogo.ico" type="image/png" />

  <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css"
    href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="/css/carousel.min.css">
  <link rel="stylesheet" type="text/css" href="/css/nsbemp.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top navbar-color">
    <a class="navbar-brand font-weight-bold" href="/">NSBE Montgomery Professionals</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
      aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav ml-auto">
        
        <li class="nav-item">
          
          <a href="/membership" class="nav-link">Membership</a>
          
        </li>
        
        <li class="nav-item">
          
          <a href="/programs" class="nav-link">Programs</a>
          
        </li>
        
        <li class="nav-item">
          
          <a href="/donate" class="nav-link">Donate</a>
          
        </li>
        
        <li class="nav-item">
          
          <a href="https://www.facebook.com/nsbemp/events" class="nav-link" target="_blank">Events</a>
          
        </li>
        
        <li class="nav-item">
          
          <a href="/about" class="nav-link">About</a>
          
        </li>
        
        <li class="nav-item">
          
          <a href="/contact.php" class="nav-link">Contact</a>
          
        </li>
        
      </ul>
      <form class="form-inline mt-2 mt-md-0" action="https://www.google.com/search" method="GET">
        <input type="hidden" name="q" value="site:nsbe-mp.org" />
        <input type="text" name="q" alt="Search" placeholder="Search with Google" title="Search"
          class="form-control mr-3" />
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

  <main role="main">
    

    <div class="container body">
      

      

      
<h1 id="contact-us">Contact Us</h1>
<?php
if (isset($_POST['emailaddress']) && isset($HELPDESK_EMAIL)) {
    date_default_timezone_set('America/Chicago');
    $new_line = "\r\n";
    $current_time = date("Y-m-d H:i:s");
    $message = print_r($_POST, true);
    $message .= "Submitted " . $current_time . $new_line;
    $message .= "IP Address " . $_SERVER['REMOTE_ADDR'];
    $subject = "Request " . $current_time;
    $headers = array('From' => $_POST['emailaddress']);

    if ($_POST['emailaddress'] == "tester@nsbe-mp.org") {
        $mail_result = true;
    } else {
        $mail_result = mail($HELPDESK_EMAIL, $subject, $message, $headers);
    }

    if ($mail_result) {
?>
        <div class="bg-success text-light container py-2 my-5" id="successmessage">
            Your request has been submitted successfully! Please allow 2-3 business days to receive a response.
        </div>
    <?php
    } else {
    ?>
        <div class="bg-danger text-light container py-2 my-5" id="failuremessage">
            An error occurred when attempting to process your request.
        </div>
    <?php
    }
} else {
    ?>
    <div class="col-12 pb-4 text-center">
        <img src="/images/nsbemplogo2.jpg" alt="National Society of Black Engineers Montgomery Professionals" class="headimage">
    </div>
    <h2 class="mailing-address">Mailing Address <i class="fas fa-envelope"></i></h2>
    <p>
        P.O. Box 210176<br />
        Montgomery, AL 36121
    </p>
    <h2 class="phone">Phone <i class="fas fa-phone"></i></h2>
    <p><a href="tel: 3346258589">(334) 625-8589</a></p>
    <h2 class="social-media">Social Media <i class="fas fa-hashtag"></i></h2>
    <p>
        Follow or like our social media pages to get the latest information about upcoming meetings,
        events, and activities.
    </p>
    <p>
        <a class="btn text-white" href="https://www.facebook.com/nsbemp" target="_blank">
            <i class="fab fa-facebook"></i> Facebook</a><span> </span>
        <a class="text-white btn" href="https://www.instagram.com/nsbemp" target="_blank">
            <i class="fab fa-instagram"></i> Instagram</a><span> </span>
        <a class="text-white btn" href="https://twitter.com/nsbemp" target="_blank">
            <i class="fab fa-twitter"></i> Twitter</a>
    </p>
    <form method="POST" action="/contact.php">
        <p>
            <label for="requestorname" class="font-weight-bold required">Name</label><br />
            <input class="form-control" name="requestorname" type="text" placeholder="John Doe" required="required" minlength="4" />
        </p>
        <p>
            <label for="emailaddress" class="font-weight-bold required">Email Address</label><br />
            <input class="form-control" name="emailaddress" type="email" placeholder="visitor@nsbe-mp.org" required="required" minlength="5" />
        </p>
        <p>
            <label for="phonenumber" class="required">Phone Number</label>
            <input class="form-control" type="tel" placeholder="Phone Number" minlength="10" name="phonenumber" maxlength="12" required="required" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
            <div class="text-small text-muted font-italic">Enter number in 555-555-5555 format.</div>
        </p>
        <p>
            <label for="message" class="font-weight-bold required">Message, Comment or Question</label><br />
            <textarea class="form-control" name="message" required="required" rows="5" placeholder="I have a question about NSBE MP"></textarea>
            <div class="text-small text-muted font-italic">Minimum 50 characters. The more details, the better</div>
        </p>
        <p>
            <input type="submit" class="form-control btn" value="Submit">
        </p>
    </form>
<?php
}
?>


      <div class="text-small py-4"><a href="#top">Back to Top</a></div>
    </div>
  </main>

  <footer class="footer">
    <div class="container py-4 mx-auto subfooter row">

      
      <div class="card subfooter col-lg-3 col-sm-12">
        <div class="card-body">
          <h5 class="card-title p-2 subfooter font-weight-bold">Join Today</h5>
          <p class="card-text subfooter">Join NSBE-MP! We want you to become a member of the most dynamic group professionals who are working towards eliminating disparities in education and achievement in engineering.</p>
          
          <a href="/membership" class="btn btn-footer">Join now</a>
          
        </div>
      </div>
      
      <div class="card subfooter col-lg-3 col-sm-12">
        <div class="card-body">
          <h5 class="card-title p-2 subfooter font-weight-bold">Donations</h5>
          <p class="card-text subfooter">Want to make a difference? Donate to NSBE MP today!! NSBE MP is a 501(c)(3) organization. Donations made to NSBE MP will go to the NSBE MP Scholarship Fund.</p>
          
          <a href="/donate" class="btn btn-footer">Donate today</a>
          
        </div>
      </div>
      
      <div class="card subfooter col-lg-3 col-sm-12">
        <div class="card-body">
          <h5 class="card-title p-2 subfooter font-weight-bold">Amazon Smile</h5>
          <p class="card-text subfooter">If you shop with Amazon, please consider using Amazon Smile for your purchase. NSBE MP receives a percentage of your purchase that is used towards scholarships and community programs.</p>
          
          <a href="/donate#amazon-smile" class="btn btn-footer">Start shopping</a>
          
        </div>
      </div>
      

      <div class="card subfooter col-lg-3 col-sm-12">
        <div class="card-body">
          <h5 class="card-title p-2 font-weight-bold">Links</h5>
          <ul class="list-unstyled footer">
            
            <li class="nav-item">
              <a class="text-black" href="/contact.php">
                
                <i class="fas fa-id-card-alt"></i>
                
                Contact
              </a>
            </li>
            
            <li class="nav-item">
              <a class="text-black" href="tel:(334) 625-8589">
                
                <i class="fas fa-phone"></i>
                
                (334) 625-8589
              </a>
            </li>
            
            <li class="nav-item">
              <a class="text-black" href="/photos">
                
                <i class="fas fa-photo-video"></i>
                
                Photos
              </a>
            </li>
            
          </ul>

          <ul class="list-unstyled footer">
            
            <li class="nav-item">
              <a class="text-black" href="https://www.facebook.com/nsbemp" target="_blank">
                
                <i class="fab fa-facebook"></i>
                
                Facebook
              </a>
            </li>
            
            <li class="nav-item">
              <a class="text-black" href="https://www.instagram.com/nsbemp" target="_blank">
                
                <i class="fab fa-instagram"></i>
                
                Instagram
              </a>
            </li>
            
            <li class="nav-item">
              <a class="text-black" href="https://twitter.com/nsbemp" target="_blank">
                
                <i class="fab fa-twitter"></i>
                
                Twitter
              </a>
            </li>
            
          </ul>

          <ul class="list-unstyled footer">
            
            <li class="nav-item">
              <a href="https://www.nsbe.org" target="_blank">National Society of Black Engineers (NSBE)</a>
            </li>
            
            <li class="nav-item">
              <a href="https://www.nsbe.org/professionals/home.aspx" target="_blank">NSBE Professionals</a>
            </li>
            
            <li class="nav-item">
              <a href="https://www.nsbe.org/professionals/Regions/Region3/home.aspx" target="_blank">NSBE Region 3 Professionals</a>
            </li>
            
            <li class="nav-item">
              <a href="https://pdc.nsbe.org/" target="_blank">NSBE PDC</a>
            </li>
            
            <li class="nav-item">
              <a href="https://careers.nsbe.org/jobseeker/search" target="_blank">NSBE Careers</a>
            </li>
            
            <li class="nav-item">
              <a href="https://connect.nsbe.org/" target="_blank">NSBE Connect</a>
            </li>
            
          </ul>
        </div>
      </div>
    </div> <!-- container -->

    <hr class="bg-white" />

    <div class="container text-center">
      <p class="footer">Copyright &copy; 2021 NSBE Montgomery Professionals (NSBE-MP)</p>
      <p class="footer">
        Cookies are used on this website to track your visits, provide advertisements specific
        to you, and preferences by a third-party.
        By continuing to use this site, you agree to the use of cookies unless you have disabled them.
      </p>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="/js/vendor/jquery.slim.min.js"><\/script>')</script>
  <script src="/js/bootstrap.bundle.min.js"></script>
</body>

</html>