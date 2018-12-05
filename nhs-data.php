<?php

  function mailchimp_subscriber_status( $email, $status, $list_id, $api_key, $merge_fields = array('FNAME'=> '', 'FPHONE'=> '', 'FMSG'=> '') ){
    $data = array(
         'apikey'        => $api_key,
         'email_address' => $email,
         'status'        => $status,
         'merge_fields'  => $merge_fields
    );
 $mch_api = curl_init(); // initialize cURL connection

    curl_setopt($mch_api, CURLOPT_URL, 'https://' . substr($api_key,strpos($api_key,'-')+1) . '.api.mailchimp.com/3.0/lists/' . $list_id . '/members/' . md5(strtolower($data['email_address'])));
    curl_setopt($mch_api, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Authorization: Basic '.base64_encode( 'user:'.$api_key )));
    curl_setopt($mch_api, CURLOPT_USERAGENT, 'PHP-MCAPI/2.0');
    curl_setopt($mch_api, CURLOPT_RETURNTRANSFER, true); // return the API response
    curl_setopt($mch_api, CURLOPT_CUSTOMREQUEST, 'PUT'); // method PUT
    curl_setopt($mch_api, CURLOPT_TIMEOUT, 10);
    curl_setopt($mch_api, CURLOPT_POST, true);
    curl_setopt($mch_api, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($mch_api, CURLOPT_POSTFIELDS, json_encode($data) ); // send data in json

    $result = curl_exec($mch_api);
      return $result;
    }
?>

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

    <link href="css/custom.css" rel="stylesheet">

    <link rel="stylesheet" href="https://www.jasny.net/bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <div class="navbar navbar-dark navbar-default navbar-fixed-top">
        <div class="container my-auto">

            <!-- Brand -->
            <a class="navbar-brand" href="index.php">
                <img src="img/elemental_logo.svg"></img>
            </a>

        </div>
    </div>

    <!-- Header -->
    <header class="masthead d-flex" id="bg-landing">
        <div class="container mt-60">
            <div class="col-lg-6 col-md-6 col-sm-7 landing-block">
                <div class="landing-title text-white">
                    <h2>Flexible, affordable NHS sales data and market intelligence
                    </h2>
                    <h4>Demand more from your data. Select one of our great value data or intelligence packages for:</h4>
                    <ul>
                        <li><i class="fa fa-check"></i>&emsp;Full visibility of sales opportunities</li>
                        <li><i class="fa fa-check"></i>&emsp;Better qualified prospects</li>
                        <li><i class="fa fa-check"></i>&emsp;Identifying senior NHS decision-makers</li>
                        <li><i class="fa fa-check"></i>&emsp;Managing sales activity more effectively</li>
                        <li><i class="fa fa-check"></i>&emsp;Guaranteed data accuracy</li>
                        <li><i class="fa fa-check"></i>&emsp;No data usage licence restriction</li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-5 mt-4">
                <div class="login-form fixed-form d-none d-md-block">
                    <a name="enquire1"></a>
<?php

  file_put_contents('php://stderr', print_r('before post check ', TRUE));
  if(isset($_POST['hid_enquire1']) && !empty($_POST['hid_enquire1'])) {


    $email = $_POST['email'];
    $NAME = $_POST['name'];
    $PHONE=$_POST['phone'];
    $ORG=$_POST['organisation'];
    $status = 'subscribed'; // "subscribed" or "unsubscribed" or "cleaned" or "pending"
    $list_id = '38c02caab7'; // mailchimp list id
    $api_key = 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-us13'; // mailchimp api key
    $merge_fields = array('MMERGE6' => $NAME, 'PHONE' => $PHONE, 'MMERGE5' => $ORG);


    file_put_contents('php://stderr', print_r($email, TRUE));
    file_put_contents('php://stderr', print_r($NAME, TRUE));
    file_put_contents('php://stderr', print_r($PHONE, TRUE));
    file_put_contents('php://stderr', print_r($ORG, TRUE));

    $result = mailchimp_subscriber_status($email, $status, $list_id, $api_key, $merge_fields );              
    file_put_contents('php://stderr', print_r($result, TRUE));

} else {
?>
                    <form action="#enquire1" method="post">

                        <h2 class="text-center">Enquire today and get
                            10% off your order*</h2>
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Name" required="required">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="organisation" placeholder="Organisation"
                                required="required">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email " required="required">
                        </div>
                        <div class="form-group">
                            <input type="phone" class="form-control" name="phone" placeholder="Telephone" required="required">
                        </div>
                        <input type="hidden" name="hid_enquire1" id="hid_enquire1" value="subscribe">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Enquire Now</button>
                        </div>
                    </form>
<?php
  }
?>
                </div>
            </div>
            <div class="row">
                <div class="scroll-down"></div>
            </div>
        </div>
    </header>

    <section class="landing-section content-section bg-landing">
        <div class="container mt-60">
            <div class="col-lg-6 col-md-6 landing-block">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Carousel indicators -->
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                        <div class="item carousel-item active">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="media">
                                        <div class="col-md-12">
                                            <div class="testimonial text-white">
                                                <img src="img/0.jpeg" class="avatar" />
                                                <p>“The data sourced and created by Elemental has enabled us to target
                                                    opportunities within NHS trusts for the validation of LIMS, and is
                                                    supporting our sales efforts by ensuring we prioritise qualified
                                                    prospects.”</p>
                                                <p class="overview">
                                                    <b class="text-earth">Stephen Seagreen-Bell</b>, Managing Director,
                                                    THC</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="landing-section content-section bg-landing">
        <div class="container mt-60">
            <div class="col-lg-6 col-md-6 landing-block">
                <div class="b-price-plan">
                    <div class="b-price-plan__item b-price-plan__head">
                        <h3>Basic</h3>
                    </div>
                    <div class="b-price-plan__item b-price-plan__cost" id="earth">
                        <div class="cost-time text-white">From</div>
                        <div class="cost-title text-white">250<span>00</span></div>

                    </div>
                    <ul class="p_plan_list">
                        <li><i class="fa fa-user" aria-hidden="true"></i>&emsp;5x named contacts per:</li>
                        <li><i class="fa fa-hospital-alt" aria-hidden="true"></i>&emsp;Organisation</li>
                        <li><i class="fa fa-briefcase-medical" aria-hidden="true"></i>&emsp;Job role</li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i>&emsp;Email address</li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i>&emsp;Telephone number</li>
                    </ul>
                </div>
                <div class="b-price-plan">
                    <div class="b-price-plan__item b-price-plan__head">
                        <h3>Basic +</h3>
                    </div>
                    <ul class="p_plan_list">
                        <li><i class="fa fa-check" aria-hidden="true"></i>Data revalidated every three months</li>
                    </ul>
                    <div class="b-price-plan__item b-price-plan__cost" id="earth">
                        <div class="text-white">Contact us for pricing</div>

                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="landing-section content-section bg-landing">
        <div class="container mt-60">
            <div class="col-lg-6 col-md-6 landing-block">
                <div class="b-price-plan" id="earth">
                    <div class="b-price-plan__item b-price-plan__head">
                        <h3 class="text-white">Intermediate</h3>
                    </div>
                    <div class="b-price-plan__item b-price-plan__cost bg-light">
                        <div class="cost-time">From</div>
                        <div class="cost-title">500<span>00</span></div>

                    </div>
                    <ul class="p_plan_list">
                        <li><i class="fa fa-check" aria-hidden="true"></i>&emsp;Basic, plus:</li>
                        <li><i class="fa fa-hospital-alt" aria-hidden="true"></i>&emsp;5x named
                            IT systems per organisation</li>
                        <li><i class="fa fa-database" aria-hidden="true"></i>&emsp;System
                            information
                            (product, supplier)
                        </li>
                        <li><i class="fa fa-file" aria-hidden="true"></i>&emsp;Install and contract end dates</li>
                        <li><i class="fa fa-pound-sign" aria-hidden="true"></i>&emsp;Purchasing decision-maker</li>
                    </ul>
                </div>
                <div class="b-price-plan">
                    <div class="b-price-plan__item b-price-plan__head" id="earth">
                        <h3 class="text-white">Intermediate +</h3>
                    </div>
                    <ul class="p_plan_list">
                        <li><i class="fa fa-check" aria-hidden="true"></i>Data revalidated every three months</li>
                    </ul>
                    <div class="b-price-plan__item b-price-plan__cost">
                        <div>Contact us for pricing</div>

                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="landing-section content-section bg-landing">
        <div class="container mt-60">
            <div class="col-lg-6 col-md-6 landing-block">
                <div class="b-price-plan">
                    <div class="b-price-plan__item b-price-plan__head">
                        <h3>Advanced</h3>
                    </div>
                    <div class="b-price-plan__item b-price-plan__cost" id="earth">
                        <div class="cost-time text-white">From</div>
                        <div class="cost-title text-white">1250<span>00</span></div>

                    </div>
                    <ul class="p_plan_list">
                        <li><i class="fa fa-check" aria-hidden="true"></i>&emsp;Basic and Intermediate, plus:</li>
                        <li><i class="fa fa-file" aria-hidden="true"></i>&emsp;Bespoke market report</li>
                        <li><i class="fa fa-search" aria-hidden="true"></i>&emsp;Tailored research</li>
                        <li><i class="fa fa-hospital-alt" aria-hidden="true"></i>&emsp;NHS organisation financial data</li>
                        <li><i class="fa fa-pound-sign" aria-hidden="true"></i>&emsp;Tailored sales plan</li>
                    </ul>
                </div>
                <div class="b-price-plan">
                    <div class="b-price-plan__item b-price-plan__head">
                        <h3>Advanced +</h3>
                    </div>
                    <ul class="p_plan_list">
                        <li><i class="fa fa-check" aria-hidden="true"></i>Data and report revalidated every three months</li>
                    </ul>
                    <div class="b-price-plan__item b-price-plan__cost" id="earth">
                        <div class="text-white">Contact us for pricing</div>

                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="landing-section content-section bg-landing">
        <div class="container">
            <div class="col">
            <div class="login-form d-md-none d-lg-none d-sm-none d-xs-block">
                    <a name="enquire2"></a>
                    <form action="#enquire2" method="post">

                        <h2 class="text-center">Enquire today and get
                            10% off your order*</h2>
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Name" required="required">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="organisation" placeholder="Organisation"
                                required="required">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email " required="required">
                        </div>
                        <div class="form-group">
                            <input type="phone" class="form-control" name="phone" placeholder="Telephone" required="required">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Enquire Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

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
