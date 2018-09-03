<?php require_once( 'cctr/cms.php' ); ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>We Are Elemental</title>

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

  <nav id="myNavmenu" class="navmenu navmenu-fixed-right offcanvas" role="navigation">
    <div class="vertical-menu">
      <a href="index.php">Home</a>
      <a href="sales-acceleration.html">Sales Acceleration</a>
      <a href="data-services.html">Data Services</a>
      <a href="marketing.html">Marketing &amp; Creative</a>
      <a href="pr-comms.html">PR &amp; Communications</a>
      <a href="about.html">About</a>
      <a href="clients.php" class="active">Clients</a>
      <a href="news-views.php">News &amp; Views</a>
      <a href="contact.php">Contact</a>
      <a href="privacy-policy.html">Privacy Policy</a>
      <a href="cookie-policy.html">Cookie Policy</a>
    </div>
  </nav>

  <div class="navbar navbar-dark navbar-default navbar-fixed-top">
    <div class="container my-auto">

      <!-- Brand -->
      <a class="navbar-brand" href="index.php">
        <img src="img/elemental_logo.svg"></img>
      </a>

      <!-- Toggler/collapsibe Button -->
      <div class="ml-auto menu-info d-none d-lg-block">
        <div class=" d-inline-block contact-info">
          <p>Phone: 0808 168 6426</p>
          <p>Email: hello@elemental-solutions.co.uk</p>
        </div>

        <div class="d-inline-block social-icons">
          <a href="https://twitter.com/Elemental_BD"><i class="fab fa-twitter-square"></i></a>
          <a href="https://www.linkedin.com/company/bdms-uk"><i class="fab fa-linkedin"></i></a>
        </div>
      </div>
      <button class="navbar-toggle navbar-toggler" data-toggle="offcanvas" data-target="#myNavmenu" data-canvas="body" type="button">
        <span class="navbar-toggler-icon"></span>
      </button>


    </div>
  </div>

  <!-- Header -->
  <header class="masthead-medium d-flex" id="bg-clients">
    <div class="container my-auto">
      <div class="col-12 col-md-8 offset-md-2 mt-5 text-center" style="z-index: 100">
        <h2>Clients</h2>
          <p class="h3 text-white">We work with some great companies across the health and technology sectors.</p>
      </div>
    </div>
  </header>



  <!-- Portfolio -->
  <section class="content-section bg-light" id="portfolio">
    <div class="container">

      <cms:pages masterpage='clientlogos.php' >
        <cms:set num = "<cms:mod k_count '4'/>"/>
        <cms:if num == '1'>
          <div class="row client-icon">
        </cms:if >
          <div class="col-xs-12 col-sm-6 col-md-3 p-4">
            <img src="<cms:show cl_image />"/>
          </div>
        <cms:if num == '0' || k_count == k_total_records>
          </div>
        </cms:if >
      </cms:pages >
    </div>
  </section>

  <section class="content-section" id="portfolio">
        <div class="container">
          <div class="row text-center">
            <div class="text-white col-md-4 offset-md-4 mb-5">
              <h3>Case Studies</h3>
            </div>
          </div>
    
          <div class="row">
            <cms:pages masterpage='blog.php' folder='case-study' paginate='1' limit='3' >
            <div class="col-xs-12 col-sm-6 col-md-4 blogBox moreBox">
              <div class="item">
                <div class="image-box" style="background-image:url(img/client/medilogik.jpg)">
                  <a href="<cms:show k_page_link />"><img src="<cms:show blog_image />" alt="..."></a>
                </div>
                <div class="blogTxt">
                    <span class="tags"><cms:show k_page_foldertitle /></span>
                  <a href="<cms:show k_page_link />"><h5>
                    <cms:show k_page_title />
                    </h5></a>
                  <p class="post_intro hidden-xs">
                    <cms:excerpt count='40' ><cms:show blog_content /></cms:excerpt>
                  </p>
                </div>
              </div>
            </div>
            </cms:pages >
          </div>
        </div>
        </div>
      </section>


  <cms:embed 'footer.html' /> 

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
  <!-- Plugin JavaScript -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

  <script src="https://www.jasny.net/bootstrap/dist/js/jasny-bootstrap.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/numScroller.js"></script>
  <script src="js/main.min.js"></script>

</body>

</html>
<?php COUCH::invoke(); ?>
