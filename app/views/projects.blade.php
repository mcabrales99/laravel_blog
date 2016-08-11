@extends ('layouts.portfolioMaster')

<!DOCTYPE html>
<html>
<head>
    <title>Projects</title>
</head>
<style type="text/css">


</style>
<body>
@section('content')
<div class="container">
    <div class= 'row'>
                <div class='col-md-4'>
                    <a href="posts" id="thumb"><img src="blog_img/blog_pic.png" style="height:200px;"></a>
                   <br>
                   <br>
                    <a href="http://mcabrales99.github.io/whack-a-mole.html" id="thumb"><img src="blog_img/whack_screenshot.png" style="height:200px;"></a>
                </div>
            <div class="col-md-8">
                <p class="paragraph" style="font-size: 20px;">The Blog post is an example blog page created using Laravel Blade system. This website is made using Object Oriented Programming with a connection to a MySql pro database. Information is extracted and displayed using the CRUD(create,read,update,delete) features that Laravel offers. The Objects all have multiple methods for each User and Posts. The login is also protected with Laravel security that protects from cross scripting hacks. This example blog allows the user to create,edit,delete Posts post any online blog necessities.</p>
                <br>
                <div style="font-size:20px;">The whack-a-mole game is an example using JQuery to animate the arcade favorite. The objective of the game is to click on a mole when it appears on the screen coming out of it's hole. If the mole is hit, a point will be accrued, otherwise a point will be deducted. The start prompt will initializ a timer and will stop the game after 30 seconds. The toggling of the moles creates a "add class" and "remove class" using CSS opacity at the same time. Check it out and enjoy the game. 
                
            </div>  
            </div>
            <br>
            <br> 
             
    </div>
    </div>
        

</body>
</html>