<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Memories Events | OnePage Responsive Theme</title>
<!-- Bootstrap -->
<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css">
<!-- Respomsive slider -->
<link href="<?php echo base_url(); ?>css/responsive-slider.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/prettyPhoto.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/main.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/simple_pricing.css" rel="stylesheet">
<link rel="shortcut icon" href="<?php echo base_url(); ?>images/ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>images/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>images/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>images/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>images/ico/apple-touch-icon-57-precomposed.png">
<script>
function validateEmail() {
    var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
	var x = document.forms["captcha-form"]["email"].value;
    if (filter.test(x)) {
        // document.forms["captcha-form"].submit();
    }
    else {
		$('.success_div').html('<h3>Please enter valid email address!</h3>');
        return false;
    }
	}
</script>
</head>
<body data-spy="scroll" data-target="#navbar" data-offset="0">
<header id="header" role="banner">
  <div class="container">
    <div id="navbar" class="navbar navbar-default">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="index.php"></a> </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#main-slider"><i class="icon-home"></i></a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#pricing">Pricing</a></li>
          <li><a href="#about-us">About Us</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </div>
</header>
<!--/#header-->

<div class="container"> 
  <!-- Responsive slider - START -->
  <div class="responsive-slider" data-spy="responsive-slider" data-autoplay="true">
    <div class="slides" data-group="slides">
      <ul>
        <li>
          <div class="slide-body" data-group="slide"> <img src="<?php echo base_url(); ?>images/slide1.jpg">
            <div class="caption header" data-animate="slideAppearRightToLeft" data-delay="500" data-length="300"> Xeon is the best free onepage responsive theme available arround the globe<br>
            </div>
          </div>
        </li>
        <li>
          <div class="slide-body" data-group="slide"> <img src="<?php echo base_url(); ?>images/slide2.jpg">
            <div class="caption header" data-animate="slideAppearRightToLeft" data-delay="500" data-length="300">
              <h2>Twitter Boostrap</h2>
            </div>
            <div class="caption img-bootstrap" data-animate="slideAppearDownToUp" data-delay="200"> Download free but 100% premium quaility twitter Bootstrap based WordPress and HTML themes <br>
              from shapebootstrap.net </div>
            <div class="caption img-twitter" data-animate="slideAppearUpToDown"> </div>
          </div>
        </li>
        <li>
          <div class="slide-body" data-group="slide"> <img src="<?php echo base_url(); ?>images/slide1.jpg">
            <div class="caption header" data-animate="slideAppearRightToLeft" data-delay="500" data-length="300">
              <h2>Custom animations</h2>
              <div class="caption sub" data-animate="slideAppearLeftToRight" data-delay="800" data-length="300">For any caption you use!</div>
            </div>
            <div class="caption img-jquery" data-animate="slideAppearDownToUp" data-delay="200"> </div>
          </div>
        </li>
      </ul>
    </div>
    <a class="slider-control left" href="#" data-jump="prev"><</a> <a class="slider-control right" href="#" data-jump="next">></a>
    <div class="pages"> <a class="page" href="#" data-jump-to="1">1</a> <a class="page" href="#" data-jump-to="2">2</a> <a class="page" href="#" data-jump-to="3">3</a> </div>
  </div>
</div>
<section id="services">
  <div class="container">
    <div class="box first">
      <div class="row">
        <div class="col-md-4 col-sm-6">
          <div class="center"> <i class="icon-heart icon-md icon-color1"></i>
            <h4>Wedding</h4>
          </div>
        </div>
        <!--/.col-md-4-->
        <div class="col-md-4 col-sm-6">
          <div class="center"> <i class="icon-signal icon-md icon-color2"></i>
            <h4> Corporate</h4>
          </div>
        </div>
        <!--/.col-md-4-->
        <div class="col-md-4 col-sm-6">
          <div class="center"> <i class="icon-star icon-md icon-color3"></i>
            <h4>Birthday/Anniversary</h4>
          </div>
        </div>
        <!--/.col-md-4--> 
        
      </div>
      <!--/.row--> 
    </div>
    <!--/.box--> 
  </div>
  <!--/.container--> 
