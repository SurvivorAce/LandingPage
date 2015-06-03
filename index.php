<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="icon" type="image/x-icon" href="images/favicon1.ico">
	<link href='http://fonts.googleapis.com/css?family=Exo+2:400,600' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Andersenpai!</title>
</head>
<body>
	<nav id="myNavbar" class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation"> 
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse"> 
                <span class="sr-only">Toggle navigation</span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
            </button>
            <a class="navbar-brand" href="#">Anderson Nguyen</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse container" id="navbarCollapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#section-1">Introduction</a></li>
                <li><a href="#section-2">Projects</a></li>
                <li><a href="#section-3">Contact</a></li>
            </ul>
        </div>
    </nav>
    <div class="scroll-area" data-spy="scroll" data-target="#myNavbar" data-offset="0">
        <h3 id="section-1"></h3>
        <div class="container">
        	<div class="jumbotron">
        		<h1>Hello! I'm Anderson.</h1>
        		<hr id="black">
        		<h4>Front-end Developer! <small>Programmer in the making~</small></h4>
        	</div>
        </div>
        <hr id="section-2">
        <h3 id="section-2">Projects</h3>
        <div class="row">
        	<div id="myCarousel" class="carousel slide" data-ride="carousel">
        	  <ol class="carousel-indicators">
        	    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        	    <li data-target="#myCarousel" data-slide-to="1"></li>
        	    <li data-target="#myCarousel" data-slide-to="2"></li>
        	  </ol>

        	  <div class="carousel-inner" role="listbox">
        	    <div class="item active">
        	      <img src="images/Awesomenauts.png" alt="Awesomenauts!">
        	      <div class="carousel-caption">
        	        <h3>Awesomenauts</h3>
        	        <p id="bigger"><a href="../Awesomenauts/index.php">Link!</a></p>
        	      </div>
        	    </div>

        	    <div class="item">
        	      <img src="images/Portfolio.png" alt="Portfolio!">
        	      <div class="carousel-caption">
        	        <h3>Portfolio</h3>
        	        <p id="bigger"><a href="../Portfolio-2/index.html">Link!</a></p>
        	      </div>
        	    </div>

        	    <div class="item">
        	      <img src="images/todolist.png" alt="List!">
        	      <div class="carousel-caption">
        	        <h3>To Do List</h3>
        	        <p id="bigger"><a href="../todo-list2/index.php">Link!</a></p>
        	      </div>
        	    </div>
        	  </div>

        	  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        	    <span class="sr-only">Previous</span>
        	  </a>
        	  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        	    <span class="sr-only">Next</span>
        	  </a>
        	</div>
        </div>
        <hr id="section-3">
        <h3 id="section-3">Contact Me!</h3>
        <form method="post" name="myemailform" action="form-to-email.php">;
        	<div class="container">
	        	<p>
	        		<label for="name"></label>
	        		<input type="text" name="name" placeholder="Name" required>
	        	</p>
	        	<p>
	        		<label for="email"></label>
	        		<input type="text" name="email" placeholder="Email" required>
	        	</p>
	        	<p>
	        		<label for="message"></label>
					<textarea name="message" rows="8" placeholder="Message" required></textarea>
	        	</p>
	        	<input class="button" type="submit"></button>
	        </div>	
	        <div class="social">
	        	<ul class="share-buttons">
				    <li><a href="https://www.facebook.com/anderson.nguyen.79"><img src="images/flat_web_icon_set/black/Facebook.png" class="inverted"></a></li>
				    <li><a href="https://twitter.com/XerusMaximus;"><img src="images/flat_web_icon_set/black/Twitter.png" class="inverted"></a></li>
				    <li><a href="https://plus.google.com/u/0/115383755378438533438/about/p/pub"><img src="images/flat_web_icon_set/black/Google+.png" class="inverted"></a></li>
				    <li><a href="http://www.reddit.com/user/SurvivorAce"/><img src="images/flat_web_icon_set/black/Reddit.png" class="inverted"></a></li>
				    <li><a href="mailto:andersonnguyen126@gmail.com?subject=Praise%20SageGod"><img src="images/flat_web_icon_set/black/Email.png" class="inverted"></a></li>
				</ul>
	        </div>
        </form>
		<footer>
        	<p id="bigger"><a class="white" href="http://www.christianmingle.com/">Sponsored by ChristianMingle.com</a></p>
        </footer>
    </div>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>    
<script type="text/javascript" src="js/bootstrap.min.js"></script>	    
</body>
</html>