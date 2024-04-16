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

				.leftfloat{
					float:left;
					margin-right:5px; 
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
					window.open("https://phpsandbox.io/n/cv1-bw8ql?files=index.php", "_blank");
				}
				function openTabED() {
					window.open("https://phpsandbox.io/n/cv1-bw8ql?files=Educational Details.php", "_blank");
				}
				function openTabWE() {
					window.open("https://phpsandbox.io/n/cv1-bw8ql?files=Work Experience.php", "_blank");
				}

			</script>

			<!-- This puts a title on the web page -->
			<title> Work Experience </title>
    	</head>

			<!--This is the content of the web page-->
        <body>
				  
			<!--This is the biggest sized heading and is being centred on the web page-->
            <h1 style="text-align:center;"> Curriculum Vitae </h1>
			<!--This is the second biggest sized heading and is being centred on the web page-->
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

			<h3 onmouseover="style.color='darkseagreen'" onmouseout="style.color='black'"> Work Experience </h3>

			<!--The p tag is creating a paragraph-->
			<!--The strong tag is making the text within it bold-->
			<div class="leftfloat">
				<img src="Daybreak.jpeg" width="150" height="100" alt="Daybreak">
				<cite>Daybreak Dromcollogher</cite> <br>
			</div>

			<p><strong> Date: </strong>  7th July 2023 - present. <br>
				<!--The img tag is used to insert an image into a web page-->
				<!--alt is used incase the image doesn't render onto the page. It gives a description of the image and is also useful for screenreaders-->
				<!--The cite tag is used to cite an image to what it is and/ or who created it-->
                <strong> Employer: </strong>  Daybreak, Dromcollogher, Co. Limerick. <br>
                <strong> Position: </strong> Deli and retail assistant. <br>
			</p>

			<p>
				<br><strong> Duties: </strong>
			</p>
				<!--The ul tag is for an unordered list-->
			<ul>
				<!--The li tag is for each item in the list-->
				<li> Turn off the alarm system for the shop, begin the set-up of the deli for the day and ensure the coffee machine and seating area are clean. </li>
				<li> Prepare food for the hot counter, cold counter and bakery section of the shop. </li>
				<li> Cook a roast dinner every day. </li>
				<li> Make and serve food to customers, ensuring everything is satisfactory. </li>
				<li> Clean the oven, fryers, glass and floors. </li>
				<li> Fill in the HCCAP book every day, including after-cook temperatures, hot holding temperatures, fridge and freezer temperatures and cleaning logs. </li>
				<li> Serve customers on the tills, deal with cash and card machines. </li>
				<li> Ability to do an uplift on a till, a final uplift and a cash sheet. </li>
				<li> Daily tasks include facing off shelves, cleaning the coffee station, refilling the milk in the machine, stocking shelves, making SELs, date checking, 				dealing with drive offs, selling cigarettes, interacting with customers, cleaning the floors and locking up the shop. </li>
			</ul>

			<div class="leftfloat">
				<img src="handball.jpg" width="150" height="100" alt="GAA Handball"> 
				<cite>GAA Handball</cite> <br>
			</div>

			<p><strong> Date: </strong> May 2016 - June 2022. <br>
				<strong> Location: </strong> Broadford Handball Club, Broadford, Co. Limerick. <br>
				<strong> Position: </strong> Volunteer Referree.<br>
			</p>

			<p>
				<br><strong> Duties: </strong>
			</p>

			<ul>
				<li> Helped to organise fixtures for a blitz or a set of matches in the club. </li>
				<li> Checked the right players were in the court for the game before the match began. </li>
				<li> Kept track of the score of the match and the duration of the match depending on which league was being played. E.g., Cumann na mBunscoil rules. </li>
				<li> Ensured there were no parents or coaches disrupting the match or upsetting the players. </li>
				<li> Prepare teas, coffees and sandwiches for the breaks between the matches. </li>
			</ul>

			<div class="leftfloat">
				<img src="Santas Kingdom.png" width="150" height="100" alt="Santa's Kingdom"> 
				<cite>Santa's Kingdom 2020</cite> <br>
			</div>

            <p><strong> Date: </strong> 23rd November - 24th December 2020. <br>
                	<strong> Employer: </strong> Charleville Park Hotel, Charleville, Co. Cork. <br>
					<strong> Position: </strong> <q>Santa’s Elf - Santa’s Kingdom.</q> <br>
			</p>

			<p>
				<br><strong> Duties: </strong>
			</p>

			<ul>
				<li> I started each morning at 9 a.m. and finished at 9 p.m. </li> 
				<li> My duties included interacting with children and giving them their presents. </li> 
				<li> I assisted the photographer, I put the photos into their frames and I presented the photos to the families. </li> 
				<li> I also helped my supervisor with extras tasks that needed completing, such as; restocking the toys, packaging cookies and filling in for other people 				when needed. </li> 
				<li> After all the families had passed through <q>Santa’s Kingdom</q> for the day, I helped my colleagues with setting up the shop and the toys for the 				next day. </li>
			</ul>

			<p><strong> Referees </strong> </p>

			<!--The address tag is being used to display an address-->
			<address>
				Academic; <br>
				Dr Ciara Fitzgerald, <br>
				Senior Lecturer co-director BSc BIS, <br>
				University College Cork, <br>
				<!--This creates a link to the email address-->
				<a href="mailto:cfitzgerald@ucc.ie">cfitzgerald@ucc.ie</a>
			</address>
				
			<address>
				<br> Work; <br>
				V**** G******, <br>
				Regional Manager, <br>
				Daybreak, <br>
				Dromcollogher, <br>
				Co. Limerick. <br>
				(***) ******* 
			</address>

			<div id="navpanel2">
				<!--This is a link to my personal details web page-->
				<button onclick="openTabPD()">Personal Details</button>
				<!--This is a link to my Educational Details web page-->
				<button onclick="openTabED()">Educational Details</button>
				<!--This is a link to my work experience web page-->	
				<button onclick="openTabWE()">Work Experience</button>
			</div>
		</body>
    </html>