
@extends ('layouts.portfolioMaster')
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Yellowtail' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
<link rel="icon" href="blog_img/webDevicon.png">

@section('content')
<style> 
#first {
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('blog_img/sf.jpg');
  padding-top: 90px;
  background-repeat: no-repeat;
  background-size: cover;
  font-family: "Raleway",Times,serif;
  padding-bottom: 400px;
  background-position: center center;

}
h1.name {

    color: white;
    font-size: 40px;
    font-family: 'Permanent Marker', cursive; 
}
h3.title {
    text-align: left;
    color: white;
    font-size: 30px;
}
h3.title2 {
    text-align: center;
    color: white;
    font-size: 40px;
    padding-bottom: 30px;
    padding-top: 30px;
}
h1.sentence {

color: white;
font-size: 60px;
text-align: center;
padding-bottom: 50px;

}
h1.backg {

color: white;
font-size: 60px;
text-align: center;
padding-bottom: 50px;
font-family: 'Raleway', sans-serif;


}
#centerButton   {
    font-size: 30px;
    text-align: center;
    color: goldenrod;
    margin:auto;
    display:block;
    align-self: center;

}
#second {
  background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('blog_img/cityblack.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  font-family: "Raleway",Times,serif;
  background-position: center center;
  padding-bottom: 200px;
  padding-top: 100px;
}
#third {
  background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('blog_img/sfCity.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  font-family: "Raleway",Times,serif;
  background-position: center center;
  padding-bottom: 400px;
  padding-top: 100px;
  }

#fourth {
  background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('blog_img/beachRoad.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  font-family: "Raleway",Times,serif;
  background-position: center center;
  padding-bottom: 300px;
  padding-top: 100px;
  }
  #fifth {
  background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('blog_img/sf7.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  font-family: "Raleway",Times,serif;
  background-position: center center;
  padding-bottom: 200px;
  padding-top: 100px;
  }
p.descript   {
    text-align: center;
    font-size: 35px;
    color: white;
    
}
.top    {
    padding-bottom: 30px;
}
#sec2module {

    padding: 70px;
}
img.cava{

height: 300px;
padding: 20px;

}
#slideshow {
  
  position: relative;
  width: 550px;
  height: 450px;
  padding: 10px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);

}

#slideshow > div {
  position: absolute;
  top: 10px;
  left: 10px;
  right: 10px;
  bottom: 10px;

}
p.backp {

  font-size: 22px;
  text-align: center;
  color: white;
  font-family: 'Raleway', sans-serif;
  padding-right: 60px;
}
label {
  color: white;
  font-size: 30px;
  font-family: "Raleway", sans-serif;
}
button.botButton  {

  font-family: "Raleway";
  color: blue
  font-size:30px;
}
img.box  {
height: 400px;
width: 530px;


}
</style>
    <section id='first'>
        <div class= "container-fluid">
            <div class="top" class="col-lg-4">
                         <h1 class="name">Mauro Cabrales</h1>
                         <h3 class="title">Web Developer</h3>
            </div>
    <br>
    <h1 class="sentence" class="col-md-4 col-md-offset-4">How does your<div id ="phrase"></div> look online?</h1>
            
    <a href=#second><button id="centerButton" type="button" class="btn btn-primary img-responsive">Let's find the best you online!</button></a>
    </div>
    </section>
    <section id='second'>
        <div class="container-fluid">
            <h3 class="title2">No matter what type of business you are, the proper online prescence is important. Your website <strong>should</strong></h3>
                <div class="row" id="sec2module">
                    <img class="col-md-5 img-responsive" src="blog_img/laptop.jpg"></img>
                    <p class="descript" class="col-md-7">Be visibly excellent in any device! Responsive to tablets, phones, and desktops keeping customers happy</p>
                </div>
                <div class="row" id="sec2module">
                    <img class="col-md-5 img-responsive" src="blog_img/bootstrap.jpg"></img>
                    <p class="descript" class="col-md-7">Enjoy custom design knowing your business will not be restricted by template on the create-your-own sites. Time is your most important resource, free build sites are self-labor heavy and the hidden fees add up at the end.</p>
                </div>
                <div class="row" id="sec2module">
                    <img class="col-md-5 img-responsive" src="blog_img/listWall.jpg"></img>
                    <p class="descript" class="col-md-7">The Power of one! I will be directing the whole process and am available with any questions or concerns. </p>
                </div>
        </div>
    </section>
<section id="third">
<div class="container">
  <h3 class="title2">Check out some of my sites!</h3>
      <div class="row">
          <div class="col-md-6 img-responsive">
            <h3 class="title">Cavazos Catering</h3> 
            <a href="http://www.cavazoscatering.com"><img src="blog_img/cavazosSS.png" class="cava"></a> 
          </div>
          <div class="col-md-6 img-responsive">
            <h3 class="title">Mserrano Construction</h3> 
            <a href="http://www.mserranoconstruction.com"><img src="blog_img/mserranoSS.png" class="cava"></a> 
          </div>
      </div>
</div>
</section>
<section id="fourth">
  <div class="container">
    <h1 class="backg">My Background</h1>
    <div class="row">
            <p class="backp col-md-6">I served my community as an EMT for 16 years. In between that time I earned my degree, a Bachelors in Business Admin with a major in Computer Information Systems. Afterwards, I decided to attend a Software developer program and moved to San Antonio to achieve my goals. I currently reside here with my small family and support my Dallas Cowboys. </p>
          <div id="slideshow" class="col-md-offset-6">
             <div>
               <img class="img-responsive" class="box"src="blog_img/medCare.jpg">
             </div>
             <div>
               <img class="img-responsive" class="box" src="blog_img/valley.jpg">
             </div>
             <div>
               <img class="img-responsive" class="box" src="blog_img/grad.jpg">
             </div>
             <div>
               <img class="img-responsive" class="box" src="blog_img/codeup.jpg">
             </div>
             <div>
               <img class="img-responsive" class="box" src="blog_img/cowboys.jpg">
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

<script type="text/javascript">
var phrase = [ 'business' , 'life' , 'dream' , 'website' ];
$.each(phrase,function(i, val){
    setTimeout(function()  {
        $('#phrase').fadeOut("slow",function() {
            $(this).text(val).fadeIn("slow");
        });
    },i * 1700);
});    

$("#slideshow > div:gt(0)").hide();

setInterval(function() {
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
}, 4000);

$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
@stop