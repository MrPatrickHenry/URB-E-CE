<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="2020 Programetic xR Native Advertisment">
  <meta name="author" content="2020">
<meta description="Share your creation, help people hang out with Beyonce or wear latest Nike , make people laugh or cry, start your own business with 2020, Don't loose out! Start monitizing your VR/AR Experience ">
  <title>Urb-E Community App</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

  <!-- Plugin CSS -->
  <link rel="stylesheet" href="device-mockups/device-mockups.min.css">

  <link href="css/new-age.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="/images/logo/2020-logo-RGB-BW.png" width="150px" alt="2020 logo">
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#why-us" >Intergration</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#Costs_per_X">Cost per X</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#SanTargeting">Focus/Gaze</a>
          </li>
           <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#cyborg">Data model</a>
          </li>

            <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#platform">2020 Platform</a>
          </li>

              <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#location">location</a>
          </li>

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#network">Network</a>
          </li>

                    <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
      @if (Route::has('login'))
      <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a>
        @else
        <a href="{{ route('login') }}" class="nav-link">Login</a>
        <a href="{{ route('register') }}" class="nav-link">Register</a>
        @endauth
      </div>
      @endif

    </div>
  </nav>

  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-lg-7 my-auto">
          <div class="header-content mx-auto">
            <h1 class="mb-5">2020 is the immersive VR AR ad experience network you have been waiting for!</h1>
            <a href="/register" class="btn btn-outline btn-xl js-scroll-trigger">We are open to all!</a>
          </div>
        </div>
        <div class="col-lg-5 my-auto">
          <div class="device-container">
            <div class="device-mockup iphone6_plus portrait black">
              <div class="device">
                <div class="screen">
                 
                  <img src="img/usdz.jpg" class="img-fluid" alt="">
                </div>
                <div class="button">
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <section class="download bg-primary text-left" id="why-us">
    <div class="container">
      <div class="row sectioncontent">
        <div class="col-md-8 mx-auto">
          <h2 class="section-heading">What we do</h2>
          <p>We are here to help the growth and development of <strong>VR</strong> | <strong>AR</strong> | <strong>MR</strong> | <strong>ER</strong>!
          We provide a rich and relevant immersive experience that your customers will enjoy. As well as a way for publishers to monetize their beautiful and immersive work.</p>
          <p> Designed to be as simple and intuitive for artisans and developers to use.

            <div class="badges">
              <a class="badge-link" href="#" style="color:#000;">Unity |</a>
              <a class="badge-link" href="#" style="color:#000;">AR Kit |</a>
                            <a class="badge-link" href="#" style="color:#000;">HTC-Vive |</a>

              <a class="badge-link" href="#" style="color:#000;">Oculus |</a>

              <a class="badge-link" href="#" style="color:#000;">ARCore |</a>    
              <a class="badge-link" href="#" style="color:#000;">PSVR |</a>
              <a class="badge-link" href="#" style="color:#000;">Facebook |</a>
              <a class="badge-link" href="#" style="color:#000;">Snapchat |</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="features bg-primary text-left" id="Costs_per_X">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mx-auto">
            <h2 class="section-heading">Costs per X</h2>
            <p> Marketing Costs to your brand have been drained with bad metrics and false promises.</p>
            <p> We provide you with a rules engine right through to a bid engine that you can control at will. It will make sure you keep within your budget and only pay for experiences you want to commission against. </p>
          </div>
        </div>
      </div>
    </section>

    <section class="focus bg-primary text-right" id="SanTargeting">
      <div class="container">
        <div class="row sectioncontent">
          <div class="col-md-8 mx-auto">
            <h2 class="section-heading"> Breakthrough Focus System </h2>
            <p> Targeting and Retargeting, these are aggressive and saturated words that have a negative impact on your brand. </p>
            <p> Your customers don't want to be tracked, tagged and targeted like an animal! They are humans that have experiences in life! </p>
            <p> So that's where we enter. We help your customers enjoy a native experience. We keep their focus within the immersive experience by scanning environments and the experience they currently in. <br> 
