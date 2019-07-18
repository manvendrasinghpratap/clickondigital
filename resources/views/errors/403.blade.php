<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<head>
    <title>{{@$page_title}}</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css') }}">
    <link rel="icon" href="{{ asset('assets/images/favi.png')}}" type="image/gif">  

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.timepicker.css') }}">

    
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

  </head>
  <style type="text/css">
  .dropdown{
    min-width:400%;
  }
  .dropdown1 li{
    font-size:13px;
    min-width:200px;
  }
    
    .dropdown-submenu {
        position: relative;
        
    }

    .dropdown-submenu>.dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -6px;
        margin-left: -1px;
        -webkit-border-radius: 0 6px 6px 6px;
        -moz-border-radius: 0 6px 6px;
        border-radius: 0 6px 6px 6px;
    }

    .dropdown-submenu:hover>.dropdown-menu {
        display: block;
    }

    .dropdown-submenu>a:after {
        display: block;
        content: " ";
        float: right;
        width: 0;
        height: 0;
        border-color: transparent;
        border-style: solid;
        border-width: 5px 0 5px 5px;
        border-left-color: #ccc;
        margin-top: 5px;
        margin-right: -10px;
    }

    .dropdown-submenu:hover>a:after {
        border-left-color: #fff;
    }

    .dropdown-submenu.pull-left {
        float: none;
    }

    .dropdown-submenu.pull-left>.dropdown-menu {
        left: -100%;
        margin-left: 10px;
        -webkit-border-radius: 6px 0 6px 6px;
        -moz-border-radius: 6px 0 6px 6px;
        border-radius: 6px 0 6px 6px;
    }


  </style>
  <body>
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
          <div class="container">
            <a class="navbar-brand" href="index-2.html"><img src="{{asset('assets/images/logo.png')}}" style="height:50px;margin-top:20px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation"> 
              <span class="oi oi-menu"></span> Menu
            </button>

         
            <div class="collapse navbar-collapse" id="ftco-nav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="index-2.html" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                <li class="nav-item"><a href="portfolio.html" class="nav-link">Portfolio</a></li>
                <li class="nav-item"><a href="services.html" class="nav-link" data-toggle="dropdown" class="btn btn-primary" data-target="#">Services</a>
                     <div class="dropdown dropdown1">
                          <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                            <li><a href="seo.html">SEO</a></li>
                            <li><a href="localseo.html">Local Seo </a></li>
                            <li class="divider"></li>
                            <li class="dropdown-submenu">
                              <a tabindex="-1" href="seotraining.html">SEO Training Course</a>
                              <ul class="dropdown-menu">
                                <li><a tabindex="-1" href="seotraininglondon.html">SEO Training London</a></li>
                                <li><a tabindex="-1" href="seotrainingdubai.html">SEO Training Dubai</a></li>
                             </ul>
                            </li>
                            <li><a href="ppc.html">PPC Management</a></li>
                            <li><a href="ppccourse.html">PPC Training Course</a></li>
                            <li><a href="webdesign.html">Web Design/Development</a></li>
                            <li><a href="app.html">App Development</a></li>
                            <li><a href="ebaystore.html">Ebay Store Design</a></li>
                            <li><a href="smm.html">Social Media Marketing</a></li>
                            <li><a href="printing.html">Custom T-Shirt Printing</a></li>
                            <li><a href="citationbuilding.html">Citation Building</a></li>
                          
                            <li class="dropdown-submenu">
                              <a tabindex="-1" href="drawings.html">Architect planning drawings</a>
                              <ul class="dropdown-menu">
                                <li><a tabindex="-1" href="structural.html">Structural Engineer</a></li>
                                <li><a tabindex="-1" href="buildingdrawings.html">Building regulation drawings</a></li>
                                 </ul>
                            </li>
                          </ul>
                     </div>

                </li>
                <!-- <li class="nav-item"><a class="nav-link" href="work.html">Work</a></li> -->
                <!-- <li class="nav-item"><a href="team.html" class="nav-link">Team</a></li>   -->
                <!-- <li class="nav-item"><a href="pricing.html" class="nav-link">Pricing</a></li> -->
                <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                <li class="nav-item"><a href="document_view.html" class="nav-link">E-Book</a></li>
                   

             
                <li class="nav-item cta"><a href="landing_page.html" class="nav-link" ><span>Free SEO Audit</span></a></li>
              </ul>
            </div>
           
          </div>
        </nav>  
  <div class="hero-wrap hero-wrap-2" style="background-image: url({{asset('assets/images/bg_2.jpg')}});" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container-fluid">
        <div class="row no-gutters d-flex slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
          	<p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index-3.html">Home</a></span> <span>About</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">About Us</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url({{asset('assets/images/bg_1.jpg')}});" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-11">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="6780">0</strong>
		                <span>Happy Clients</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="4500">0</strong>
		                <span>Running Projects</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="4200">0</strong>
		                <span>Project Completed</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="320">0</strong>
		                <span>Cups of Coffe</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>


    <section class="ftco-section">
    	<div class="container">
    		<div class="row d-md-flex">
	    		<div class="col-md-6 ftco-animate img about-image" style="background-image: url({{asset('assets/images/about.jpg')}});">
	    		</div>
	    		<div class="col-md-6 ftco-animate p-md-5">
		    		<div class="row">
		          <div class="col-md-12 nav-link-wrap mb-5">
		            <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		              <a class="nav-link active" id="v-pills-whatwedo-tab" data-toggle="pill" href="#v-pills-whatwedo" role="tab" aria-controls="v-pills-whatwedo" aria-selected="true">What we do</a>

		              <a class="nav-link" id="v-pills-mission-tab" data-toggle="pill" href="#v-pills-mission" role="tab" aria-controls="v-pills-mission" aria-selected="false">Our mission</a>

		              <a class="nav-link" id="v-pills-goal-tab" data-toggle="pill" href="#v-pills-goal" role="tab" aria-controls="v-pills-goal" aria-selected="false">Our goal</a>
		            </div>
		          </div>
		          <div class="col-md-12 d-flex align-items-center">
		            
		            <div class="tab-content ftco-animate" id="v-pills-tabContent">

		              <div class="tab-pane fade show active" id="v-pills-whatwedo" role="tabpanel" aria-labelledby="v-pills-whatwedo-tab">
		              	<div>
			                <h2 class="mb-4">We Offer High Quality Services</h2>
			              	<p>Throughout the years, we have worked with Fortune 500s and fresh out of the box new businesses. These organizations may have a universal nearness or spotlight entirely on a nearby demographic, and we can even now convey the outcomes they require. 
                      </p><p>
                      We enable yearning organizations to like yours create more benefits by building mindfulness, driving web traffic, interfacing with clients, and developing generally speaking deals. Call us.</p>
				            </div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-mission" role="tabpanel" aria-labelledby="v-pills-mission-tab">
		                <div>
			                <h2 class="mb-4">Exceptional Web Solutions</h2>
			              	<p>At Just Clickon Digital, our vision can be condensed in one sentence – we need to be the best Digital Agency showcasing organization. While this is a straightforward objective, it is one that requires a lot of investment, and much increasingly diligent work, to accomplish. It fixates on where we see ourselves later on and where we see our customers; we measure our prosperity by the accomplishment of our customers. The vision of Clickon Digital generally spins around bringing another standard of value and hard working attitude to the web based promoting industry. We consider ourselves to be trend-setters and disruptors, and each division and worker in our organization mirrors this. We imagine ourselves conveying more to our customers than just income, despite the fact that this is our essential objective. We need to make enduring associations with our customers and help them to be the visionaries and pioneers in their very own fields and businesses.</p>
				            </div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-goal" role="tabpanel" aria-labelledby="v-pills-goal-tab">
		                <div>
			                <h2 class="mb-4">Help Our Customer</h2>
			              	<p>To enable our customers to accomplish the most ideal outcomes, following prescribed procedures 
                         To create exceedingly centered leads prepared to make buys. 
                        To convey most elevated esteem, most astounding changing over web traffic as opposed to a flood of irregular guests.</p>
				            </div>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
    	</div>
    </section>
    <section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">

          <div class="row d-flex justify-content-center">
            <div class="col-md-4">
              <img src="{{asset('assets/images/google-partner.png')}}">
            </div>
            <div class="col-md-8 text-white">
              <h2 class="text-white">A Certified Google Partner</h2>
              <p>
                clickondigital.com accomplished the status of a Certified Google Partner because of our broad involvement with Google applications and apparatuses. This affirmation implies we additionally approach particular Google preparing and items. We additionally have instructional courses in collaboration with driving Internet organizations, including Google and their delegates. Look at some when you get a possibility.
              </p>
            </div>
            <!-- <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
              <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </section>
    
		<section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-2">Testimony</h2>
            <span class="subheading">Our Happy Customer Says</span>
          </div>
        </div>
        <div class="row justify-content-center ftco-animate">
          <div class="col-md-8">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url({{asset('assets/images/person_1.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                    <p class="name">Dennis Green</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url({{asset('assets/images/person_2.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Dennis Green</p>
                    <span class="position">Interface Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url({{asset('assets/images/person_3.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Dennis Green</p>
                    <span class="position">UI Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url({{asset('assets/images/person_1.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Dennis Green</p>
                    <span class="position">Web Developer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url({{asset('assets/images/person_1.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Dennis Green</p>
                    <span class="position">System Analytics</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> 

    <section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
              <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
          <footer class="ftco-footer ftco-bg-dark ftco-section">
          <div class="container">
            <div class="row mb-5">
              <div class="col-md-3">
                <div class="ftco-footer-widget mb-4">
                  <h2 class="ftco-heading-2"><img src="{{asset('assets/images/logo.png')}}" ></h2>
                  <img src="{{asset('assets/images/partner2.png')}}" >
                  <br><br>
                  <img src="{{asset('assets/images/partner1.png')}}">
                </div>
                
              </div>
              <div class="col-md-2">
                <div class="ftco-footer-widget mb-4 ml-md-5">
                  <h2 class="ftco-heading-2">Quick Links</h2>
                  <ul class="list-unstyled">
                    <li><a href="#" class="py-2 d-block">About</a></li>
                    <li><a href="#" class="py-2 d-block">Services</a></li>
                    <li><a href="#" class="py-2 d-block">Blog</a></li>
                    <li><a href="#" class="py-2 d-block">Contact</a></li>
                    <li><a href="#" class="py-2 d-block">E-Book</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-4 pr-md-4">
                <div class="ftco-footer-widget mb-4">
                  <h2 class="ftco-heading-2">Recent Blog</h2>
                  <div class="block-21 mb-4 d-flex">
                    <a class="blog-img mr-4" style="background-image: url({{asset('assets/images/image_1.jpg')}});"></a>
                    <div class="text">
                      <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                      <div class="meta">
                        <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                        <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                        <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="block-21 mb-4 d-flex">
                    <a class="blog-img mr-4" style="background-image: url({{asset('assets/images/image_2.jpg')}});"></a>
                    <div class="text">
                      <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                      <div class="meta">
                        <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                        <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                        <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="ftco-footer-widget mb-4">
                  <h2 class="ftco-heading-2">Contact Info</h2>
                  <div class="block-23 mb-3">
                    <ul>
                      <li><span class="icon icon-map-marker"></span><span class="text">1 Deansgate, Manchester, United Kingdom, M3 1AZ</span></li>
                      <li><a href="#"><span class="icon icon-phone"></span><span class="text">+4407806 805525</span></a></li>
                      <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@clickondigital.com</span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft ">
                  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-youtube"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-pinterest"></span></a></li>
                </ul>

            <div class="row">
              <div class="col-md-12 text-center">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
               Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
                   <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                 <span><a href="#" class="">Privacy Policy</a></span>&nbsp;&nbsp;&nbsp;
                 <span><a href="#" class="">Cookie Policy</a></span>
     
              </div>
            </div>
          </div>
        </footer>

    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <!-- Modal -->
  <div class="modal fade" id="modalRequest" tabindex="-1" role="dialog" aria-labelledby="modalRequestLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalRequestLabel">Request a Quote</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="#">
            <div class="form-group">
              <!-- <label for="appointment_name" class="text-black">Full Name</label> -->
              <input type="text" class="form-control" id="appointment_name" placeholder="Full Name">
            </div>
            <div class="form-group">
              <!-- <label for="appointment_email" class="text-black">Email</label> -->
              <input type="text" class="form-control" id="appointment_email" placeholder="Email">
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <!-- <label for="appointment_date" class="text-black">Date</label> -->
                  <input type="text" class="form-control" id="appointment_date" placeholder="Date">
                </div>    
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <!-- <label for="appointment_time" class="text-black">Time</label> -->
                  <input type="text" class="form-control" id="appointment_time" placeholder="Time">
                </div>
              </div>
            </div>
            

            <div class="form-group">
              <!-- <label for="appointment_message" class="text-black">Message</label> -->
              <textarea name="" id="appointment_message" class="form-control" cols="30" rows="10" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Get a Quote" class="btn btn-primary">
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>


  <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
  <script src="{{ asset('assets/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{ asset('assets/js/popper.min.js')}}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('assets/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{ asset('assets/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{ asset('assets/js/jquery.stellar.min.js')}}"></script>
  <script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{ asset('assets/js/aos.js')}}"></script>
  <script src="{{ asset('assets/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{ asset('assets/js/bootstrap-datepicker.js')}}"></script>
  <script src="{{ asset('assets/js/jquery.timepicker.min.html')}}"></script>
  <script src="{{ asset('assets/js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
  <script src="{{ asset('assets/js/google-map.js')}}"></script>
  <script src="{{ asset('assets/js/main.js')}}"></script>
    
  </body>
</html>