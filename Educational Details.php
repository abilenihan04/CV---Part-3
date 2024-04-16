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

				function openTabGit() {
					window,open("https://github.com/abilenihan04/pizza/blob/main/Pizza.py", "_blank")
				}

				function MouseOver() {
				document.imgChar.src ="Grad.jpeg";
				}
				
				function MouseOut() {
				document.imgChar.src ="UCC Crest.jpeg";
				}
			</script>
						
			<!-- This puts a title on the web page -->
			<title> Educational Details </title>
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

			<h3 onmouseover="style.color='darkseagreen'" onmouseout="style.color='black'"> Educational Details </h3>

			<!--The p tag is creating a paragraph-->
			<!--The strong tag is making the text within it bold-->
			<p><strong> Third Level: </strong> September 2023- present: University College Cork, College Road, Cork T12 K8AF. <br> 
				<!--The img tag is used to insert an image into a web page-->
				<!--alt is used incase the image doesn't render onto the page. It gives a description of the image and is also useful for screenreaders-->
				<!--Width and height allows you to change the size of an image in pixels on the web page-->
				<img src="UCC crest.jpeg" name=imgChar onmouseover="MouseOver()" onmouseout="MouseOut()" width="150" height="100" alt="UCC Crest">
				<!--The cite tag is used to cite an image to what it is and/ or who created it-->
				<cite>UCC crest</cite> <br>
				<!--The em tag is making the text within it into italics--> 
				<em> BSc Business Information Systems </em> <br>
			</p>

				<!--The ul tag is for an unordered list-->
			<ul>
				<!--The li tag is for each item in the list-->
				<li> Covering material on financial and management accounting. </li>
				<li> Covering material on several technical modules such as; python, networking, cloud computing, web development and business analysis. </li>
				<li> Completed an assignment which included writing a program to take and calculate a pizza order. </li>
				<li> Used python to code this program. </li>
				<!--This is a link to github which contains the code to my python project-->
				<li> Link to the project code; </li>
				<li><button onclick="openTabGit()"> Github pizza project </button></li>
				<li> Completing several group projects. Example project: Developed a concept to ‘Make the World a better place’. Our idea was to have the ability to add your leap card to your digital wallet. </li>
				<li> This project allowed me to grow my team work skills and develop an understanding of how information systems can be utilised to assist us in out every day lives. </li>
			</ul>

			<p><strong> Second Level: </strong> September 2017 - May 2023: Hazelwood College, Dromcollogher, Co. Limerick. <br> 
				<img src="Hazelwood College crest.jpg" width="150" height="100" alt="Hazelwood College crest">
				<cite>Hazelwood College crest</cite> <br>
				<strong> Leaving Certificate Results </strong>
				<!--The table tag inserts a table into the web page-->
				<table>
					<!--The tr tag creates table rows-->
					<tr>
					<!--The th tag creates table headers-->
    					<th>Subject</th>
					<th>Result</th>
					</tr>
					<tr>
					<!--The td tag is the table contents for that cell-->
					<td>English</td>
					<td>H2</td>
					</tr>
					<tr>
					<td>Irish</td>
					<td>H3</td>
					</tr>
					<tr>
					<td>Maths</td>
					<td>H4</td>
					</tr>
					<tr>
					<td>German</td>
					<td>H2</td>
					</tr>
					<tr>
					<td>Accouning</td>
					<td>H5</td>
					</tr>
					<tr>	
					<td>Chemistry</td>
					<td>H4</td>
					</tr>
					<tr>
					<td>Construction</td>
					<td>H1</td>
					</tr>				
				</table>
				Leaving certificate points, 510. <br>					
				In my time at Hazelwood College, I received subject awards in Computers and in Construction Studies. I also completed transition year where I received the gaisce president's award. In 5th year I got to go to the aran islands and practice my Irish for my oral exam. In 6th year I got to go to Germany, Austria and Switzerland to practice my German before the leaving certificate oral exam.
			</p>

			<p><strong> First Level: </strong> September 2009 - June 2017: Scoil Mhuire, Broadford, Co. Limerick. <br>
				<img src="Scoil Mhuire crest.jpg" width="100" height="100" alt="Scoil Mhuire crest"> 
				<cite>Scoil Mhuire Broadford crest</cite>
			</p>

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