</section>
<!--/#services-->
<section id="portfolio">
  <div class="container">
    <div class="box">
      <div class="center gap">
        <h2>Portfolio</h2>
        <p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac<br>
          turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
      </div>
      <!--/.center-->
      <ul class="portfolio-filter">
        <li><a class="btn btn-primary active" href="#" data-filter="*">All</a></li>
        <li><a class="btn btn-primary" href="#" data-filter=".bootstrap">Bootstrap</a></li>
        <li><a class="btn btn-primary" href="#" data-filter=".html">HTML</a></li>
        <li><a class="btn btn-primary" href="#" data-filter=".wordpress">Wordpress</a></li>
      </ul>
      <!--/#portfolio-filter-->
      <ul class="portfolio-items col-4">
        <li class="portfolio-item apps">
          <div class="item-inner">
            <div class="portfolio-image"> <img src="<?php echo base_url(); ?>images/portfolio/thumb/item1.jpg" alt="">
              <div class="overlay"> <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="<?php echo base_url(); ?>images/portfolio/full/item1.jpg"><i class="icon-eye-open"></i></a> </div>
            </div>
            <h5>Lorem ipsum dolor sit amet</h5>
          </div>
        </li>
        <!--/.portfolio-item-->
        <li class="portfolio-item joomla bootstrap">
          <div class="item-inner">
            <div class="portfolio-image"> <img src="<?php echo base_url(); ?>images/portfolio/thumb/item2.jpg" alt="">
              <div class="overlay"> <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="<?php echo base_url(); ?>images/portfolio/full/item2.jpg"><i class="icon-eye-open"></i></a> </div>
            </div>
            <h5>Lorem ipsum dolor sit amet</h5>
          </div>
        </li>
        <!--/.portfolio-item-->
        <li class="portfolio-item bootstrap wordpress">
          <div class="item-inner">
            <div class="portfolio-image"> <img src="<?php echo base_url(); ?>images/portfolio/thumb/item3.jpg" alt="">
              <div class="overlay"> <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="<?php echo base_url(); ?>images/portfolio/full/item3.jpg"><i class="icon-eye-open"></i></a> </div>
            </div>
            <h5>Lorem ipsum dolor sit amet</h5>
          </div>
        </li>
        <!--/.portfolio-item-->
        <li class="portfolio-item joomla wordpress apps">
          <div class="item-inner">
            <div class="portfolio-image"> <img src="<?php echo base_url(); ?>images/portfolio/thumb/item4.jpg" alt="">
              <div class="overlay"> <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="<?php echo base_url(); ?>images/portfolio/full/item4.jpg"><i class="icon-eye-open"></i></a> </div>
            </div>
            <h5>Lorem ipsum dolor sit amet</h5>
          </div>
        </li>
        <!--/.portfolio-item-->
        <li class="portfolio-item joomla html">
          <div class="item-inner">
            <div class="portfolio-image"> <img src="<?php echo base_url(); ?>images/portfolio/thumb/item5.jpg" alt="">
              <div class="overlay"> <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="<?php echo base_url(); ?>images/portfolio/full/item5.jpg"><i class="icon-eye-open"></i></a> </div>
            </div>
            <h5>Lorem ipsum dolor sit amet</h5>
          </div>
        </li>
        <!--/.portfolio-item-->
        <li class="portfolio-item wordpress html">
          <div class="item-inner">
            <div class="portfolio-image"> <img src="<?php echo base_url(); ?>images/portfolio/thumb/item6.jpg" alt="">
              <div class="overlay"> <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="<?php echo base_url(); ?>images/portfolio/full/item6.jpg"><i class="icon-eye-open"></i></a> </div>
            </div>
            <h5>Lorem ipsum dolor sit amet</h5>
          </div>
        </li>
        <!--/.portfolio-item-->
        <li class="portfolio-item joomla html">
          <div class="item-inner">
            <div class="portfolio-image"> <img src="<?php echo base_url(); ?>images/portfolio/thumb/item5.jpg" alt="">
              <div class="overlay"> <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="<?php echo base_url(); ?>images/portfolio/full/item5.jpg"><i class="icon-eye-open"></i></a> </div>
            </div>
            <h5>Lorem ipsum dolor sit amet</h5>
          </div>
        </li>
        <!--/.portfolio-item-->
        <li class="portfolio-item wordpress html">
          <div class="item-inner">
            <div class="portfolio-image"> <img src="<?php echo base_url(); ?>images/portfolio/thumb/item6.jpg" alt="">
              <div class="overlay"> <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="<?php echo base_url(); ?>images/portfolio/full/item6.jpg"><i class="icon-eye-open"></i></a> </div>
            </div>
            <h5>Lorem ipsum dolor sit amet</h5>
          </div>
        </li>
        <!--/.portfolio-item-->
      </ul>
    </div>
    <!--/.box--> 
  </div>
  <!--/.container--> 
