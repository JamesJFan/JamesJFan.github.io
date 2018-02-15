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

  #results, #results2, #results3 {
  	font-size: 30px;
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
              show_source(“quiz.php”);
              ?>

              <?php
              	$answer1 = $_POST['question-1-answers'];

				$answer2 = $_POST['question-2-answers'];

				$answer3 = $_POST['question-3-answers'];




				$totalCorrect = 0;

				if ($answer1 == "A") { $totalCorrect++; }

				if ($answer2 == "B") { $totalCorrect++; }

				if ($answer3 == "B") { $totalCorrect++; }

              ?>

              <form action="quiz.php" method="post" id="quiz">
              	<li>
					<h3>PHP was an acronym for...</h3>

					<div>

					<input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />

					<label for="question-1-answers-A">A) Personal Home Pages </label>

					</div>

					<div>

					<input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />

					<label for="question-1-answers-B">B) Program Home Processing</label>

					</div>

					<div>

					<input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />

					<label for="question-1-answers-C">C) Hypertext Programming</label>

					</div>

					<div>

					<input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />

					<label for="question-1-answers-D">D) None of the above</label>

					</div>

				</li>

				<li>
					<h3>What is the square root of 9?</h3>

					<div>

					<input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />

					<label for="question-2-answers-A">A) 4</label>

					</div>

					<div>

					<input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />

					<label for="question-2-answers-B">B) 3</label>

					</div>

					<div>

					<input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />

					<label for="question-2-answers-C">C) 2</label>

					</div>

					<div>

					<input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />

					<label for="question-2-answers-D">D) None of the above</label>

					</div>

				</li>

				<li>
					<h3>What is ((2+3)*10)/2?</h3>

					<div>

					<input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />

					<label for="question-2-answers-A">A) 50</label>

					</div>

					<div>

					<input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />

					<label for="question-2-answers-B">B) 25</label>

					</div>

					<div>

					<input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />

					<label for="question-3-answers-C">C) 30</label>

					</div>

					<div>

					<input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />

					<label for="question-3-answers-D">D) None of the above</label>

					</div>

				</li>
				<input type="submit" name="submit">


			  </form>

			  <?php 

			  $correct = (int)$totalCorrect;
			  $answers = 3;
			  $percent = ($correct / $answers) * 100;
			  $submit= $_POST['submit'];

				if ($submit){
echo "<div id='results'>$totalCorrect / 3 correct</div><br>";
echo "<div id='results2'> $percent % correct</div><br>";
echo "<div id='results3'> Answer Key: <br>
	1) A <br>
	2) B <br>
	3) B <br> </div>";
}

		
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