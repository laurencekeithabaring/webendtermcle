<style>
*{
	margin: 0;
	padding: 0;
}	
body{
	text-align: center;
	font-family: 'Open Sans', sans-serif;
	
}
header{
	height: 100px;
	background: #fa8c5c;
	width: 100%;
	z-index: 12;
	position: fixed;
}
.leaf1 {
       box-shadow: -1px 1px 2px #835d46;
    width: 109px;
    margin-right: 72px;
    height: 97px;
    margin-top: -165px;
    background: linear-gradient(to top left, #A0DE21 49%, transparent 53.5%, transparent 43%, #A0DE21 51%);
    -moz-border-radius: 110% /120px 0px;
    -webkit-border-radius: 100% / 120px 0px;
    border-radius: 99% 0 / 112px 8px;
    display: inline-block;
    transform: rotate(93deg);
	animation-name: shake;
  animation-duration: 3s;
  animation-iteration-count: infinite;
  animation-timing-function: ease-in-out;
  animation-direction: alternate;
}
.leaf1:first-of-type {  
  background: linear-gradient(to top right, #A0DE21 49%, transparent 49.5%, transparent 51%, #A0DE21 51%);
  border-radius: 0 100%  /0  140px ;  
  transform:rotate(-15deg);
}
.leaf1:first-child + .leaf1 {
  transform:rotate(-29deg);
  vertical-align:1.3em;
  margin:0 -3em;
}
.leaf1:hover  { 
  border: 4px solid #000;  
    background-color: pink;
  }	
.search {
  width: 100%;
  position: relative;
  display: flex;
}

.searchTerm {
  width: 100%;
  border: 3px solid #ffb347;
  border-right: none;
  padding: 5px;
  height: 20px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #00;
}


#navbar {
  top: 420;
  width: 100%;
  position: fixed;
  left: -400;
  
}
body #navbar ul {
  margin: 0;
  color: white;
  display: flex;
  
  justify-content: flex-end;
}
body #navbar ul li {
  margin: 20px 20px;
  list-style-type: none;
}
body #navbar ul li a {
  all: unset;
  cursor: pointer;
}
.searchButton {
      width: 59px;
    height: 70px;
    border: 3px solid #ffb347;
    background: #fa8c5c;
    text-align: center;
    color: #fff;
    border-radius: 0 31px 33px 0;
    cursor: pointer;
    font-size: 16px;
}
.wrap{
  width: 20%;
  position: absolute;
  top: 56%;
    left: 27%;
  
}
.searchButton:hover  { 
  border: 1px solid #000;  
    background-color: orange;
   animation-name: shake;
  }
@keyframes shake{
  0% { transform: rotate(0deg); }
   80% { transform: rotate(0deg); }
   85% { transform: rotate(5deg); }
   95% { transform: rotate(-5deg); }
  100% { transform: rotate(0deg); }
}

.box-area{
	width: 100%;
	float: left;
	line-height: 100px;
}
.diamond{
    position: relative;
    height: 47px;
    width: 319px;
    49px: ;
    text-align: center;
    text-align: center;
    font-weight: 600;
    font-size: 20px;
    letter-spacing: 1px;
    letter-spacing: 2px;
}
.diamond:before {
         position: absolute;
    content: '';
    top: 2px;
    left: 52px;
    height: 207%;
    width: 68%;
    transform: rotateX(-114deg) rotateZ(177deg);
    box-shadow: 5px 6px 24px 0;
}
  
}
.diamond:after {
  position: absolute;
  top: 10px;
  left: 10px;
  content: '';
  height: calc(100% - 22px); 
  width: calc(100% - 22px); 
  border: 1px solid orange;
  transform: rotateX(45deg) rotateZ(45deg);
  

}


