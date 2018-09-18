<?php require_once( 'cctr/cms.php' ); ?>
<cms:template hidden='1' order='25' />
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>We Are Elemental</title>

  <!-- set site base for relative links -->
  <base href="<cms:show k_site_link />" />
  <!-- Bootstrap Core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap-grid.min.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,800,300italic,400italic,700italic" rel="stylesheet"
    type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
    crossorigin="anonymous">

  <link href="css/infinite-slider.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="https://www.jasny.net/bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <cms:embed 'navbar.html' />

  <!--<nav class="navbar fixed-top navbar-dark">
        <div class="container my-auto">
         
        <a class="navbar-brand" href="index.php"><img src="img/elemental_logo.svg" width="250px"></img></a>
      
        <div class="ml-auto menu-info d-none d-lg-block">
        <div class=" d-inline-block contact-info">
          <p>Phone: <cms:get_custom_field 'phone' masterpage='globals.php' />0808 168 6426</p>
          <p>Email: hello@weareelemental.uk</p>
        </div>
     
        <div class="d-inline-block social-icons"><a href="https://twitter.com/Elemental_BD"><i class="fab fa-twitter-square"></i></a><a href="https://www.linkedin.com/company/bdms-uk"><i class="fab fa-linkedin"></i></a></div>
        </div>
        <button class="navbar-toggler" type="button">
          <span class="navbar-toggler-icon"></span>
        </button>
        
     
        </div>
      </nav> -->

  <!-- Header -->
  <header class="masthead d-flex" id="bg-ds">
      <div class="container my-auto">
        <div class="col-lg-6 col-md-6 offset-lg-6 offset-md-6 mt-4">
          <div class="title ml-4">
            <h2 class="d-none d-md-block">
            Data Services</h2>
          <h3 class="d-none d-md-block text-white">Arming your sales force
            <br/>with quality marketing intelligence</h3>
            </div>
        </div>
            <div class="row">
                <div class="scroll-down"></div>
              </div>
            </div>
          </header>
        
          <div class="title-mobile d-block d-md-none text-center text-white p-3" id="earth">
            <h2>Data Services</h2>
            <h3><b>Arming your sales force with quality marketing intelligence</b></h3>
          </div>

  <!-- Services -->
  <section class="content-section text-white text-center" id="services">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-4 offset-md-4 mb-5">
          <h3 class="text-earth">Our Services</h3>
        </div>
      </div>
      <div class="row">
          <div class="mb-4 col-lg-3 col-md-6">
            <div class="sevice-card card" id="earth">
              <div class="card-body">
                <img class="icon p-4" src="img/icon-puzzle.svg"></img>
                <h4 class="card-title">Data
                    <br/>Builds</h4>
                <p class="service-p mb-4">One-off quick databases to kick-start your sales campaigns</p>
              </div>
            </div>
          </div>
          <div class="mb-4 col-lg-3 col-md-6">
            <div class="sevice-card card" id="earth">
              <div class="card-body">
                <img class="icon p-4" src="img/icon-magnify.svg"></img>
                <h4 class="card-title">Data
                    <br/>checking</h4>
                  <p class="service-p mb-4">Maximise your current data by updating information and filling in gaps</p>
              </div>
            </div>
          </div>
          <div class="mb-4 col-lg-3 col-md-6">
            <div class="sevice-card card" id="earth">
              <div class="card-body">
                <img class="icon p-4" src="img/icon-gear.svg"></img>
                <h4 class="card-title">Ongoing <br />maintenance</h4>
                <p class="service-p mb-4">Annual plans ensure your data is always up-to-date for each campaign</p>
              </div>
            </div>
          </div>
          <div class="mb-4 col-lg-3 col-md-6">
            <div class="sevice-card card" id="earth">
              <div class="card-body">
                <img class="icon p-4" src="img/icon-chess.svg"></img>
                <h4 class="card-title">Market <br />intelligence</h4>
                <p class="service-p mb-4">Actionable prospect and market data to prioritise sales activity and shape marketing strategies</p>
              </div>
            </div>
          </div>
  
        </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="content-section text-center">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-12 mb-5">
          <h3 class="text-earth">Finally, sales and market data you can count on</h3>
        </div>
      </div>
      <div class="row">
        <div class="services-3-col col-md-2 mb-5">
          <img class="d-none d-md-block" src="img/icon-magniman.svg" width="60%" />
        </div>
        <div class="col-md-10 text-left">

          <h4 class="text-earth">Reach hard-to-find middle-managers</h4>
          <p class="text-grey">Many agencies struggle to get quality NHS data beyond board-level execs to all budget holders and senior managers.
            We know who to target, and how to target them. Top tip: don’t rely on job titles to ascertain budget responsibility
            – it changes in every organisation!</p>


        </div>


        <div class="services-3-col col-md-2 mb-5">
          <img class="d-none d-md-block" src="img/icon-infinity.svg" width="60%" />
        </div>
        <div class="col-md-10 text-left">

          <h4 class="text-earth">Unlimited use</h4>
          <p class="text-grey">No limited usage licences. No expiry dates. No fake contact information to catch you out if you use data without
            permission. It’s all yours. Go forth and sell.</p>

        </div>


        <div class="services-3-col col-md-2 mb-5">
          <img class="d-none d-md-block" src="img/icon-crosshair.svg" width="60%" />
        </div>
        <div class="col-md-10 text-left">
          <h4 class="text-earth">Accurate data</h4>
          <p class="text-grey">If there is an email bounce-back, we’ll find out why. If someone has changed jobs, we’ll see who has taken over.
            On the rare occasion there is a discrepancy, we won’t sleep until its sorted.</p>

        </div>
      </div>

    </div>

    </div>
  </section>

  <section class="bg-earth20 pt-4 pb-4">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-12 mb-5">
          <h3 class="text-earth pt-4">Why work with us?</h3>
        </div>
      </div>
      <div class="row text-center pb-4">
        <div class="col-md-4">
          <h3 class="text-earth">Over 1 million lines of NHS data built</h3>
          <hr>
          <p>That’s a lot of data across NHS acute, mental health &amp; community trusts, CCGs and more. We use this experience
            to advise on the best way to reach your targets, and get the best ROI on your spend with us.</p>
        </div>
        <div class="col-md-4">
          <h3 class="text-earth">Faster than your in-house admin</h3>
          <hr>
          <p>It typically takes 7 weeks less for us to do the same data build as an administrator. How? Because we are skilled
            at researching and managing data. It also helps that we have over 20+ years of B2B data <br/>builds in healthcare.</p>
        </div>
        <div class="col-md-4">
          <h3 class="text-earth">Invaluable market insight</h3>
          <hr>
          <p>We produce dynamic databases which include system data, contract end dates, and notes on who is the best person
            to target and why, to help prioritise sales engagement and deliver appointments faster.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-light">
  <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Carousel indicators -->
            <ol class="carousel-indicators">
              <cms:pages masterpage="testimonials.php" folder='data-services' >
              <cms:set cnt = "<cms:sub k_count '1' />"/>
              <cms:if cnt eq '0' >
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <cms:else />
                <li data-target="#myCarousel" data-slide-to="<cms:show cnt />"></li>
              </cms:if >
              </cms:pages >
            </ol>
            <!-- Wrapper for carousel items -->
            <div class="carousel-inner">
              <cms:pages masterpage="testimonials.php" folder='data-services' >
              <cms:if k_count eq '1' >
                <div class="item carousel-item active">
              <cms:else />
                <div class="item carousel-item">
              </cms:if >
                <div class="row">
                  <div class="col-sm-12">
                    <div class="media">
                      <div class="col-xs-12 col-md-9">
                        <div class="testimonial">
                          <p><cms:show ct_text /></p>
                          <p class="overview">
                            <b class="text-earth"><cms:show ct_name /></b>, <cms:show ct_organisation /></p>
                        </div>
                      </div>
                      <div class="col-xs-12 col-md-3">
                        <a href="#">
                          <img src="<cms:show ct_image />" alt="">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </cms:pages >
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="bg-s1" class="p-5 text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <h3>Hit targets sooner with better data</h3>
          <p class="h5">Are you being let down by outdated, erroneous B2B marketing contact data?
            <br />
            <span>
              <i class="fa fa-phone"></i> <cms:get_custom_field 'phone' masterpage='globals.php' /></span> &nbsp;
            <span>
              <i class="fa fa-envelope"></i> <cms:get_custom_field 'email' masterpage='globals.php' /></span>
          </p>
        </div>
        <div class="col-md-3">
          <img src="img/earth.png" width="80%"></img>
        </div>
      </div>
    </div>
  </section>

  <cms:embed 'footer.html' />

</body>

</html>
<?php COUCH::invoke(); ?>
