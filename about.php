<?php require_once( 'cctr/cms.php' ); ?>
<cms:template hidden='1' order='20' />
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
  <link href="css/style.default.css" rel="stylesheet">
  <link href="css/custom.css" rel="stylesheet">

  <link rel="stylesheet" href="https://www.jasny.net/bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <cms:embed 'navbar.html' />

  <!-- Header -->
  <header class="masthead-medium d-flex" id="bg-about">
    <div class="container my-auto">
        <div class="col-12 col-md-8 offset-md-2 mt-5 text-center" style="z-index: 100">
        <h2>We are elemental</h2>
        <p class="h3 text-white">A growth agency that starts the sales process. <br />The spark that ignites the flame.</p>
      </div>
    </div>
  </header>


  <section class="content-section" id="purpose">
    <div class="container">
      <div class="row">
        <div class="col-md-4 d-none d-md-block">
          <img src="img/elemental-about.jpg" width="100%" />
        </div>
        <div class="col-md-8 pl-4">
          <h3 class="text-white">What we do</h3>
          <p class="text-grey">Elemental is a full-service growth agency helping technology companies build stronger
            sales pipelines and develop brand profile through results-based approaches.

            <br /><br />Sales, marketing and business development directors are continually impressed with the return
            on investment they receive from our work.

            <br /><br />Our savvy approach to sales acceleration can achieve up to 90+% in sales engagement rates and
            upward of 40% on appointment setting across your targets.

            <br /><br />Ambitious people appoint us to help their organisations enter new markets, launch products,
            raise their profile, manage their reputation – in summary we support their business growth.
          </p>
        </div>
      </div>
    </div>
  </section>


  <section class="bg-fire20 pt-4 pb-4">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-12 mb-5">
          <h3 class=" pt-4">Why we exist</h3>
        </div>
      </div>
      <div class="row text-center pb-4">
        <div class="col-md-4">
          <h3 class="">Ownership</h3>
          <hr>
          <p>
            Established in 2006 Elemental was borne from the belief that clients need and deserve a better kind of
            sales acceleration and marketing agency. At Elemental, we think differently, take ownership and deliver
            outstanding results campaign-after-campaign.</p>

        </div>
        <div class="col-md-4">
          <h3 class="">Experience</h3>
          <hr>
          <p>Elemental has developed impressively in recent years and is now an established Growth Agency delivering strategic business development, sales acceleration, data, marketing, creative and PR solutions. Elemental has worked with healthcare technology companies for over 12 years, drawing on a diverse range of experience.</p>

        </div>
        <div class="col-md-4">
          <h3 class="">Results</h3>
          <hr>
          <p>We are an experienced team of business development and marketing veterans, focused on delivering
            exceptional results in a variety of niched sectors. Our strength is our focus and we focus on results.</p>

        </div>
      </div>
    </div>
  </section>


  <!-- Portfolio -->
  <section class="content-section bg-light" id="team">
    <div class="container">

      <div class="text-center col-md-8 offset-md-2 mb-5">
        <h3>Meet the team</h3>
        <p>We are an experienced bunch of sales, business development and marketing veterans, focused
          on delivering exceptional results in niched sectors. We’re jolly nice to work with too.</p>
      </div>

      <div class="people-comp">
        <cms:set team_cnt = '0' scope='global' />
        <cms:pages masterpage='team.php' folder='staff' >
        <div class="person" data-pos="<cms:show team_cnt />" style="background-image: url('<cms:show team_image />');">
          <div class="meta">
            <h3><cms:show k_page_title /></h3>
            <h4>
              <cms:show team_role />
            </h4>
            <p><cms:show team_about /></p>
          </div>
          <cms:set team_cnt = "<cms:add team_cnt '1' />" scope='global' />
        </div>
        </cms: pages>

        <div class="lightbox" style="opacity: 1; display: none;">
          <div class="close"></div>
          <div class="meta">
            <h3></h3>
            <h4></h4>
            <p></p>
          </div>
          <div class="image" style="background-image: url('');"></div>
        </div>

      </div>
    </div>
  </section>


  <section class="pb-5 bg-light">
    <div class="container">

      <div class="text-center col-md-8 offset-md-2 mb-5">
        <h3>Industry experts</h3>
        <p>We have access to a number of experienced and well-connected people across the digital
          health spectrum, specialising in clinical, technical, sales and marketing areas.</p>
      </div>
      <div class="people-comp">


        <cms:pages masterpage='team.php' folder='experts' >
        <div class="person" data-pos="<cms:show team_cnt />" style="background-image: url('<cms:show team_image />');">
          <div class="meta">
            <h3><cms:show k_page_title /></h3>
            <h4>
              <cms:show team_role />
            </h4>
            <p><cms:show team_about /></p>
          </div>
          <cms:set team_cnt = "<cms:add team_cnt '1' />" scope='global' />
        </div>
        </cms: pages>

      </div>
    </div>
  </section>

  <!-- FIRST SECTION -->
  <section class="content-section" id="first">
    <div class="container">
      <div class="row">
          <div class="text-center col-md-8 offset-md-2">
          <div class="offer text-center">
            <h1 class="text-white">Work at elemental</h1>
            <p class="text-white">Listen to clients. Understand clients. Execute your ideas. Take ownership. Learn
              all the time. Solve problems. Deliver results. Eat biscuits. Have fun. The life of a co-worker at
              Elemental.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- FIRST SECTION END -->

  <section class="content-section bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-8 pl-4 my-auto">
          <h3>Stay in touch</h3>
          <p>We are always happy to have a chat with talented people that have a hunger to exceed expectations for
            our clients, and never want to stop learning.

            <br /><br />If you are interested in working in a dynamic growth agency and have experience in sales,
            marketing, PR, communications, business development, or research, then get in touch.
          </p>
          <div class="row pt-4">
          <div class="col-6">
            <div class="d-inline-block">
              <p>Phone <i class="fas fa-phone"></i> : <cms:get_custom_field 'phone' masterpage='globals.php' /></p>
              <p>Email <i class="fas fa-envelope"></i> : <cms:get_custom_field 'email' masterpage='globals.php' /></p>
            </div>
          </div>
          <div class="col-6">
            <div class="d-inline-block">
              <p>Twitter <i class="fab fa-twitter"></i> : <cms:get_custom_field 'twitter_hdl' masterpage='globals.php' /></p>
              <p>Linkedin <i class="fab fa-linkedin-in"></i> : <cms:get_custom_field 'linkedin_name' masterpage='globals.php' /></p>
            </div>
          </div>
          </div>

        </div>
        <div class="col-md-4 d-none d-md-block">
          <img src="img/elemental-about2.jpg" width="100%" />
        </div>
      </div>
    </div>
  </section>

  <cms:embed 'footer.html' />

</body>

</html>
<?php COUCH::invoke(); ?>