nav{
	    float: right;
    line-height: 9px;
    margin: 0px 67px;
    text-decoration: underline;
    text-decoration-style: dotted;
}
nav a{
	text-decoration: none;
	font-family: bignoodletitling;
	letter-spacing:	4px;
	font-size: 20px;
	margin: 0 10px;
	color: #fff;
}
.banner-area{	
	width: 100%;
	height: 500px;
	position: fixed;
	top: 100px;
	animation-name: backgroundd;
	animation-duration: 3s;
    animation-iteration-count: infinite;
    animation-timing-function: ease-in-out;
    animation-direction: alternate;
}
.banner-area h2{
	padding-top: 0%;
	font-size: 180px;
	font-family: popppins;
	text-transform: uppercase;
	color: #000;
}
.content-area{
	    width: 100%;
    position: relative;
    top: 600px;
    background: #ffb347;
    height: 981px;

}
.map-responsive{
      margin-left: 10px;
    overflow: hidden;
    padding-bottom: 14.25%;
    position: relative;
    height: 0px;
    margin-right: 5px;
    margin-bottom: -205px;
    margin-top: 14px;
}

.map-responsive iframe{
    left:0;
    top:0;
    height:100%;
    width:100%;
    position:absolute;
}


.head {
        width: 152px;
    height: 169px;
    background: pink;
    border: 3px solid #000;
    position: absolute;
    bottom: 312px;
    left: 29%;
    margin: 0px 0 0 -252px;
    z-index: 1;
    animation-name: pig;
    animation-duration: 3s;
    animation-iteration-count: infinite;
    animation-timing-function: ease-in-out;
    animation-direction: alternate;
}

.nose {
  border: 4px solid #000;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  position: absolute;
  bottom: 35px;
  left: 130%;
  margin: 0 0 0 -150px;
}

.nostril {
  width: 10px;
  height: 10px;
  border: 4px solid #000;
  border-radius: 50%;
  position: absolute;
  bottom: 15px;
  right: 5px;
  background-color: #000;
}

.nostril:first-child {
  left: 7px;
}

.eye:first-child {
  left: 26px;
}

.eye {
  background: #fff;
  width: 40px;
  height: 40px;
  border: 4px solid #000;
  border-radius: 50%;
  position: absolute;
  right: 22px; 
  top: 20px;
}

.eyeball {
  background: #000;
  width: 33px;
  height: 33px;
  border-radius: 50%;
  position: absolute;
  top: 4px;
  right: 3px;
}
.eye:hover  { 
  border: 3px solid #000 
  }
.eyeball:hover  { 
  border: 2px solid #000  
  }
.nose:hover  { 
  border: 2px solid #000  
  }

.lechon {
		  width: 377%;
    float: left;
    margin-left: -433px;
    margin-top: 310px;
    margin-bottom: 138px;
}
.dot {
		  cursor: pointer;
		  height: 1px;
		  width: 30px;
		  margin: 0 2px;
		  margin-top: 200px;
		  margin-left: 20px;
		  background-color: #000;
		  border-radius: 100%;
		  display: inline-block;
		  transition: background-color 0.6s ease;
}
.active, .dot:hover {
		  background-color: #717171;
}

.fade {
		  -webkit-animation-name: fade;
		  -webkit-animation-duration: 1.5s;
		  animation-name: fade;
		  animation-duration: 1.5s;
}

.column {
         float: right;
    width: 48%;
    margin-top: 250px;
    padding: 20px;
    padding-top: 0px;
    background-color: #ffb347;
    box-sizing: border-box;
    font-family: bignoodletitling;
    margin-bottom: 9px;
    margin-right: 14px;
}
.box {
	    width: 17%;
    margin-left: 159px;
    background-color: #ffb347;
    box-sizing: border-box;
    font-family: bignoodletitling;
	 border: 5px solid black;
}



input[type=text], select, textarea {
	width: 95%;
    padding: 15px;
    border: 4px solid #ccc;
    margin-top: 7px;
    margin-bottom: 16px;
	font-family: bignoodletitling;
    resize: vertical;
}

input[type=text1], select, textarea {
	    width: 95%;
    padding: 15px;
    border: 3px solid #ccc;
    margin-top: 7px;
    margin: 1px;
    padding-bottom: 97px;
    margin-bottom: 16px;
    font-family: bignoodletitling;
    resize: auto
}

