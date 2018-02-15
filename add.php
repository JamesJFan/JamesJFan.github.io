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

              <h1>Calculator</h1>
                
            <?php 
              
              $output = "";

              class calc

              {
                  var $num1;
                  var $num2;

                  function check($operator) {
                  
                      switch($operator) {
                
                        case '+':
                        return $this->num1 + $this->num2;
                        break;

                        case '-':
                        return $this->num1 - $this->num2;
                        break;

                        case '*':
                        return $this->num1 * $this->num2;
                        break;

                        case '/':
                        return $this->num1 / $this->num2;
                        break;

                        default:
                        return "Sorry please select an operator again.";
                }   
            }

            function getresult($num1, $num2, $num3)
            {
                $this->num1 = $num1;
                $this->num2 = $num2;
                return $this->check($num3);
            }
          }

        $cal = new calc();
        if(isset($_POST['submit']))
        {   
            $result = $cal->getresult($_POST['num1'],$_POST['num2'],$_POST['operator']);
        }
        ?>

    <form action="add.php" method="post">
      <table align="center">
      <tr>
          <td><strong> <?php echo $_POST['num1'] ?> <?php echo $_POST['operator'] ?> <?php echo $_POST['num2'] ?> = <?php echo $result; ?><strong></td>
      </tr>
      <tr>
          <td>Enter 1st Number</td>
          <td><input type="float" name="num1"></td>
      </tr>

      <tr>
          <td>Enter 2nd Number</td>
          <td><input type="float" name="num2"></td>
      </tr>

      <tr>
          <td>Select Operator</td>
          <td><select name="operator">
              <option value="+">+</option>
              <option value="-">-</option>
              <option value="*">*</option>
              <option value="/">/</option>
          </select></td>
      </tr>

      <tr>
          <td></td>
          <td><input type="submit" name="submit" value="                =                "></td>
      </tr>

    </table>
  </form>
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