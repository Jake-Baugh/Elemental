<?php require_once( 'cctr/cms.php' ); ?>
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

  <link href="css/custom.css" rel="stylesheet">

  <link rel="stylesheet" href="https://www.jasny.net/bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <cms:embed 'navbar.html' />

  <!-- Header -->
  <header class="masthead d-flex" id="bg-main">
    <div class="container my-auto">
      <div class="col-lg-6 col-md-6 offset-lg-6 offset-md-6 mt-4">
        <div class="title ml-4">
          <h2 class="d-none d-md-block">
            Building pipeline </br>&amp; profile for health </br>and technology </br>companies.</h2>
        </div>
      </div>
      <div class="row">
          <div class="scroll-down"></div>
      </div>
    </div>
  </header>

  <div class="title-mobile d-block d-md-none text-center text-white p-3 bg-gradient">
    <h3><b>Building pipeline &amp; profile for health and technology companies.</b></h3>
  </div>

  <!-- Services -->
  <section class="content-section text-white text-center" id="services">
    <div class="container">
          <div class="row">
            <div class="mb-4 col-lg-3 col-md-6">
              <div class="card" id="fire">
                <div class="card-body">
                  <h4 class="card-title">Sales <br/>Acceleration</h4>
                  <ul class="text-left mb-4">
                    <li>Up to 1000% ROI on starter campaigns</li>
                    <li>Better qualified prospects</li>
                    <li>Build a predictable pipeline</li>
                    <li>50% back if results not hit in 12-months</li>
                    <li>20+ years NHS IT market experience</li>
                  </ul>
                  <img class="p-4"src="img/fire.png"></img>
                  <a href="data-services.html" class="card-link text-white"><h5>I want more leads</h5></a>
                </div>
              </div>
            </div>
            <div class="mb-4 col-lg-3 col-md-6">
              <div class="card" id="earth">
                <div class="card-body">
                  <h4 class="card-title">Data <br/>Services</h4>
                  <ul class="text-left mb-4">
                    <li>Bespoke builds or managed service</li>
                    <li>Market intelligence research</li>
                    <li>Data lines without gaps</li>
                    <li>100% data accuracy</li>
                    <li>Quicker than in-house admins</li>
                    <li>Over 1 million lines of NHS data built</li>
                  </ul>
                  <img class="p-4"src="img/earth.png"></img>
                  <a href="data-services.html" class="card-link text-white"><h5>Give me good data</h5></a>
                </div>
              </div>
            </div>
            <div class="mb-4 col-lg-3 col-md-6">
              <div class="card" id="water">
                <div class="card-body">
                  <h4 class="card-title">Marketing &amp; Creative</h4>
                  <ul class="text-left mb-4">
                    <li>Focus on ROI and best results</li>
                    <li>Strategic planning to tactical delivery</li>
                    <li>Integrated digital campaigns</li>
                    <li>Brand development &amp; creative collateral</li>
                    <li>Video production and animation</li>
                  </ul>
                  <img class="p-4"src="img/water.png"></img>
                  <a href="data-services.html" class="card-link text-white"><h5>Make me look great</h5></a>
                </div>
              </div>
            </div>
            <div class="mb-4 col-lg-3 col-md-6">
              <div class="card" id="air">
                <div class="card-body">
                  <h4 class="card-title">PR &amp; Communications</h4>
                  <ul class="text-left mb-4">
                  <li>NHS IT PR specialists</li>
                  <li>From planning to end-product</li>
                  <li>Messaging &amp; positioning</li>
                  <li>Thought leadership &amp; social media</li>
                  <li>Content that gets media attention</li>
                  <li>Measurable results</li>
                  <li>Transparent pricing</li>
                  </ul>
                  <img class="p-4"src="img/air.png"></img>
                  <a href="data-services.html" class="card-link text-white"><h5>Build my brand</h5></a>
                </div>
              </div>
            </div>
          </div>
      <!--<div class="row mb-4 mt-4">
        <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
          <div class="service-icon mx-auto pb-3 text-white" style="height:580px" id="fire">
            <h4 class="service-title pt-2 mb-2">Sales
              <br/>Acceleration</h4>
            <ul class="mb-4">
              <li>Up to 1000% ROI on starter campaigns</li>
              <li>Better qualified prospects</li>
              <li>Build a predictable
                <br/>pipeline</li>
              <li>50% back if results not hit in 12-months</li>
              <li>20+ years NHS IT market experience</li>
            </ul>
            <div class="col-md-12 mb-3">
              <img src="img/fire.png" width="60%"></img>

            </div>
            <a href="sales-acceleration.html" class="text-white"><h5>I want more leads</h5></a>

          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
          <div class="service-icon mx-auto pb-3 text-white" style="height:580px" id="earth">
            <h4 class="service-title pt-2 mb-2">Data
              <br/>Services</h4>
            <ul class="mb-4">
              <li>Bespoke builds or managed service</li>
              <li>Market intelligence research</li>
              <li>Data lines without gaps</li>
              <li>100% data accuracy</li>
              <li>Quicker than in-house admins</li>
              <li>Over 1 million lines of NHS data built</li>


            </ul>
            <div class="col-md-12 mb-3">
              <img src="img/earth.png" width="60%"></img>

            </div>
            <a href="data-services.html" class="text-white"><h5>Give me good data</h5></a>

          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
          <div class="service-icon mx-auto pb-3 text-white" style="height:580px" id="water">
            <h4 class="service-title pt-2 mb-2">Marketing &amp; Creative</h4>
            <ul class="mb-4">
              <li>Focus on ROI and best results</li>
              <li>Strategic planning to tactical delivery</li>
              <li>Integrated digital campaigns</li>
              <li>Brand development &amp; creative collateral</li>
              <li>Video production and animation</li>
            </ul>
            <div class="col-md-12 mb-3">
              <img src="img/water.png" width="60%"></img>

            </div>
            <a href="marketing.html" class="text-white"><h5>Make me look great</h5></a>

          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
          <div class="service-icon mx-auto pb-3 text-white" style="height:580px" id="air">
            <h4 class="service-title pt-2 mb-2">PR &amp; Communications</h4>
            <ul class="mb-4">
              <li>NHS IT PR specialists</li>
              <li>From planning
                <br/>to end-product</li>
              <li>Messaging &amp; positioning</li>
              <li>Thought leadership &amp; social media</li>
              <li>Content that gets media attention</li>
              <li>Measurable results</li>
              <li>Transparent pricing</li>
            </ul>
            <div class="col-md-12 mb-3">
              <img src="img/air.png" width="60%"></img>

            </div>
            <a href="pr-comms.html" class="text-white"><h5>Build my brand</h5></a>

          </div>
        </div>
      </div>-->
    </div>
  </section>

  <!-- About -->
  <section class="content-section bg-light" id="about">
    <div class="container">
      <div class="row mt-4 mb-4">
        <div class="col-md-5 col-sm-12">
          <h3 class="mb-3">We are a growth agency</h3>
          <h4 class="mb-3">Results-based. NHS IT experience. Innovative approach.</h4>
          <p class="mb-4">We believe there is a better way to helping sales, marketing and business development directors in the digital
            heath sector manage data, develop pipeline, raise profile and hit targets.</p>
          <a href="about.html#purpose" class="btn btn-lg mr-4 mb-4">Find out more</a>
          <a href="about.html#team" class="btn btn-lg mb-4">Meet the team</a>
        </div>
        <div class="col-md-7 col-sm-12">
          <div class="word-cloud">
            <img src="img/elemental-word-cloud.svg"></img>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="content-section bg-gradient text-center text-white">
    <div class="container">
      <div class="row mt-4 text-center">
        <div class="col-md-12 mb-5">
          <h3>We're all about results</h3>
        </div>
      </div>
      <div class="row mb-5">
        <div class="col-lg-3 col-md-6">
          <div class="statsbox col-md-12 mb-4">
            <div class="statcontent">
              <h3 class='numscroller' data-min='1' data-max='1000' data-increment='20'>1000</h3>
              <h3 class="numscroller">%</h3>
              <p>ROI from Sales Acceleration Activity</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="statsbox col-md-12 mb-4">
            <div class="statcontent">
              <h3 class='numscroller' data-min='0' data-max='1000000' data-increment='10000'>1000000</h3>
              <p>lines of NHS data built &amp; managed</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="statsbox col-md-12 mb-4">
            <div class="statcontent">
              <h3 class="numscroller">£</h3>
              <h3 class='numscroller' data-min='0' data-max='1600000' data-increment='10000'>1600000</h3>
              <p>Return from 10 day starter campaign</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="statsbox col-md-12 mb-4">
            <div class="statcontent">
              <h3 class='numscroller' data-min='0' data-max='30' data-delay="2" data-increment='1'>30</h3>
              <h3 class="numscroller">&nbsp;years</h3>
              <p>Combined NHS IT market experience</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    </div>
  </section>

  <!-- Portfolio -->
  <section class="content-section" id="portfolio">
    <div class="container">
      <div class="row text-center">
        <div class="text-white col-md-4 offset-md-4 mb-5">
          <h3>Our Work</h3>
        </div>
      </div>

      <div class="row">
        <cms:pages masterpage='blog.php' folder='case-study' paginate='1' limit='3' >
        <div class="col-xs-12 col-sm-6 col-md-4 blogBox moreBox">
          <div class="item">
            <div class="image-box" style="background-image:url(img/client/medilogik.jpg)">
              <a href="<cms:show k_page_link />">
                <img src="<cms:show blog_image />">
              </a>
            </div>
            <div class="blogTxt">
              <span class="tags"><cms:show k_page_foldertitle /></span>
              
              <a href="<cms:show k_page_link />"><h5><cms:show k_page_title /></h5></a>
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

  <!-- Call to Action -->
  <section class="content-section bg-blog">
    <div class="interior container clearfix">
      <div class="row text-center">
        <div class="text-white col-md-4 offset-md-4 mb-5">
          <h3>We Blog</h3>
        </div>
      </div>
      <div class="row">
        <cms:set global_limit = "<cms:get_custom_field 'records_visible' masterpage='globals.php' />" scope='global' />
        <cms:pages masterpage='blog.php' folder='blog' limit=global_limit >
          <cms:if k_count gt '3'>
            <div class="col-xs-12 col-sm-6 col-md-4 blogBox moreBox" style="display:none">
          <cms:else />
            <div class="col-xs-12 col-sm-6 col-md-4 blogBox moreBox">
          </cms:if >
          <div class="item">
            <a href="<cms:show k_page_link />">
              <img src="<cms:show blog_image />">
            </a>
            <div class="blogTxt">
              
              <span class="tags"><cms:show k_page_foldertitle /></span>
              <a href="<cms:show k_page_link />"><h5><cms:show k_page_title /></h5></a>
              <p class="post_intro hidden-xs">
                <cms:excerpt count='40' ><cms:show blog_content /></cms:excerpt>
              </p>
            </div>
          </div>
        </div>
        </cms:pages >
        <div id="loadMore">
            <a href="#" class="btn btn-lg">Load more</a>
        </div>
      </div>
    </div>
  </section>

  <section class="content-section bg-white">
    <div class="container">
      <div class="row mt-4 mb-4 text-center">
        <div class="col-md-12 mb-2">
          <h3>Clients and experience</h3>
        </div>
      </div>
      <section class="customer-logos slider">
      <cms:pages masterpage='clientlogos.php' >
        <cms:if cl_slider eq '1' >
          <div class="slide">
            <img src="<cms:show cl_image />"/>
          </div>
        </cms:if >
      </cms:pages >
      </section>
    </div>
  </section>

  <!-- Map 
    <section id="contact" class="map">
      <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
      <br/>
      <small>
        <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
      </small>
    </section> -->


  <cms:embed 'footer.html' />

</body>

</html>
<?php COUCH::invoke(); ?>
