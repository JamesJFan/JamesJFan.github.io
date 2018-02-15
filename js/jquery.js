

//Style Applications

$(document).ready(function(){
    $("#change").click(function(){
        $("#special").css("color", "green");
    });
    $("#change").click(function(){
    	$(".highlight").css("background-color", "yellow");
    });
    $("#change").click(function(){
    	$("p").css({"background-color": "yellow" , "color": "blue", "border":"3px solid black"});
    });
    $("#change").click(function(){
    	alert("The contents of all the p tags are:" + $("p").text());
    });
});


// Image Manipulation

$(document).ready(function(){
    $("#hide").click(function(){
        $("img").hide();
    });
    $("#show").click(function(){
        $("img").show();
    });
    $("#fade").click(function(){
        $("img").fadeOut();
        $("img").fadeOut("slow");
        $("img").fadeOut(3000);
    });
});

//Animation 

$(document).ready(function(){
    $("#animate").click(function(){
        $("#move").animate({
        left: '300px',
        opacity: '0.5',
        height: '+=50px',
        width: '+=50px'});
    });
});

//Input Change

$(document).ready(function(){
	var user = $("#user");
	var pass = $("#pass");



	
	$("#user").change(function(){

		
		if (pass.val() == "") {
	        alert("Must fill password to continue.");
	        pass.focus();
	        pass.css("background-color","yellow");
    }

        $("#demo1").html("<p>"+"Username: " + $(this).val() + "</p>");

    	


    });




	
	$("#pass").change(function(){

		if (user.val() == "") {
	        alert("Must fill username to continue.");
	        user.focus();
	        user.css("background-color","yellow");
    }
        $("#demo2").html("<p>"+ "Password: " + $(this).val() + "</p>");

 
    });




	


   
    

    
});

