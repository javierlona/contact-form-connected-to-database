<?php include "private/consultation-process.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="ie=edge" http-equiv="X-UA-Compatible">
  <title>Best Price and Quick Turnaround Web Design Service | Lona Sites</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
  rel="stylesheet">
  <link href=
  "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css" rel=
  "stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css" rel=
  "stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>
<body id="home">
  <!-- HOME SECTION -->
  <header id="home-section">
    <div class="dark-overlay">
      <div class="home-inner">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <h1 class="display-4 text-center">Live <strong>Your Life.<br></strong> Hire a
              <strong>Web Designer.</strong></h1>
              <div class="d-flex flex-row">
                <div class="p-1 align-self-start d-none d-sm-block">
                  <i class="fa fa-check"></i>
                </div>
                <div class="p-1 align-self-end">
                  <p>An attractive, professional-looking website instills trust in customers who
                  don’t know you.</p>
                </div>
              </div>
              <div class="d-flex flex-row">
                <div class="p-1 align-self-start d-none d-sm-block">
                  <i class="fa fa-check"></i>
                </div>
                <div class="p-1 align-self-end">
                  <p>Be in complete control of your domain name, hosting account, and website
                  content without being stuck with one web designer.</p>
                </div>
              </div>
              <div class="d-flex flex-row">
                <div class="p-1 align-self-start d-none d-sm-block">
                  <i class="fa fa-check"></i>
                </div>
                <div class="p-1 align-self-end">
                  <p>Own a website that you can maintain, change, and update yourself without web
                  designers ongoing monthly fees.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 text-center" id="consultation">
              <div class="card bg-primary text-center card-form">
                <div class="card-body">
                  <h3>Sign Up for a FREE Website Consultation</h3>
                  <?php
                    if (isset($msg)) :
                      echo $msg;
                    else:
                  ?>
                  <form id="myform" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                    <p>Please fill out form</p>
                    <div class="form-group">
                      <input name="person-name" id="person-name" class="form-control form-control-lg" placeholder="Name*" type="text"
                      value="<?php if (isset($personName)) { echo $personName; } ?>">
                      <?php if (isset($err_nameEmpty)) { echo $err_nameEmpty; } ?>
                      <?php if (isset($err_fullnamePatternMatch)) { echo $err_fullnamePatternMatch; } ?>
                    </div>
                    <div class="form-group">
                      <input name="person-email" id="person-email" class="form-control form-control-lg" placeholder="Email*" type=
                      "email" value="<?php if (isset($personEmail)) { echo $personEmail; } ?>">
                      <?php if (isset($err_emailEmpty)) { echo $err_emailEmpty; } ?>
                      <?php if (isset($err_emailinvalid)) { echo $err_emailinvalid; } ?>
                    </div>
                    <div class="form-group">
                      <input name="person-phone" id="person-phone" class="form-control form-control-lg" placeholder="Telephone"
                      type="text" value="<?php if (isset($personPhone)) { echo $personPhone; } ?>">
                      <?php if (isset($err_phonePatternMatch)) { echo $err_phonePatternMatch; } ?>
                    </div>
                    <button class="btn btn-danger btn-block" name="consultation_action" type="submit" value=
                    "Get my FREE Consultation">Get my FREE Consultation</button>
                  </form>
                  <?php endif; // output form ?>
                </div>
              </div>
              <div class="container">
                <h1><a class="logo-phone" href="tel:+12147157510">Questions? Call us<br>
                214.715.7510</a></h1>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="col text-center">
                <div class="py-5">
                  <h2 class="display-4">Portfolio</h2>
                  <p class="lead">Our goal is to help your business access new customers via
                  modern, dynamic, easy to use, and cost-effective websites.</p><button class=
                  "btn btn-primary" data-target="#portfolioModal" data-toggle="modal">View
                  Portfolio</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header><!-- Portfolio MODAL -->
  <div class="modal fade text-dark" id="portfolioModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="portfolioModalTitle">Recent Projects</h5><button class=
          "close" data-dismiss="modal"><span>&times;</span></button>
        </div>
        <div class="modal-body">
          <!--begin carousel-->
          <div class="carousel slide" data-interval="false" data-ride="carousel" id="myGallery">
            <ol class="carousel-indicators">
              <li class="active" data-slide-to="0" data-target="#myGallery"></li>
              <li data-slide-to="1" data-target="#myGallery"></li>
              <li data-slide-to="2" data-target="#myGallery"></li>
              <li data-slide-to="3" data-target="#myGallery"></li>
              <li data-slide-to="4" data-target="#myGallery"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img alt="La Pina Loca" class="d-block w-100 p-4" src="img/lapinaloca.jpg">
              </div>
              <div class="carousel-item">
                <img alt="Austin Event Center" class="d-block w-100 p-4" src="img/austin-event-center-portfolio.jpg">
              </div>
              <div class="carousel-item">
                <img alt="Servant Home Inspection" class="d-block w-100 p-4" src="img/servanthi.jpg">
              </div>
              <div class="carousel-item">
                <img alt="Dr Pham Dentistry" class="d-block w-100 p-4" src="img/drphamdentist.jpg">
              </div>
              <div class="carousel-item">
                <img alt="Lona's Landscaping" class="d-block w-100 p-4" src="img/lonaslandscaping.jpg">
              </div>
            </div><a class="carousel-control-prev" data-slide="prev" href="#myGallery" role=
            "button"><span aria-hidden="true" class="carousel-control-prev-icon"></span>
            <span class="sr-only">Previous</span></a> <a class="carousel-control-next" data-slide=
            "next" href="#myGallery" role="button"><span aria-hidden="true" class=
            "carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary btn-block" data-dismiss="modal" onclick="#" type=
          "submit">Get a Free Consultation</button>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
  </script>
  <script>
    $('#person-phone').keyup(function(){
      $(this).val($(this).val().replace(/(\d{3})\-?(\d{3})\-?(\d{4})/,'$1-$2-$3'))
    });
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js">
  </script>
  <script src=
  "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js">
  </script>
</body>
</html>