</section>
<!--/#portfolio-->
<section id="pricing">
  <div class="container">
    <div class="box">
      <div class="center">
        <h2>See our Pricings</h2>
        <p class="lead">Pellentesque habitant morbi tristique senectus et netus et <br>
          malesuada fames ac turpis egestas.</p>
      </div>
      <!--/.center-->
      <div class="big-gap"></div>
      <div id="pricing-table" class="row">
        <div class="pricing-container">
          <div class="header"> Standard </div>
          <div class="price" style="background: linear-gradient(10deg, #F90 30%, #F60 80%)"> <span> <sup class="currency">$</sup><span class="figure">499</span> </span>
            <div class='details'>based on 1 yr</div>
          </div>
          <div class="itemsWrapper">
            <ul class="items">
              <li class='item'>Full Access</li>
              <li class="item"><b>8 Hours</b> of Photo Coverage</li>
            </ul>
          </div>
        </div>
        <div class="pricing-container">
          <div class="header"> Supreme </div>
          <div class="price" style="background: linear-gradient(10deg, #F0F 30%, #F6F 80%)"> <span> <sup class="currency">$</sup><span class="figure">799</span> </span>
            <div class='details'>based on 1 yr</div>
          </div>
          <div class="itemsWrapper">
            <ul class="items">
              <li class='item'>1 Photographer</li>
              <li class="item"><b>1 Full day</b> Photo Coverage</li>
            </ul>
          </div>
        </div>
        <div class="pricing-container">
          <div class="header"> Rapid Fire </div>
          <div class="price" style="background: linear-gradient(10deg, #00F 30%, #06F 80%)"> <span> <sup class="currency">$</sup><span class="figure">1199</span> </span>
            <div class='details'>based on 1 yr</div>
          </div>
          <div class="itemsWrapper">
            <ul class="items">
              <li class='item'>2 Photographers</li>
              <li class="item"><b>6 Hours</b> of Photo Coverage</li>
            </ul>
          </div>
        </div>
        <div class="pricing-container">
          <div class="header"> Wild bold </div>
          <div class="price" style="background: linear-gradient(10deg, #69C 30%, #66C 80%)"> <span> <sup class="currency">$</sup><span class="figure">1799</span> </span>
            <div class='details'>based on 1 yr</div>
          </div>
          <div class="itemsWrapper">
            <ul class="items">
              <li class='item'>2 Photographers</li>
              <li class="item"><b>1 Full day</b> of Photo Coverage</li>
            </ul>
          </div>
        </div>
        <div class="pricing-container">
          <div class="header"> Add-On </div>
          <div class="price"> <span> <sup class="currency">$</sup><span class="figure">100</span> <sup class="cent">per</sup> <sup class="frequency">hour</sup> </span>
            <div class='details'>based on 1 yr</div>
          </div>
          <div class="itemsWrapper">
            <ul class="items">
              <li class='item'>Before or after wedding outdoor shoot</li>
              <li class="item"><b>Maximum 14</b> hours a Day</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/#pricing-->