input[type=submit] {
  background-color: #555;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
  font-family: bignoodletitling;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.diamond1 {
  position: relative;
  height: 200px;
  width: 200px;
  line-height: 200px;
  text-align: center;
  margin: -150px 600px;
  font-family: bignoodletitling;
  letter-spacing: 1px;
    letter-spacing: 2px;
}
.diamond1:before {
  position: absolute;
  content: '';
  top: -2px;
  left: 0px;
  height: 100%;
  width: 100%;
  transform: rotateX(45deg) rotateZ(45deg);
  box-shadow: 2px 0px 15px black;
  border: 5px solid black;
  background-color: #fa8c5c;
  
}
.diamond1:after {
     position: absolute;
    top: 10px;
    left: 13px;
    content: '';
    height: calc(100% - 22px);
    width: calc(100% - 22px);
    border: 3px solid #ffb347;
    transform: rotateX(45deg) rotateZ(45deg);
 
  
}
.lois{
	    position: relative;
    height: 200px;
    width: 200px;
    line-height: 203px;
    line-height: 201px;
    text-align: center;
    margin: -194px 603px;
    font-family: bignoodletitling;
    letter-spacing: 1px;
    letter-spacing: 2px;
}
.lois h2{
	padding-top: 0%;
	font-size: 21px;
	font-family: popppins;
	text-transform: uppercase;
	color: #000;
}

.diamond1 h2{
	padding-top: 0%;
	font-size: 21px;
	font-family: popppins;
	text-transform: uppercase;
	color: #000;
}
.box1 {
	         width: 18%;
    margin-left: 997px;
    margin-top: -152px;
    background-color: #ffb347;
    box-sizing: border-box;
    font-family: bignoodletitling;
	 border: 5px solid black;
}
.leaf {
    box-shadow: -1px 1px 2px #835d46;
    width: 74px;
	margin-right: 29px;
    height: 84px;
    margin-top: 259px;
    background: linear-gradient(to top left, #A0DE21 49%, transparent 53.5%, transparent 43%, #A0DE21 51%);
    -moz-border-radius: 110% /120px 0px;
    -webkit-border-radius: 100% / 120px 0px;
    border-radius: 99% 0 / 112px 8px;
    display: inline-block;
    transform: rotate(16deg);
}
.leaf:first-of-type {  
  background: linear-gradient(to top right, #A0DE21 49%, transparent 49.5%, transparent 51%, #A0DE21 51%);
  border-radius: 0 100%  /0  140px ;  
  transform:rotate(-15deg);
}
.leaf:first-child + .leaf {
  transform:rotate(-29deg);
  vertical-align:1.3em;
  margin:0 -3em;
}

.footer{
      background-color: #fa8c5c;
    color: #000000;
    text-align: center;
    font-size: 1.2em;
    padding: 15px;
    border-radius: 0px;
    border: 8px solid #989898;
    margin-left: 0px;
    margin-top: 137px;
	animation-name: design;
    animation-duration: 3s;
    animation-iteration-count: infinite;
    animation-timing-function: ease-in-out;
    animation-direction: alternate;
	animation-duration: 1s;
	animation-fill-mode: both;
}

.facebook {
	    background: #43609C;
    border-radius: 9%;
    display: block;
    height: 35px;
    left: 15%;
    margin: -51px 0 0 -49px;
    position: absolute;
    top: 1017px;
    width: 35px;
}
 
.facebook:after {
	color: #FFF;
    content: "f";
    display: block;
    font-family: Facebook Letter Faces, Arial;
    font-size: 35px;
    font-weight: bold;
    margin: -3% 0 0 10%;
}
 
.facebook:hover {
	-moz-box-shadow: 0px 0px 7px rgba(255, 250, 250, 0.75);
	-webkit-box-shadow: 0px 0px 7px rgba(255, 250, 250, 0.75);
	box-shadow: 0px 0px 7px rgba(255, 250, 250, 0.90);
  cursor: pointer;
}
.twitter {
	background: #00acee;
    border-radius: 9%;
    display: block;
    height: 35px;
    left: 19%;
    margin: -51px 0 0 -49px;
    position: absolute;
    top: 1017px;
    width: 35px; 
}
 
.twitter:after {
	color: #FFF;
	content: "t";
	display: block;
	font-family: Facebook Letter Faces, Arial;
	font-size: 35px;
	font-weight: bold;
	margin: -6% 0 0 10%; 
}
 
.twitter:hover {
	-moz-box-shadow: 0px 0px 7px rgba(255, 250, 250, 0.75);
	-webkit-box-shadow: 0px 0px 7px rgba(255, 250, 250, 0.75);
	box-shadow: 0px 0px 7px rgba(255, 250, 250, 0.90);
  cursor: pointer;
}
.instagram{
      background: -webkit-linear-gradient(bottom left, #FFC54E 0%, #FC0538 50%, #4E37DB 100%);
    position: absolute;
    top: 983px;
    left: 279px;
    transform: translate(-50%, -50%);
    width: 35px;
    height: 35px;
    border-radius: 25%;
}

.shape{
      transform: translate(13%, 13%);
    width: 27px;
    height: 27px;
    border-radius: 23%;
    box-shadow: 0px 0px 0px 2px rgba(255,255,255,1);
}

.shape::before{
      content: '';
    position: absolute;
    background-color: rgba(255,255,255,1);
    margin-top: 3px;
    margin-left: 6px;
    width: 3px;
    height: 3px;
    border-radius: 50%;
}

.shape::after{
     position: absolute;
    content: '';
    margin-top: 9px;
    margin-left: -6px;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    box-shadow: 0px 0px 0px 1px white;
}
.instagram:hover {
	-moz-box-shadow: 0px 0px 7px rgba(255, 250, 250, 0.75);
	-webkit-box-shadow: 0px 0px 7px rgba(255, 250, 250, 0.75);
	box-shadow: 0px 0px 7px rgba(255, 250, 250, 0.90);
  cursor: pointer;
}

.welcome{
    font-size: 64px;
    line-height: 121px;
    margin-top: 227px;
    font-family: "Sacramento", cursive;
    text-align: center;
    text-shadow: 0 0 5px #ffa500, 0 0 15px #ffa500, 0 0 20px #ffa500, 0 0 40px #ffa500, 0 0 60px #ff0000, 0 0 10px #ff8d00, 0 0 98px #ff0000;
    color: #fff6a9;
}
.button {
padding-right: 0px;
  font-size: 16px;
  background-color: #f44336;
  color: white;
  padding-top: 20;
  padding-bottom: 20;
 padding-left: 0;
  text-decoration: none;
	margin-left:1390px;
  cursor: pointer;
  top: 30 ;
  width: 20%;
  position: fixed;
  left: -400; 
}
@keyframes text {
  
  20%{
    letter-spacing: 8px;
    margin-bottom: 50px;
  }
}
@keyframes pig{
  0%{
    transform: rotate(0deg);
    border-radius: 0;
  }
  25%{
    transform: rotate(45deg);
    border-radius: 0;
    border-top-left-radius: 50%;
    background-color: #ff9b57;
  }
  50%{
    transform: rotate(90deg);
    border-radius: 0;
    border-top-left-radius:50%;
    border-top-right-radius: 50%;
     background-color: #ffb347;
  }
  75%{
    transform:rotate(135deg);
    border-radius: 0%;
     border-top-left-radius:50%;
    border-top-right-radius: 50%;
    border-bottom-right-radius: 50%;
     background-color: #ffd1dc;
   
 
}
   100%{
    transform:rotate(200deg);
    border-radius: 0%;
     border-top-left-radius:50%;
      border-top-right-radius: 50%;
    border-bottom-right-radius: 100%;
     border-bottom-left-radius: 100%;
     background-color: #ffd1dc;

}
  }
@keyframes design{
  0%{
   
    border-radius: 0;
  }
  25%{
 
    border-radius: 0;
	border-top-left-radius:50%;
      border-top-right-radius: 50%;
    background-color: #ff9b57;
  }
  50%{

    border-radius: 0;
	border-top-left-radius:50%;
      border-top-right-radius: 50%;
     background-color: #ffb347;
  }
  75%{
  
    border-radius: 0%;
    border-top-left-radius:50%;
      border-top-right-radius: 50%;
     background-color: #ffd1dc;
   
 
}
   100%{

    border-radius: 0%;
	border-top-left-radius:50%;
      border-top-right-radius: 50%;
     background-color: #ffd1dc;
  }
}
  @keyframes backgroundd{
  0%{
   
    border-radius: 0;
  }
  25%{
 
    border-radius: 0;
 
    background-color: #ff9b57;
  }
  50%{

    border-radius: 0;
   
     background-color: #ffb347;
  }
  75%{
  
    border-radius: 0%;
    
     background-color: #ffd1dc;
   
 
}
   100%{

    border-radius: 0%;
   
     background-color: #ffd1dc;
	 
   }
  }

</style>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOIS' LECHON</title>
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet"
</head>
<body>
	<div class="box-area">
	<header>
		<div class='diamond'>
				LOIS' LECHON
		</div>
		
					<div class="leaf1"></div>
					<div class="leaf1"></div>
					<div class="leaf1"></div>
					
		 <nav id="navbar">		 
<a class="button" href="svg.php">BACK</a>
</nav>
	</div>
	</header>
		<div class="banner-area">
		<div class="text"> <h2>LOIS' LECHON</h2>
		</div>
		

		<div class="box">
		<ul> Opening Hours</u>
				<ul>Mon:	7:00 am – 8:00 pm</ul>
				<ul>Tue:	7:00 am – 8:00 pm</ul>
				<ul>Wed:	7:00 am – 8:00 pm</ul>
				<ul>Thu:	7:00 am – 8:00 pm</ul>
				<ul>Fri:	7:00 am – 8:00 pm</ul>
				<ul>Sat:	7:00 am – 8:00 pm</ul>
				<ul>Sun:	7:00 am – 8:00 pm</ul>
		</div>
		
					<div class="box1">
								<ul>FOR PICK UP AND TAKE-OUT ONLY</ul> <br>
						<ul>Lechon per kilo</ul>
						<ul>PHP 650.00</ul>
						<ul>for pick-up and take out only</ul>
						<ul>Whole Lechon</ul>
						<ul>PHP 5,500.00</ul>
						<ul>for orders 5days reservation</ul>
	</div>
	<div class='diamond1'>
					  
					</div>
					<div class='lois'>
					  <h2>LOIS' LECHON</h2>
					</div>
	</div>
		<div class="content-area">
		<div class="wrapper">
			
			
				<h3><ul>We are a family-run business specialising in the most best-selling Lechon in Bacolod. </ul> 
					
			
			
				<p>Restaurant in Bacolod</p>
				<p>Open today until 20:00</p></h3> <br>
				<h2>Address</h2>
			</div>
			<div class="map-responsive">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12191.476334280296!2d122.94250296385484!3d10.666668915367826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33aed034f6524469%3A0x26acff3704dca696!2sLECHONAN%20COUNTRY!5e1!3m2!1sen!2sph!4v1599287623980!5m2!1sen!2sph" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
								width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
						
			 <div class="head">
				<div class="eye">
				  <div class="eyeball"></div>
				</div>
				
				<div class="eye">
				  <div class="eyeball"></div>
				</div>
				
				<div class="nose">
				  <div class="nostril"></div>
				  <div class="nostril"></div>
				</div>
			  </div>

									
							<div class="column">
						<label for="fname">Full name</label>
							<input type="text" id="fname" name="firstname" placeholder="Full Name...">
								<label for="lname">Email Address</label>
									<input type="text" id="ename" name="emailaddress" placeholder="E-mail Address...">
									<div class="column1">
								<label for="mes">Message</label>
							<input type="text1" id="" name="mes" placeholder="send us a message...">
						<input type="submit" value="Submit">
						
					</div>
					</div>
					<div class="welcome"	
					<h1>WELCOME!</h1></div>
					<div class="leaf"></div>
					<div class="leaf"></div>
					<div class="leaf"></div>
					
					<div class="wrap">
								<div class="search">
							  <input type="text" class="searchTerm" placeholder="What are you looking for?">
							  <button type="submit" class="searchButton">
								Search
							 </button>
						  </div>
						</div>
					
					
					
				<div class=  "footer">
				<div class = "facebook"></div>
				<div class = "twitter"></div>
				<div class="instagram">
				<div class="shape"></div>
				</div>
				<p>Copyright © 2019 All rights reserved. </p>
			</div>
			
		</div>
		
	
		
	</body>
</html>	
