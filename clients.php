<?php require_once( 'cctr/cms.php' ); ?>
<cms:template hidden='1' order='21' />
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
            <cms:pages masterpage='pages.php' folder='case-study' paginate='1' limit='3' >
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
                    <cms:excerpt count='25' ><cms:show blog_content /></cms:excerpt>
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

</body>

</html>
<?php COUCH::invoke(); ?>