<section id="about-us">
  <div class="container">
    <div class="box">
      <div class="center">
        <h2>Meet the Team</h2>
        <p class="lead">Pellentesque habitant morbi tristique senectus et netus et<br>
          malesuada fames ac turpis egestas.</p>
      </div>
      <div class="gap"></div>
      <div id="team-scroller" class="carousel scale">
        <div class="carousel-inner">
          <div class="item active">
            <div class="row">
              <div class="col-sm-4">
                <div class="member">
                  <p><img class="img-responsive img-thumbnail img-circle" src="<?php echo base_url(); ?>images/team1.jpg" alt="" ></p>
                  <h3>Agnes Smith<small class="designation">CEO &amp; Founder</small></h3>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="member">
                  <p><img class="img-responsive img-thumbnail img-circle" src="<?php echo base_url(); ?>images/team2.jpg" alt="" ></p>
                  <h3>Donald Ford<small class="designation">Senior Vice President</small></h3>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="member">
                  <p><img class="img-responsive img-thumbnail img-circle" src="<?php echo base_url(); ?>images/team3.jpg" alt="" ></p>
                  <h3>Karen Richardson<small class="designation">Assitant Vice President</small></h3>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-sm-4">
                <div class="member">
                  <p><img class="img-responsive img-thumbnail img-circle" src="<?php echo base_url(); ?>images/team3.jpg" alt="" ></p>
                  <h3>David Robbins<small class="designation">Co-Founder</small></h3>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="member">
                  <p><img class="img-responsive img-thumbnail img-circle" src="<?php echo base_url(); ?>images/team1.jpg" alt="" ></p>
                  <h3>Philip Mejia<small class="designation">Marketing Manager</small></h3>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="member">
                  <p><img class="img-responsive img-thumbnail img-circle" src="<?php echo base_url(); ?>images/team2.jpg" alt="" ></p>
                  <h3>Charles Erickson<small class="designation">Support Manager</small></h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a class="left-arrow" href="#team-scroller" data-slide="prev"> <i class="icon-angle-left icon-4x"></i> </a> <a class="right-arrow" href="#team-scroller" data-slide="next"> <i class="icon-angle-right icon-4x"></i> </a> </div>
      <!--/.carousel--> 
    </div>
    <!--/.box--> 
  </div>
  <!--/.container--> 
</section>
<!--/#about-us-->
<section id="contact">
  <div class="container">
    <div class="box last">
      <div class="row">
        <div class="col-sm-6">
          <h1>Contact Form</h1>
          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
          <div class="status alert alert-success" style="display: none"></div>
          <div class="success_div"></div>
          <form id="captcha-form" class="contact-form" name="captcha-form" method="post" action="#"  role="form" >
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <input type="text" class="form-control" required="required" placeholder="Name" name="name">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input type="text" class="form-control" required="required" placeholder="Email address" name="email" id="email">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Message"></textarea>
                </div>
              </div>
            </div>
            <div class="control-group">
              <div class="controls">
                <label class="" for="captcha">*Please enter the verication code shown below.</label>
                <div id="captcha-wrap"> <img src="<?php echo base_url(); ?>images/img/refresh.jpg" alt="refresh captcha" id="refresh-captcha" /> <img src="<?php echo base_url(); ?>images/img/newCaptcha.php" alt="" id="captcha" /> </div>
                <input class="form-control" id="captcha" name="captcha" required="required" type="text" placeholder="Verification Code">
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-danger btn-lg" id="btnsubmit" value="Send Message" onClick="return validateEmail()">
              </div>
            </div>
          </form>
        </div>
        <!--/.col-sm-6-->
        
        <div class="col-sm-6">
          <h1>Our Address</h1>
          <div class="row">
            <div class="col-md-6">
              <address>
              572 Amarone Court Mississauga ON<br>
              <br>
              </address>
            </div>
          </div>
        </div>
        <!--/.col-sm-6--> 
      </div>
      <!--/.row--> 
    </div>
    <!--/.box--> 
  </div>
  <!--/.container--> 
</section>
<!--/#contact-->
<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-6"> <img class="pull-right" src="<?php echo base_url(); ?>images/shapebootstrap.png" alt="ShapeBootstrap" title="ShapeBootstrap"> </div>
    </div>
  </div>
</footer>
<!--/#footer--> 

<script src="<?php echo base_url(); ?>js/jquery.js"></script> 
<script src="<?php echo base_url(); ?>js/jquery.event.move.js"></script> 
<script src="<?php echo base_url(); ?>js/responsive-slider.js"></script> 
<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script> 
<script data-main="js/app" src="<?php echo base_url(); ?>js/vendor/require.js"></script> 
<script src="<?php echo base_url(); ?>js/jquery.isotope.min.js"></script> 
<script src="<?php echo base_url(); ?>js/jquery.prettyPhoto.js"></script> 
<script src="<?php echo base_url(); ?>js/main.js"></script>
</body>
</html>