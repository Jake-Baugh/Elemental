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

  <cms:embed 'navbar.html' />

  <!-- Header -->
  <header class="masthead-small d-flex" id="bg-clients">
    <div class="container my-auto">
      <div class="col-lg-6 col-md-6 offset-lg-6 offset-md-6 mt-4">
      
      </div>
    </div>
  </header>

  <section class="content-section bg-blue" id="portfolio">
      <div class="container">
          <div class="row">
              <div class="col-md-8 col-md-offset-2 m-auto">
   <div class="row pt-3">
          <div class="col-6">
            <div class="d-inline-block">
              <p>Phone <i class="fas fa-phone"></i> : 0808 168 6426</p>
              <p>Email <i class="fas fa-envelope"></i> : hello@weareelemental.uk</p>
            </div>
          </div>
          <div class="col-6">
            <div class="d-inline-block">
              <p>Twitter <i class="fab fa-twitter"></i> : @WeAreElemental_</p>
              <p>Linkedin <i class="fab fa-linkedin-in"></i> : WeAreElemental</p>
            </div>
          </div>
          </div>
</div>
</section>

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
                        <label class="required" for="human">Are you human? Is the sky blue or green? (4 characters required) <em>* <cms:if k_error_human>Please answer the question</cms:if></em></label>
                        <cms:input type="text" required='1' validator='regex=/^blue$/i' class="form-control input-text required-entry" id="human" name="human"/>
                      </div>
                      <div class="text-center">
                        <button type="submit" class="btn btn-lg "><i class="fa fa-paper-plane"></i> Send</button>
                      </div>            
                      <cms:if k_success>
                        <cms:check_spam email=frm_email />
                        <cms:if k_success>
                          <cms:send_mail from="<cms:get_custom_field 'contact_from' masterpage='mailsettings.php'/>" to="<cms:get_custom_field 'contact_to' masterpage='mailsettings.php'/>" subject='Feedback From Your Site'>
                            The following message is from your site contact form:
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

</body>

</html>
<?php COUCH::invoke(); ?>
