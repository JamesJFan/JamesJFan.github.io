
function calendar() {

var holidayArray = new Array(52);

	holidayArray[0] = ['2017-09-01', "Summer Recess"];
	holidayArray[1] = ['2017-09-02', "Summer Recess"];
	holidayArray[2] = ['2017-09-03', "Summer Recess"];
	holidayArray[3] = ['2017-09-04', "Labor Day"];
	holidayArray[4] = ['2017-10-09', "Fall Recess"];
	holidayArray[5] = ['2017-11-22', "Student Thanksgiving Recess"];
	holidayArray[6] = ['2017-11-23', "Student Thanksgiving Recess"];
	holidayArray[7] = ['2017-11-24', "Student Thanksgiving Recess"];
	holidayArray[8] = ['2017-11-25', "Student Thanksgiving Recess"];
	holidayArray[9] = ['2017-11-26', "Student Thanksgiving Recess"];
	holidayArray[10] = ['2017-12-23', "Winter Recess"];
	holidayArray[11] = ['2017-12-24', "Winter Recess"];
	holidayArray[12] = ['2017-12-25', "Winter Recess"];
	holidayArray[13] = ['2017-12-26', "Winter Recess"];
	holidayArray[14] = ['2017-12-27', "Winter Recess"];
	holidayArray[15] = ['2017-12-28', "Winter Recess"];
	holidayArray[16] = ['2017-12-29', "Winter Recess"];
	holidayArray[17] = ['2017-12-30', "Winter Recess"];
	holidayArray[18] = ['2017-12-31', "Winter Recess"];
	holidayArray[19] = ['2018-01-01', "Winter Recess"];
	holidayArray[20] = ['2018-01-02', "Winter Recess"];
	holidayArray[21] = ['2018-01-03', "Winter Recess"];
	holidayArray[22] = ['2018-01-15', "Martin Luther King Jr Day"];
	holidayArray[23] = ['2018-02-19', "President's Day"];
	holidayArray[24] = ['2018-03-12', "Spring Recess"];
	holidayArray[25] = ['2018-03-13', "Spring Recess"];
	holidayArray[26] = ['2018-03-14', "Spring Recess"];
	holidayArray[27] = ['2018-03-15', "Spring Recess"];
	holidayArray[28] = ['2018-03-16', "Spring Recess"];
	holidayArray[29] = ['2018-03-17', "Spring Recess"];
	holidayArray[30] = ['2018-03-18', "Spring Recess"];
	holidayArray[31] = ['2018-05-28', "Memorial Day"];
	holidayArray[32] = ['2018-07-04', "Independence Day"];
	holidayArray[33] = ['2018-08-13', "Summer Recess"];
	holidayArray[34] = ['2018-08-14', "Summer Recess"];
	holidayArray[35] = ['2018-08-15', "Summer Recess"];
	holidayArray[36] = ['2018-08-16', "Summer Recess"];
	holidayArray[37] = ['2018-08-17', "Summer Recess"];
	holidayArray[38] = ['2018-08-18', "Summer Recess"];
	holidayArray[39] = ['2018-08-19', "Summer Recess"];
	holidayArray[40] = ['2018-08-20', "Summer Recess"];
	holidayArray[41] = ['2018-08-21', "Summer Recess"];
	holidayArray[42] = ['2018-08-22', "Summer Recess"];
	holidayArray[43] = ['2018-08-23', "Summer Recess"];
	holidayArray[44] = ['2018-08-24', "Summer Recess"];
	holidayArray[45] = ['2018-08-25', "Summer Recess"];
	holidayArray[46] = ['2018-08-26', "Summer Recess"];
	holidayArray[47] = ['2018-08-27', "Summer Recess"];
	holidayArray[48] = ['2018-08-28', "Summer Recess"];
	holidayArray[49] = ['2018-08-29', "Summer Recess"];
	holidayArray[50] = ['2018-08-30', "Summer Recess"];
	holidayArray[51] = ['2018-08-31', "Summer Recess"];
	
	//User input
	var userDate = document.getElementById('calendar').value;

	console.log(userDate);

	var min = new Date('2017-09-01');
	var max = new Date('2018-08-31');

	var newDate = new Date(userDate);


	var special = 'not a holiday';
	var photo = '';

	//Determing Holiday status
	for (var index=0; index < holidayArray.length; index++) {

		if (userDate === holidayArray[index][0]) {

			console.log(holidayArray[index][0] + ' is ' + holidayArray[index][1]);
			special = holidayArray[index][1];
			if (special === "Summer Recess") {
				photo = "<img src='images/summer.jpg'>"
			}
			if (special === "Labor Day") {
				photo = "<img src='images/labor.jpg'>"
			}
			if (special === "Fall Recess") {
				photo = "<img src='images/fall.jpg'>"
			}
			if (special === "Student Thanksgiving Recess") {
				photo = "<img src='images/thanksgiving.jpg'>"
			}
			if (special === "Winter Recess") {
				photo = "<img src='images/winter.jpg'>"
			}
			if (special === "Martin Luther King Jr Day") {
				photo = "<img src='images/martin.png'>"
			}
			if (special === "President's Day") {
				photo = "<img src='images/president.png'>"
			}
			if (special === "Spring Recess") {
				photo = "<img src='images/spring.png'>"
			}
			if (special === "Memorial Day") {
				photo = "<img src='images/memorial.jpg'>"
			}
			if (special === "Independence Day") {
				photo = "<img src='images/independence.jpg'>"
			}

		}
	}

	console.log(userDate);
	var date1 = new Date(userDate); 
	var day = date1.getUTCDate();
	var month = date1.getMonth() + 1; 
	var year = date1.getFullYear();

	var formatted1 = month + "/" + day  + "/" + year;

	var output = "The day is " + formatted1 + " and it is " + special + photo;

	if (newDate.getTime() < min.getTime() || newDate.getTime() > max.getTime() ) {
		output = 'Invalid date, try again.';
	}


	document.getElementById('output').innerHTML = output;



}
