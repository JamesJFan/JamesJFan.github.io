
function randarray() {

var prizeArray = new Array(8);

	prizeArray[0]= ["Teddy Bear", 20 ];
	prizeArray[1]= ["Xbox", 300];
	prizeArray[2]= ["Beyonce Concert Tickets", 150]; 
	prizeArray[3]= ["Toyota Corrola", 10000];
	prizeArray[4]= ["iPhone X", 1000];
	prizeArray[5]= ["Samsung S8+", 700];
	prizeArray[6]= ["Gum", 2];
	prizeArray[7]= ["A really cool hat", "Priceless"];

var output = "<ul>";

for (var i = 0; i < prizeArray.length; i++) {
	output += "<li>" + prizeArray[i][0] + "<br>"+ "Price: $" + prizeArray[i][1] + "</li>";
}

output += "</ul>";

document.getElementById("prize").innerHTML = output;

}


function randarray2() {

var prizeArray = new Array(8);

	prizeArray[0]= ["Teddy Bear", 20 ];
	prizeArray[1]= ["Xbox", 300];
	prizeArray[2]= ["Beyonce Concert Tickets", 150]; 
	prizeArray[3]= ["Toyota Corrola", 10000];
	prizeArray[4]= ["iPhone X", 1000];
	prizeArray[5]= ["Samsung S8+", 700];
	prizeArray[6]= ["Gum", 2];
	prizeArray[7]= ["A really cool hat", "Priceless"];

var result = prizeArray[(Math.floor(Math.random() * prizeArray.length))][0];

document.getElementById('prize2').innerHTML = 'You win a ' + result + '!';

}


function birthday() {

	var name1 = document.getElementById('name1').value;
	var birthday1 = document.getElementById('birthday1').value;
	var name2 = document.getElementById('name2').value;
	var birthday2 = document.getElementById('birthday2').value;

	console.log(name1);
	console.log(name2);
	console.log(birthday1);
	console.log(birthday2);

	var date1 = new Date(birthday1);
	var date2 = new Date(birthday2);

	console.log(date1);
	console.log(date2);

//Date 1 format
	var day = date1.getUTCDate();
	var month = date1.getMonth() + 1; 
	var year = date1.getFullYear();

	var formatted1 = month + "/" + day  + "/" + year;

//Date 2 format
	var day2 = date2.getUTCDate();
	var month2 = date2.getMonth() + 1; 
	var year2 = date2.getFullYear();

	var formatted2 = month2 + "/" + day2  + "/" + year2;

// output

	var text = name1 + "'s birthday is on " + formatted1 + "<br>" + name2 + "'s birthday is on " + formatted2 + "<br>";


	if (date1.getTime() < date2.getTime()) {
		text += "<br>" + name1 + " is younger than " + name2;
	}
	if (date1.getTime() > date2.getTime()) {
		text += "<br>" + name1 + " is older than " + name2;
	}
	if (date1.getTime() == date2.getTime()) {
		text += "<br>" + name1 + " and " + name2 + " are the same age! ";
	}

	console.log(text);

	document.getElementById('compare').innerHTML = text;


}

