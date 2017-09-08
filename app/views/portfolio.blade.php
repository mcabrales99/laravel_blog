
@extends ('layouts.portfolioMaster')
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Welcome to my site! I am a web developer based out of San Antonio texas, I am ready to help you with building a site, facebook, Instagram, and Snapchat marketing. Come in and take a peek at some of my work!">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Yellowtail' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
<link rel="shortcut icon" href="{{ asset('/css/webDevicon.png') }}">
{{ HTML::style('css/css.css'); }} 
{{ HTML::script('js/scrollTo.js'); }}
@section('content')
    <section id='first'>
        <div class= "container-fluid">
            <div class="top" class="col-lg-4">
                         <h1 class="name">Mauro Cabrales</h1>
                         <h3 class="title">Web Developer</h3>
            </div>
    <br>
    <h1 class="sentence" class="col-md-4 col-md-offset-4">How does your<div id ="phrase"></div> look online?</h1>
            
    <a href=#second><button id="centerButton" type="button" class="btn btn-primary responsive-width">Let's find the best you online!</button></a>
    </div>
    </section>
    <section id='second'>
        <div class="container-fluid">
            <h3 class="title2">No matter what type of business you are, the proper online prescence is important. Your website <strong>should</strong></h3>
                <div class="row" id="sec2module">
                    <img class="col-md-6 img-responsive" src="blog_img/laptop-min.jpg"></img>
                    <p class="descript" class="col-md-6">Be visibly excellent in any device! Responsive to tablets, phones, and desktops keeping customers happy</p>
                </div>
                <div class="row" id="sec2module">
                    <img class="col-md-6 img-responsive" src="blog_img/bootstrap-min.jpg"></img>
                    <p class="descript" class="col-md-6">Enjoy custom design knowing your business will not be restricted by template on the create-your-own sites. Time is your most important resource, free build sites are self-labor heavy and the hidden fees add up at the end.</p>
                </div>
                <div class="row" id="sec2module">
                    <img class="col-md-6 img-responsive" src="blog_img/listWall-min.jpg"></img>
                    <p class="descript" class="col-md-6">The Power of one! I will be directing the whole process and am available with any questions or concerns.</p>
                </div>
        </div>
    </section>
<section id="third">
<div class="container">
  <h3 class="title2">Check out some of my sites!</h3>
      <div class="row">
          <div class="col-sm-6">
            <h3 class="title">Cavazos Catering</h3> 
            <a href="http://www.cavazoscatering.com"><img class="img-responsive" src="blog_img/cavazosSS-min.png"></a> 
          </div>
          <div class="col-sm-6">
            <h3 class="title">Mserrano Construction</h3> 
            <a href="http://www.mserranoconstruction.com"><img class="img-responsive" src="blog_img/mserranoSS-min.png"></a> 
          </div>
      </div>
</div>
</section>
<section id="fourth">
  <div class="container">
    <h1 class="backg">My Background</h1>
    <div class="row">
            <p class="backp col-md-6">I served my community as an EMT for 16 years. In between that time I earned my degree, a Bachelors in Business Admin with a major in Computer Information Systems. Afterwards, I decided to attend a Software developer program and moved to San Antonio to achieve my goals. I currently reside here with my small family and support my Dallas Cowboys. </p>
      <div class="row col-md-offset-6">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
              </ol>
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                  <img src="blog_img/medCare-min.jpg" alt="...">
                </div>
                <div class="item">
                  <img src="blog_img/valley-min.jpg" alt="...">
                </div>
                <div class="item">
                  <img src="blog_img/grad-min.jpg" alt="...">
                </div>
                <div class="item">
                  <img src="blog_img/codeup-min.jpg" alt="...">
                </div>
                <div class="item">
                  <img src="blog_img/cowboys-min.jpg" alt="...">
                </div>
              </div>
            </div>
          </div>
</section>
<section id="fifth">
    <div class="container">
        <h1 class="backg">Contact Me</h1>
          <h3 class="title2">Lets talk! We can face to face, skype, e-mail and text. Send me a message here and we can solve your internet problems together.</h3>

      <form class="form-horizontal" role="form" method="post" action="https://formspree.io/mcabrales99@gmail.com">
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" required="" id="name" name="name" placeholder="name" value="">
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="email" required="" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
            </div>
        </div>
        <div class="form-group">
            <label for="message" class="col-sm-2 control-label">Message</label>
            <div class="col-sm-10">
                <textarea class="form-control" rows="4" name="message" required=""></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <input id="submit" name="submit" type="submit" value="Submit" class="btn btn-primary">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <! Will be used to display an alert to the user>
            </div>
        </div>
      </form>
    </div>
</div>
<h3 class="title2">Thanks for visiting, hope to hear from you soon!</h3>
</section>
@stop