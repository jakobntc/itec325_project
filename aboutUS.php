<?php
    require_once("utils/utils.php");
    require_once("utils/constants.php");
?>

<!doctype html>
<html>
<body>
    
<head>
<style>
body {
  color: #222;
  background: #fff;
  font: 100% system-ui;
}

@media (prefers-color-scheme: dark) {
  body {
    color: #eee;
    background: #121212;
  }
h1 {text-align: center;}
p {text-align: center;}
p1 {text-align: left;}
div {text-align: center;}
div1 {text-align: left;}
</style>
</head>
<header>
    <nav class='navbar navbar-expand-md navbar-dark fixed-top bg-dark'>
        <div class="container-fluid">
            <a class="navbar-brand" href="homepage.php">Team Alpha Website</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-                       controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="homepage.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="repair.php">Repair Tickets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Post a Room</a>
                    </li>
                    <li class="nav-item">
                        <form method="get" action="#">
                            <input type="text" id="searchText" name="searchText" placeholder="Search...">
                            </input>
                            <button class="btn btn-primary" type="submit">Search</button>
                        </form>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class=nav-item">
                        <form method="get" action="#">
                            <button class="btn btn-primary" type="submit">Login</button>
                        </form>
                    </li>
                    <li class=nav-item">
                        <form method="get" action="registration.php">
                            <button class="btn btn-primary" type="submit">Sign Up</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<h1>ABOUT US</h1>

<p> We are the most rewarding way to book a place to stay. We really love travel and we know you do too. That’s why we make it really easy to book with us. With hundreds of thousands of places , local B and b's and Hotels we have it all. So, whether you’re looking for value in Vegas or villas with views, it’s all just a click away. Booking just got smarter too. You can be sure to find the perfect place for you.</p>

<p1>Special thanks to the Alpha Team memebers:</p1>

<div1 class="row">
  <div class="column">
    <img src="Jakob Clapsaddle.PNG" alt="Jakob Clapsaddle" style="width:100%">
  </div>
  <div class="column">
   <p1> :Jakob Clapsaddle is our team leader of team alpha team member was a freelancer and worked  independantly thanks to his hard work and dedication we could not get the site up. </p1>
  </div>
</div1>

<div1 class="row">
  <div class="column">
    <img src="JT Brewer.PNG" alt="JT Brewer" style="width:100%">
  </div>
  <div class="column">
   <p1>:JT Brewer member of team alpha team member was a freelancer and worked  independantly thanks to his hard work and dedication we could not get the site up.</p>
  </div>
</div1>

<div class="row">
  <div1 class="column">
    <img src="Victoria Williamson.jpg" alt="Victoria Williamson" style="width:100%">
  </div1>
  <div1 class="column">
   <p> :Victoria Williamson is a team member that was freelancer and worked  independantly thanks to her hard work and dedication we could not get the site up.  </p>
  </div1>
</div>

</body>
</html>
