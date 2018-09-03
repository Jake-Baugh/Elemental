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
  <link href="css/style.default.css" rel="stylesheet">
  <link href="css/custom.css" rel="stylesheet">

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
      <a href="clients.html">Clients</a>
      <a href="news-views.html">News &amp; Views</a>
      <a href="contact.php" class="active">Contact</a>
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
  <header class="masthead-small d-flex" id="bg-clients">
    <div class="container my-auto">
      <div class="col-lg-6 col-md-6 offset-lg-6 offset-md-6 mt-4">
      
      </div>
    </div>
  </header>



  <!-- Portfolio -->
  <section class="content-section bg-white" id="portfolio">
      <div class="container">
          <div class="row">
              <div class="col-md-8 col-md-offset-2 m-auto">
                  <div class="contact-form">
                    <h1>Get in Touch</h1>
                    <cms:form action='' method='post'>
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="inputName">Name*</label>
                            <cms:input name='name' type="text" class="form-control" id="inputName" required='1' />
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="inputEmail">Email*</label>
                            <cms:input name='email' type="text" class="form-control" id="inputEmail" required='1' />
                          </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group"> <label for="inputOrganisation">Organisation*</label>
                              <cms:input name='organisation' type="text" class="form-control" id="inputOrganisation" required='1' />
                            </div>
                          </div>

                          <div class="col-sm-12">
                              <div class="form-group">
                                <label for="inputPhone">Telephone</label>
                                <cms:input name='phone' type="text" class="form-control" id="inputPhone" />
                              </div>
                            </div>
                      </div>            
                      <div class="form-group">
                        <label for="inputSubject">Subject*</label>
                        <cms:input name='subject' type="text" class="form-control" id="inputSubject" required='1' />
                      </div>
                      <div class="form-group">
                        <label for="inputMessage">Message*</label>
                        <cms:input name='message' type='textarea' class="form-control" id="inputMessage" rows="5" required='1' />
                      </div>
                      <div class="form-group">
                        <label class="required" for="human">Are you human? Is sky blue or green? (4 characters required) <em>* <cms:if k_error_human>Please answer the question</cms:if></em></label>
                        <cms:input type="text" required='1' validator='regex=/^blue$/i' class="input-text required-entry" id="human" name="human"/>
                      </div>
                      <div class="text-center">
                        <button type="submit" class="btn btn-lg "><i class="fa fa-paper-plane"></i> Send</button>
                      </div>            
                      <cms:if k_success>
                        <cms:check_spam email=frm_email />
                        <cms:if k_success>
                          <cms:send_mail from=k_email_from to=k_email_to subject='Feedback From Your Site'>
                            The folling is an email sent by a visitor to your site:
                            <cms:show k_success />
                          </cms:send_mail>
                          <cms:if k_success >
                            <p><strong>Your info has been submitted - Thanks !</strong></p>
                          </cms:if >
                        </cms:if >
                      </cms:if >
                      <cms:if k_error >
                         <div class="error">
                            <cms:each k_error >
                               <br><cms:show item />
                            </cms:each>
                         </div>
                      </cms:if>
                    </cms:form>
                  </div>
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
