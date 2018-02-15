// Author: James Fan
// Style changes via javascript

function change() {
	document.body.style.backgroundColor = "gray";
	document.getElementById("head").style.border = "solid";
	document.getElementById("head").style.padding = "40px";
	document.getElementById("head").style.borderColor = "blue";
	document.getElementById("head").style.font = "italic bold 20px sans-serif";
	document.getElementById("head").style.color = "mediumseagreen";


}

function randarray() {

var prizeArray = ["Teddy Bear", "Xbox", "Beyonce Concert Tickets", "Toyota Corrola", "iPhone X", "Samsung S8+", "Gum", "A really cool hat", "A stuffed bear"];
var result = prizeArray[(Math.floor(Math.random() * prizeArray.length))];

document.getElementById('prize').innerHTML = 'You win a ' + result + '!';


}

function swapT() {
	var obj1 = document.getElementById('p1');
	var obj2 = document.getElementById('p2');

	var text1 = obj1.innerHTML;
	var text2 = obj2.innerHTML;
	obj1.innerHTML = text2;
	obj2.innerHTML = text1;
}

function swapI() {
	var obj1 = document.getElementById('img1');
	var obj2 = document.getElementById('img2');

	var img1 = obj1.src;
	var img2 = obj2.src;
	obj1.src = img2;
	obj2.src = img1;
}

/*
one heading using <h1> to provide a title about the image.
one paragraph: Provide information about the image.
Display the image again inside this document.
Display the height and width of image using the property of the object image
Display the current day, date, month, and the year.
Also, display the day of the week such as Wednesday or Thursday.
Make sure to link this document to a .css to design it.

*/

function newdoc() {

var myWindow = window.open("", "New Document",);
var html = `
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="James Fan">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/main.css">
  	<link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,500,700" rel="stylesheet">
  	<style>
  </style>
  <script>
  	var width = document.getElementById("pipe").width = 400px;
	var height = document.getElementById("pipe").height = 300px;
</script>
</head>
<body>

	<h1>This is not a pipe.</h1>

	<img id='pipe' src="images/pipe.jpg" width='400px' height='300px'>

	<p>Image Height =</p><div id='width'></div>
	<p>Image Width =</p><div id='height'></div>

	<p>The Treachery of Images (French: La trahison des images, 1928–29, sometimes translated as 
	The Treason of Images) also known as This Is Not a Pipe and The Wind and the Song, 
	is a painting by the Belgian surrealist painter René Magritte. The picture shows a pipe. Below it, Magritte painted, 
	"Ceci n'est pas une pipe.", French for "This is not a pipe." </p>

	<div id='day'></div>

	<script> document.write(Date()); </script>
	<script> document.getElementById("day").innerHTML = resultDay;</script>
	<script> 
	var date = new Date();
	var day = date.getDay();
	var dayArray = ['Sunday', 'Monday', 'Tuesday','Wednesday','Thursday','Friday','Saturday'];
	var resultDay = dayArray[day];
	document.getElementById("day").innerHTML = resultDay; </script>
	<script>
	var x = document.getElementById("pipe").naturalWidth;
    document.getElementById("width").innerHTML = x;
    var y = document.getElementById("pipe").naturalHeight;
    document.getElementById("height").innerHTML = y;
	</script>





</body>
</html>

`;

myWindow.document.open();
myWindow.document.write(html);
myWindow.document.close();


}





function convert () {
	var myobj = document.getElementById('weight_lb');
	var weight_lb = myobj.value; //if working with an input field it is a value not innerHTML
	var conversion = (myobj.value/2.2);
	var weight_kg = conversion.toPrecision(2);
	var output = "Weight in Pounds: " + weight_lb + "\n Weight in Kilograms: " + weight_kg;
	document.getElementById('result2').innerHTML = output;
	document.getElementById('result2').style.color = 'red';

}