<?php
    require_once("utils/utils.php");
    require_once("utils/constants.php");
?>
<!doctype html>
<!DOCTYPE html>
<html>
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
p1 {text-align: left;}
div1 {text-align: center;}

</style>
</head>
<body>
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

<h1>Welcome to Repair/ Support </h1>
  <form action="repair.php" id='postRoomInfo' method="post">
		
<p></p>

<form action="/action_page.php">
  <label for="issue">How can we help you today:</label>
  <select name="issue" id="issue">
    <option value="technical">technical</option>
    <option value="reservation">reservation</option>
    <option value="customer complant">customer complant</option>

  </select>
  <p>Email:</p><form action="/action_page.php">
  <input type="text" id="Ticket_contact" name="Ticket_contact"><br><br>
  
  <p>Message:</p><form action="/action_page.php">
  <input style="height:200px;font-size:14pt;" type="text" id="desc" name="desc">
  

  <br><br>
  <button type="submit" formmethod="post" name="submit" value="submit">Submit</button>
</form>

</body>
</html>