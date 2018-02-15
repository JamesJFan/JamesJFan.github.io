<!DOCTYPE html>
<html>
<head>
	<title>James Fan i6 Site</title>
	<meta charset="utf-8">
	<meta name="author" content="James Fan">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/main.css">
  	<link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,500,700" rel="stylesheet">
  	<style>

  	.center {
  		max-width: 100%;
  		height: 100%;
  		margin: 0 auto;
  		position: fixed;
  		top:0;
  		right:0;
  		bottom:0;
  		left:0;
  		overflow: hidden;
  		z-index: -100;
  	}

  	.me {
  		width: 400px;
  		max-width: 100%;
  		height: auto;
  		margin: 0 auto;
  		display: block;
  		float: right;
  		padding-bottom: 10px;
  	}

  	.bio {
  		padding: 20px;
  		padding-top: 0px;
  		color: #FDFDFD;
  	}

  	@media screen and (max-width: 680px) {
   		.bio {
   			padding: 30px;
   		}

	}

	@media screen and (max-width: 980px) {
   		.bio {
   			padding: 30px;
   		}
	}



  	.project {
  		color: #FDFDFD;
  	}

  	a:hover {
  		color: slateblue;
  	}

  	#move {
  		background-color: blue;
  		height: 100px;
  		width: 100px;
  		position: relative;
  		margin: auto;
  	}

  #tokyo {
  margin: auto;
  position: fixed;
  top:0;
  bottom:0;
  left:0;
  right:0;
  z-index: -100;
  width: 100%;
  height: 100%;

  }

  .container {
    background-color: rgba(0, 0, 0, 0.4);
    position: absolute;
      height: 100%;
      width: auto;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
  }

  h2, h3, a {
    color: white;
  }

  	</style>
</head>
<body>

  <div class="row">
    <div class="col-12 center">
        <video autoplay loop muted>
          <source src="video/node.mp4" type="video/mp4">
        </video>
    </div>
  </div>

	<div class="container">

	    <section class="featured-work">

	    	<div class="row">

	        	<div class="col-12 project">



              <?php
              show_source(“madlib.php”);
              ?>

              <header><h2><a href="index.html">PHP Applications</a></h2></header>

              <h1>MadLib</h1>
                <?php if (isset($_POST['action']) && $_POST['action'] == "show"): ?>
                  <h3>Your Story</h3>
                  <br>
                  <p> There once was a <?php echo $_POST['adj'] ?> man who collected many strange <?php echo $_POST['noun'] ?>. He was <?php echo $_POST['verb'] ?> when suddenly his <?php echo $_POST['adj2'] ?> wife saw that there was a really big <?php echo $_POST['noun2'] ?> in the house. The man acted quickly to take <?php echo $_POST['num'] ?> steps into his foyer where he suddenly to his horror found a <?php echo $_POST['noun3'] ?>. The man then <?php echo $_POST['verb2'] ?>, never to be seen again.</p>
                <?php else: ?>
                  <form action="madlib.php" method="post">
                  <input type="hidden" name="action" value="show">
                  Enter an adjective: <input type="text" name="adj"><br>
                  Enter another adjective: <input type="text" name="adj2"><br>
                  Enter a plural noun: <input type="text" name="noun"><br>
                  Enter a verb: <input type="text" name="verb"><br>
                  Enter a noun: <input type="text" name="noun2"><br>
                  Enter a number: <input type="text" name="num"><br>
                  Enter past-tense verb: <input type="text" name="verb2"><br>
                  Enter third noun: <input type="text" name="noun3"><br>
                  <input type="submit">
                </form>
                <?php endif ?>
	     

                <br>
            

              <h2><a href="index.html">Back to Home</a></h2>
              <h2><a href="add.php">Calculator PHP Program</a></h2>
              <h2><a href="online.php">Online Store PHP Program</a></h2>
              <h2><a href="quiz.php">Quiz Program</a></h2>
            </div>


        


        </div>



  </div>





</body>
</html>