and using are patent pending Mesh &trade; technologoy!</p>
            <p>Advertising has never been this accurate and engaging to the end consumer</p>
          </div>
        </div>
      </div>
    </section>


        <section class="cyborg bg-primary text-left" id="cyborg">
      <div class="container">
        <div class="row sectioncontent" >
          <div class="col-md-12 mx-auto">
            <h2 class="section-heading">Performance Marketing Data so advance you will think we are cyborgs!</h2>
            <p> Data, Data, Data! For years it has been the main subject of the marketing industry.</p>
            <p> We agree, but our approach is different. We use are own trained Neural Network to build prediction models. It is all simplified to help you make the best strategic decision for your Native VR AR and 360 Ad Placement. </p>
            <p> Heatmaps are so 20th Century...<br>
              We use are own proprietary visual reporting to give you a clear picture of how your consumer engaged with your ad.
            </p>
          </div>
        </div>
      </div>
    </section>



        <section class="platform bg-primary text-right" id="platform">
      <div class="container">
        <div class="row sectioncontent">
          <div class="col-md-8 mx-auto">
            <h2 class="section-heading">An Athletic, Agile Platform <h3><span class="text-muted">Built by creative minds with decades of Advertisement experiences</span>
            <p> We are a bottom up team of innovators that are creative, smart developers and marketers. <br>
              hand selected for their emotional intelligence to make sure team has the best chemistry possible.
            </p>
            <p> When we sprint, we sprint and deliver enterprise level products and features that support at speed.</p>
            <p> We love to play! Be it a sport, instrument or video games! <br><strong>why</strong> It is cause we never stop learning. We are now preparing to support Google in a new Anchor based tech to give a unified shared ad experience.</p>
          </div>
        </div>
      </div>
    </section>


        <section class="world bg-primary text-left" id="location">
      <div class="container">
        <div class="row sectioncontent">
          <div class="col-md-8 mx-auto">
            <h2 class="section-heading">Love a cuppa!</h2>
            <p><strong> Ukraine | London | New York</strong> <br>
              <p> Our strong hold is based in NY
                with VR/AR Developers in Ukraine!
                Strategy and vision in New York
                and creative geniuses in the heart of London.<br>
                This helps to give us a wide range of culture, skills and most importantly life experience.</br>
              This truly gives us as platform higher than any of the competition. </p>
            
          </div>
        </div>
      </div>
    </section>




    <section class="features" id="network">
      <div class="container">
        <div class="section-heading text-center">
          <h2> Groundbreaking Network for all to Experience </h2>
          <p class="text-muted"> Join our network and monitise your content.</p>
          <hr>
        </div>
        <div class="row">
          <div class="col-lg-4 my-auto">
            <div class="device-container">
              <div class="device-mockup iphone6_plus portrait white">
                <div class="device">
                  <div class="screen">
                 
                    <img src="img/demo-screen-1.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="button">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8 my-auto">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-basket-loaded text-primary"></i>
                    <h3>Brands</h3>
                    <p class="text-muted"> Drive revenue from this new and progressive medium. We don't place your ad next to content that is not relevant or appropriate to you! We provide to you real time reliable measurements and full media transparency. This is by using Machine Learning to counteract fraud and working with IAB to help raise the standards you need and want! </p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-people text-primary"></i>
                    <h3>Publishers</h3>
                    <p class="text-muted"> Start earning some revenue on your content by allowing ads in your creation to help fund your next masterpiece. we pay out via paypal or bitcoin</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-pencil text-primary"></i>
                    <h3>Creatives</h3>
                    <p class="text-muted"> Supply your creative to publishers to use and earn a share to help cover your costs and grow your own business. </p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-link text-primary"></i>
                    <h3>Agencies</h3>
                    <p class="text-muted"> We will partner with any agency we feel can be a mutual relationship to helps us and our clients. </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="cta">
      <div class="cta-content">
        <div class="container">
          <h2>Stop waiting.<br>Start earning.</h2>
          <a href="/register" class="btn btn-outline btn-xl js-scroll-trigger">Let's Get Started!</a>
        </div>
      </div>
      <div class="overlay"></div>
    </section>

    <section class="contact bg-primary" id="contact">
      <div class="container">
        <h2>We
          <i class="fa fa-heart"></i>
        new friends!</h2>
        <ul class="list-inline list-social">
          <li class="list-inline-item social-twitter">
            <a href="http://twitter.com/20_20_online">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="list-inline-item social-linkedin">
            <a href="https://www.linkedin.com/company/2020-online/">
              <i class="fa fa-linkedin"></i>
            </a>
          </li>
          
        </ul>
      </div>
    </section>

    <footer>
      <div class="container">
        <p> 2020&copy; - 2018. All Rights Reserved.</p>
        <ul class="list-inline">
          <li class="list-inline-item">
            <a href="/privacy">Privacy</a>
          </li>
          <li class="list-inline-item">
            <a href="#">Terms</a>
          </li>
          </li>
        </ul>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

   
    <script src="js/new-age.min.js"></script>

  </body>

  </html>
