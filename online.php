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
              show_source(“add.php”);
              ?>

              <header><h2><a href="index.html">PHP Applications</a></h2></header>

              <h1>Online Store</h1>

              <?php
              // define variables
              $nameError = $emailError = "";
              $name = $email = "";
              $price1 = $_POST['price1'];
              $price2 = $_POST['price2'];
              $quantity1 = $_POST['quantity1'];
              $quantity2 = $_POST['quantity2'];
              $pho_total = $quantity1 * $price1;
              $bahn_total = $quantity2 * $price2;
              $total = $pho_total + $bahn_total;



              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["name"])) {
                  $nameError = "Name is required";
                } else {
                  $name = validate_input($_POST["name"]);
                  if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                    $nameError = "Only letters and white space allowed"; 
                  }
                }
                
                if (empty($_POST["email"])) {
                  $emailError = "Email is required";
                } else {
                  $email = validate_input($_POST["email"]);
                  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailError = "Invalid email format"; 
                  }
                }
            




              }

              function validate_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
              }
              ?>

              <h2>Online Store</h2>
              <p><span class="error">* required field.</span></p>
              <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">  
                Name: <input type="text" name="name" value="<?php echo $name;?>">
                <span class="error">* <?php echo $nameError;?></span>
                <br><br>
                E-mail: <input type="text" name="email" value="<?php echo $email;?>">
                <span class="error">* <?php echo $emailError;?></span>
                <br><br>
                <fieldset name="Order" class="products">
                  <legend>Items:</legend>
                  <h3>Pho</h3>
                  <img width='300' src="images/pho.jpg"><br>
                  Price: $<input name="price1" value='10' type="number" readonly><br>
                  Quantity: <input name="quantity1" min="0" value='' type="number" size="10"><br>
                  <br>
                  <br>
                  <h3>Bahn Mi</h3>
                  <img width='300' src="images/bahn.jpg"><br>
                  Price: $<input name="price2" value='12' type="number" size="10" readonly> <br>
                  Quantity: <input  name="quantity2" min="0" value='' type="number" size="20"><br>
                  <br>
                  <br>

                </fieldset>

                <br><br>
                <br><br>
                <br><br>
                <input type="reset" name="reset" value="Reset">
                <input type="submit" name="submit" value="Submit">  
              </form>

              
              <?php
              echo "<h2>Your Receipt:</h2>";
              echo "Name: $name";
              echo "<br>";
              echo "Email: $email";
              echo "<br>";
              echo "Pho Quantity: $quantity1";
              echo "<br>";
              echo "Bahn-Mi Quantity: $quantity2";
              echo "<br>";
              echo "Order Total $: $total";

              ?>
                
            
            

<br>
<br>
<br>
<br>
<h2><a href="index.html">Back to Home</a></h2>
              <h2><a href="add.php">Calculator PHP Program</a></h2>
              <h2><a href="online.php">Online Store PHP Program</a></h2>
              <h2><a href="quiz.php">Quiz Program</a></h2>
            </div>


        


        </div>



  </div>

<h2><a href="index.html">Back to Home</a></h2>



</body>
</html>