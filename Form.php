<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">

        <style type="text/css">
            /*Div tags*/
            #navpanel{
                top:5em;
                left:2em; 
                width:30em;
                background-color: aliceblue;
                }
        </style>

        <script language="javascript">
            var x;
            var firstname;
            var email;
            var phone1;
            var message;
            var at;
            var dot;
            function validate1() {
                x = document.myForm;
                at = x.myEmail.value.indexOf("@");
                dot = x.myEmail.value.indexOf(".");
                firstname = x.myname.value;
                email = x.myEmail.value;
                phone1 = x.phone.value;
                message = x.message.value;

                if (firstname == "") {
                    alert("You must complete the name field");
                    x.myname.focus();
                    return false;
                 } 
                else if (isNaN(firstname) == false) {
                    alert("Please enter your name correctly");
                    x.myname.focus();
                    return false;
                } 
                else if (email == "") {
                    alert("Please enter a valid e-mail address");
                    x.myEmail.focus();
                    return false;
                } 
                else if (at == -1 || dot == -1) {
                    alert("Please enter a valid e-mail address ");
                    x.myEmail.focus();
                    return false;
                } 
                else if (phone1 == "") {
                    alert("Please enter your phone number");
                    x.phone.focus();
                    return false;
                } 
                else if (isNaN(phone1) == true) {
                    alert("That phone number is not valid");
                    x.phone.focus();
                    return false;
                } 
                else if (message == "") {
                    alert("Please enter your message!");
                    x.message.focus();
                    return false;
                }
                return true;
            }
        </script>
        <title> Send me a message</title>
    </head>
        <body>

            <h1 style="text-align:center;"> Curriculum Vitae </h1>
			<h2 style="text-align:center;"> Abigail L******* </h2>
			<h2 style="text-align:center;"> 123506163@umail.ucc.ie </h2>
			
            <div id="navpanel">
				<!--This is a link to my personal details web page using a button-->
				<button onclick="openTabPD()"> Personal Details </button>
				<!--This is a link to my Educational Details web page using a button-->
				<button onclick="openTabED()"> Educational Details </button>
				<!--This is a link to my work experience web page using a button-->	
				<button onclick="openTabWE()"> Work Experience </button>
			</div>

            <p>
                Thank you for viewing my web page. Please fill in your details to send a message!
            </p>

            <form name="myForm" action="Index.html" onSubmit="return validate1();">
                <br>
                Enter your First Name: 
                <input type="text" name="myname"> 
                <br><br>
        
                Enter your e-mail: 
                <input type="text" name="myEmail"> 
                <br><br>
        
                Enter your Phone Number: 
                <input type="text" name="phone"> 
                <br><br>

                Your Message: 
                <input type="textarea" name="message"> 
                <br><br>
        
                <input type="submit" value="Send input"> 
            </form>
        </body>
</html>