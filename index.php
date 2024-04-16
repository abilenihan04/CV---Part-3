<!--This is the doc type definition for the web page-->
<!DOCTYPE html>
	<html>
		<head> 
			<!-- This links my css file to this webpage-->
			<link rel="stylesheet" href="style.css">

			<style type="text/css">
				/*Div tags*/
				#navpanel{
					top:5em;
					left:2em; 
					width:23em;
					background-color: aliceblue;
					}

				#navpanel2{
					left:2em; 
					width:23em;
					background-color: aliceblue;
					position: absolute;
					}
			</style>

			<script language="javascript">
				//This section allows me to display the date in the top corner of my web page
				var d = new Date()
				document.write(d.getDate())
				document.write("/")
				document.write(d.getMonth() + 1)
				document.write("/")
				document.write(d.getFullYear())
				
				// This function allows me to open the link in a new window
				function openTabPD() {
					window.open("index.php", "_blank");
				}
				function openTabED() {
					window.open("Educational Details.php", "_blank");
				}
				function openTabWE() {
					window.open("Work Experience.php", "_blank");
				}

				function popup() {
                	alert("Welcome to my CV!");
            	} //end of function popup
				
				function openTabForm() {
					window.open("Form.php", "_blank")
				}
			</script>

			<!-- This puts a title on the web page -->
			<title> Personal Details </title>
		</head>
		<!--This is the content of the web page-->
		<body>
			<!--This is the biggest sized heading and is being centred on the web page-->
			<h1 style="text-align:center;"> Curriculum Vitae </h1>
			<!--This is the second biggest sized heading and is being centred on the web page-->
			<h2 style="text-align:center;"> Abigail L******* </h2>
			<h2 style="text-align:center;"> 123506163@umail.ucc.ie </h2>

			<form>
				<input type="button" onclick="popup()" value="Welcome!" />
			</form>

			<div id="navpanel">
				<!--This is a link to my personal details web page using a button-->
				<button onclick="openTabPD()"> Personal Details </button>
				<!--This is a link to my Educational Details web page using a button-->
				<button onclick="openTabED()"> Educational Details </button>
				<!--This is a link to my work experience web page using a button-->	
				<button onclick="openTabWE()"> Work Experience </button>
			</div>

			<h3 onmouseover="style.color='darkseagreen'" onmouseout="style.color='black'"> Personal Details </h3>
			<!--The p tag is creating a paragraph-->

			<!--The strong tag is making the text within it bold-->
			<p><strong> Profile </strong><br> 
				I am a dependable person, I can be relied upon when things get difficult or when a specific task needs to be completed. I work well under pressure, and I can adapt to changes diligently. I am also very organised, and I have exceptional IT skills as I am very interested in that area.<br> 
				<br>
				<!--Personal information is censored out-->
				<strong> Name: </strong> Abigail L******* <br>
				<strong> Date of Birth: </strong> 30th of June 2004. <br>
				<strong> Telephone: </strong> (***) ******* <br>
				<strong> Email: </strong> a****************@gmail.com
			</p>
				<!--The address tag is being used to display my address--> 
				<address>
					<strong> Address: </strong><br>
					M****** W***, <br>
					C*******, <br>
					D************, <br>
					Co. L*******.
				</address> 

			<p><strong> Skills </strong></p>
				<!--The ul tag is for an unordered list-->
				<ul>
				<!--The li tag is for each item in the list-->
				<li> Very good problem solving skills </li>
				<li> Work well under pressure </li>
				<li> Reliable and hard working </li>
				<li> Punctual </li>
				<li> Flexible </li>
				</ul>

			<p><strong> Skills/ Interests and Achievements </strong> </p>
				<ul>
				<li><strong> Technical: </strong></li><ul>
					<!--This is a list nested within another list-->
					<li> Proficient in Microsoft Office (Word and Excel). </li>
					<li> Ability to use a till and a SELs handheld machine. </li></ul>
				<li><strong> Interests: </strong></li><ul>
					<li> <strong> July 2019: </strong> All-Ireland one wall handball championship. </li>
					<li> In my spare time I watch movies, read books, paint or take my dogs out for walk. </li></ul>  
				<li><strong> Other: </strong></li><ul>
					<li> <strong> May 2020: </strong> Bronze Gaisce President’s Award.In transition year I did the bronze gaisce program, upon completing the program you receive the bronze gaisce president's award. To receive this award, I had to partake in 26 weeks covering the three areas. The three areas were, taking up a new hobby, voluntary work, and a two-day excursion.</li>
					<li> Advanced woodworking skills (both handcraft and mechanical) </li>
					<li> Ability to use a sewing machine. </li></ul>
				<li><strong> Additional information: </strong></li><ul>
					<li> Novice driving license as of September 2022. </li></ul>
			</ul>

			<h4>
				To get in touch with me please click the 'Message' button below! 
			</h4>

			<button onclick="openTabForm()"> Message </button><br><br>

			<div id="navpanel2">
				<!--This is a link to my personal details web page-->
				<button onclick="openTabPD()"> Personal Details </button>
				<!--This is a link to my Educational Details web page-->
				<button onclick="openTabED()"> Educational Details </button>
				<!--This is a link to my work experience web page-->	
				<button onclick="openTabWE()"> Work Experience </button>
			</div>
		</body>
	</html>