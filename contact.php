
<?php
	if (isset($_POST["submit"])) {
		$fname = $_POST['fname'];
    $lname = $_POST['lname'];
		$email = $_POST['email'];
    $number = $_POST['number'];
		$message = $_POST['message'];
		$from = 'Demo Contact Form';
		$to = 'willmannie@gmail.com';
		$subject = 'Message from Contact Demo ';

		$body ="From: $fname + ' ' + $lname\n E-Mail: $email\n Number: $number\n Message:\n $message";
		// Check if name has been entered
		if (!$_POST['fname'] && !$_POST['lname']) {
			$errName = 'Please enter your full name';
		}

		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}

		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">

  <script src="js/jquery-3.1.1.min.js"></script>
  <script src="js/tether.min.js"></script>
    <link rel="stylesheet" href="colorbox.css">
    <link rel="stylesheet" href="css/hover.css">
    <link href="main.css" rel="stylesheet">



  <!-- bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="js/bootstrap.min.js"></script>


  <!-- justified -->
  <link rel="stylesheet" href="css/justifiedGallery.min.css">
  <script type="text/javascript" src="js/jquery.justifiedGallery.min.js"></script>


  <!-- cusotm js -->
  <link rel="stylesheet" href="css/colorbox.css">
  <script type="text/javascript" src="js/jquery.colorbox-min.js"></script>
  <script type="text/javascript" src="custom.js"></script>

  <!-- <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script> -->

</head>

<body class="subpage contact-us">
  <nav id="header" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">
              <img src="img/logo.png" alt="logo">
            </a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.html" class="hvr-underline-reveal">About Us</a></li>
              <li><a href="youth.html" class="hvr-underline-reveal">Youth</a></li>
              <li><a href="employers.html" class="hvr-underline-reveal">Employers</a></li>
              <li><a href="contact.php" class="hvr-underline-reveal active">Contact Us</a></li>
              <li><a href="faq.html" class="hvr-underline-reveal">FAQ</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>
      <div class="container-fluid top-section alternate">
        <div class="col-md-6 col-md-offset-3">
          <h1>
            <span class="white-title">Contact Us</span>
            <p>All inquires are answered in the order they are received and it may take  up to  2 business days to hear back from us.</p>
          </h1>
        </div>
      </div>
      <div class="down-arrow">
        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
           viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">
        <style type="text/css">
          .st0{fill:#0E5682;}
        </style>
        <g>
          <g id="Down">
            <g>
              <path class="st0" d="M306,0C137,0,0,137,0,306s137,306,306,306s306-137,306-306S475,0,306,0z M306,554.6
                C168.9,554.6,57.4,443.1,57.4,306S168.9,57.4,306,57.4S554.6,168.9,554.6,306S443.1,554.6,306,554.6z M411.2,229.5
                c-8.4,0-15.8,3.6-21.1,9.4l-0.1-0.1l-84,91.7l-84.1-91.7l-0.1,0.1c-5.2-5.7-12.7-9.4-21.1-9.4c-15.8,0-28.7,12.9-28.7,28.7
                c0,7.5,2.9,14.2,7.6,19.3l-0.1,0.1l105.2,114.8c5.5,5.9,13.1,9.3,21.2,9.3s15.7-3.4,21.1-9.3l105.2-114.7l-0.1-0.1
                c4.7-5.1,7.6-11.9,7.6-19.3C439.9,242.4,427,229.5,411.2,229.5z"/>
            </g>
          </g>
        </g>
        </svg>
      </div>
      <div class="container-fluid key-message-section">
        <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <div class="row">
                  <div class="col-md-12">
                    <h2>Ask US</h2>
                    <p>Submit your questions, suggestions and complaints to SYEP program staff.</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-10 vcenter">
                    <form class="contact-form" role="form" action="contact.php" method="post">
                      <div class="form-group col-xs-6">
                        <label for="fname">First Name:</label>
                        <input type="text" class="form-control" name="fname" id="fname" value="<?php echo htmlspecialchars($_POST['fname']); ?>">
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="lname">Last Name:</label>
                        <input type="text" class="form-control" name="lname" id="lname" value="<?php echo htmlspecialchars($_POST['lname']); ?>">
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="email">Email Address:</label>
                        <input type="text" class="form-control" name="email" id="email" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="number">Phone Number:</label>
                        <input type="text" class="form-control" id="number">
                      </div>
                      <div class="form-group col-xs-12">
                        <label for="message">Message:</label>
                        <textarea class="form-control" rows="5" id="message" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
                        <?php echo "<p style='font-size: 10px;' class='text-danger'>$errName</p>";?>
                        <?php echo "<p class='text-danger'>$errMessage</p>";?>
                        <?php echo "<p class='text-danger'>$errEmail</p>";?>
                      </div>
                      <div class="col-xs-12">
                        <button name="submit" type="submit" value="Send" class="btn btn-default col-xs-12">Submit</button>
                      </div>
                    </form>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <?php echo $result; ?>
                    </div>
                  </div>
                  <div class="col-md-10 vcenter info">
                      <p>Service Contact: Office of Youth Programs</p>
                      <p>Contact Email: <a href="mailto:summerjobs@dc.gov">summerjobs@dc.gov</a></p>
                      <p>Contact Phone: (202) 698-3492</p>
                      <p>Contact Fax: (202) 698-5693</p>
                      <p>Contact TTY: TTY</p>
                      <p>Contact Suite # 2nd Floor</p>
                      <p>Office Hours: 9 am to 5 pm</p>
                  </div>
                </div>


              </div>
        </div>
      </div>
      <div class="container-fluid email-section">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="row">
              <div class="col-md-8">
                <p>Sign-up to receive the latest updates about MBSYEP!</p>
              </div>
              <div class="col-md-4">
                <form id="GD-snippet-form" action="https://public.govdelivery.com/accounts/DCWASH/subscribers/qualify" accept-charset="UTF-8" method="post" target="_blank"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="authenticity_token" value="LmP5IFTgenDrWMQgKSiD/JM91zI3zvnFvD1T6RE++rfqkv6fP+wq3WKSMj9zkJAHTfJzgZGUAw/EMKZy/GaWDQ==" />
                <input type="hidden" name="topic_id" id="topic_id" value="DCWASH_726" />
                  <div class="input-group">
                    <input type="text" class="form-control long" placeholder="example@email.com" id="email" name="email">
                    <div class="input-group-btn button_panel">
                      <button class="btn btn-default" type="submit" name="commit" value="Submit" class="form_button">
                        <i class="glyphicon glyphicon-chevron-right"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer>
        <div class="footer" id="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <div class="footer-images">
                  <img class="img-syep" src="img/logo.png" alt="">
                  <img class="img-does" src="img/does.png" alt="">
                  <img class="img-dcgov" src="img/dcgov.png" alt="">
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
</body>
</html>
