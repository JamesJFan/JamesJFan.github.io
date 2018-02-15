
function validate()
{
var at=document.getElementById("email").value.indexOf("@");
var dot=document.getElementById("email").value.indexOf(".");
var email=document.getElementById("email").value;
var phone=document.getElementById("phone").value;
var fname=document.getElementById("fname").value;
var quantity1 =document.getElementById('quantity1').value;
var quantity2=document.getElementById('quantity2').value;
var security=document.getElementById('security').value;
var card=document.getElementById('card').value;
var month=document.getElementById('month').value;
var year=document.getElementById('year').value;
var submitOK="true";

if (fname.length>20)
 {
 alert("The name may have no more than 20 characters");
 document.getElementById('fname').focus() ;
 submitOK="false";
 }
if (isNaN(quantity1)||quantity1<0)
 {
 alert("The quantity must be a number greater or equal to 0");
 submitOK="false";
 }
 if (isNaN(quantity2)||quantity2<0)
 {
 alert("The quantity must be a number greater or equal to 0");
 submitOK="false";
 }
 if(document.getElementById('zipcode').value == "" ||
         isNaN( document.getElementById('zipcode').value ) ||
         document.getElementById('zipcode').value.length != 5 )
         {
            alert( "Please provide a zip in the format #####." );
            document.getElementById('zipcode').focus() ;
            return false;
         }
 if(security == "" ||
         isNaN( security ) ||
         security.length != 3 )
         {
            alert( "Please provide security code in the format ###." );
            document.getElementById('security').focus() ;
            return false;
         }
if(phone == "" ||
         isNaN( phone ) ||
         phone.length != 10 )
         {
            alert( "Please provide a 10-digit phone number." );
            document.getElementById('phone').focus() ;
            return false;
         }
if(card == "" ||
         isNaN( card ) ||
         card.length != 16 )
         {
            alert( "Please provide a 16-digit valid credit card number." );
            document.getElementById('card').focus() ;
            return false;
         }
if(month == "" ||
         isNaN( month ) ||
         month.length != 2 || month > 12)
         {
            alert( "Please provide a 2-digit valid month." );
            document.getElementById('month').focus() ;
            return false;
         }
if(year == "" ||
         isNaN( year ) ||
         year.length != 2 || year < 17 || year > 30)
         {
            alert( "Please provide a 2-digit valid year." );
            document.getElementById('year').focus() ;
            return false;
         }


if ( (at == -1) || (dot == -1) || email == "")
 {
 alert("Not a valid e-mail!");
 document.getElementById('email').focus();
 return false;
 }

if (submitOK=="false")
 {
 return false;
 }
 else return true;

}


function total() {
   var items1 = document.getElementById('quantity1').value;
   var price1 = document.getElementById('price1').value;
   var items2 = document.getElementById('quantity2').value;
   var price2 = document.getElementById('price2').value;

   var stotal = (items1*price1)+(items2*price2);

   document.getElementById("subtotal").value = stotal;

   var fee = 2;

   if (document.getElementById("delivery").checked == true) {

        var total = fee + stotal;
        document.getElementById('grandtotal').value=total;
    }
    else {
    	document.getElementById('grandtotal').value=stotal;
    }

}


function receipt() {

   	var txt = "<!DOCTYPE html><html><body><h2>Thank you for using our form:</h2> <p> Here are all of information that you have submitted to us:</h><p> </p></body></html>";
	var cardnum = document.getElementById('card').value;

	var x = document.getElementById("form");
            
    var lengthelements = x.length - 2;  // don't get value of submit button element 
            
    for (var i=0;i < lengthelements; i++)
            
            {
                txt += (x.elements[i].name + ": " + x.elements[i].value);
                txt += ("<br>");

                }

          txt += "<a href='product.html'>Click to go back to page</a>.";

var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();

if(dd<10) {
    dd = '0'+dd;
} 

if(mm<10) {
    mm = '0'+mm;
} 

today = mm + '/' + dd + '/' + yyyy;


          document.open();
          document.write(today);
          document.write(txt);
          document.close();
          



          
}




