<style>
	body {font-size: 30px; font-family: 'Bowlby One SC', cursive;background: -webkit-linear-gradient( #0A2A39 1%, #0A2A39 51%, #bfbada 100%);
    }
	svg { position:none;   width: 100%; height: 130%; }
	
.textt {fill: none; stroke: #fff; stroke-width: 3px; stroke-dasharray: 7% 28%; animation: stroke 4s infinite linear;}
.textt:nth-child(1) {stroke:#fff176; stroke-dasharray: 7%;}
.textt:nth-child(2) {stroke:#FEC8D8; stroke-dasharray: 14%;}
.textt:nth-child(3) {stroke:#00b0ff; stroke-dasharray: 21%;}
.textt:nth-child(4) {stroke:#651fff; stroke-dasharray: 28%;}
.textt:nth-child(5) {stroke:#dea5a4; stroke-dasharray: 35%;}

 
  
#navbar {
  width: 100%;
  left: -400;
}
body #navbar ul {
  margin: 40; margin-top:-760;
  color: black;
  display: flex;
  
  justify-content: flex-end;
}
body #navbar ul li {
  margin: 2px 20px;
  list-style-type: none;
}
body #navbar ul li a {
  all: unset;
  cursor: pointer;
	color:white;
}
 
	@keyframes stroke {
  50% {
    stroke-dashoffset: 35%;
    stroke-dasharray: 0 30.5%;
  }
}
</style>
<svg>
  <circle cx="32" cy="-118" r="16" stroke="#C23B23" stroke-width="6" fill="#C23B23" transform="translate(138,161) "/>
 <circle cx="44" cy="-137" r="16" stroke="#957DAD" stroke-width="6" fill="#957DAD" transform="translate(138,161) "/>
 <circle cx="22" cy="-128" r="16" stroke="#D291BC" stroke-width="6" fill="#D291BC" transform="translate(138,161) "/>     
  


 
 
<svg>
  <symbol id="floom">
    <text x="73" y="67" text-anchor="middle">K'Program</text>
  </symbol>
  <g class="gg">
    <use xlink:href="#floom" class="textt"></use>
    <use xlink:href="#floom" class="textt"></use>
    <use xlink:href="#floom" class="textt"></use>
    <use xlink:href="#floom" class="textt"></use>
    <use xlink:href="#floom" class="textt"></use>
    <use xlink:href="#floom" class="text"></use>
  </g>	
</svg>
</svg>
 
<nav id="navbar">
      <ul>
		  <li><a href="index.php">Home</a></li>
        <li><a href="About.">About</a></li>
        <li><a href="css.php">Css</a></li>
		<li><a href="svg.php">Svg</a></li>
		<li><a href="canvas.php">Canvas</a></li>
      </ul>
    </nav>
 


<canvas id="myCanvas" width="200" height="200"
style="border:1px solid black;">
</canvas>

<script>
var canvas = document.getElementById("myCanvas");
var ctx = canvas.getContext("2d");


ctx.save();
ctx.scale(1, 1);
ctx.beginPath();
ctx.fillStyle = 'gray';
ctx.arc(120, 40, 8, 0, 2*Math.PI);
ctx.arc(115, 37, 9, 0, 2*Math.PI);
ctx.fill();
ctx.restore();


ctx.save();
ctx.scale(1, 1);
ctx.beginPath();
ctx.fillStyle = 'gray';
ctx.arc(105, 34, 9, 0, 2*Math.PI);
ctx.fill();
ctx.restore();

ctx.fillStyle = 'black';
ctx.save();
ctx.scale(1, 1);
ctx.beginPath();
ctx.arc(50, 130, 25, 0, 2*Math.PI);
ctx.arc(140, 130, 25, 0, 2*Math.PI);
ctx.fill();
ctx.restore();
ctx.fillStyle = "black";
ctx.fillRect(120,40,10,30);
ctx.fillStyle = "#CCCC00";
ctx.fillRect(20,60,150,75);
ctx.fillStyle = 'white';
ctx.save();
ctx.scale(1, 1);
ctx.beginPath();
ctx.arc(50, 141, 4, 0, 2*Math.PI);
ctx.arc(140, 141, 4, 0, 2*Math.PI);

ctx.fill();
ctx.restore();
ctx.fill();
ctx.restore();
ctx.fillStyle = "black";
ctx.fillRect(30,80,30,30);
ctx.fillRect(65,80,30,30);
ctx.fillRect(100 ,80,30,30);

ctx.fillStyle = "white";
ctx.fillRect(137,67,30,35);


ctx.fillStyle = "black";
ctx.fillRect(0,155,200,5);


ctx.fillStyle = "black";
ctx.fillRect(145,110,20,5);

ctx.fillStyle = "brown";
ctx.fillRect(0,159,200,100);

</script>

  <canvas id="myCanvas1" width="200" height="200"
    style="border:1px solid black;">
	</canvas>
<script>
          
        var canvas = document.getElementById('myCanvas1');
        var ctx = canvas.getContext('2d');


 
ctx.fillStyle = "brown";
ctx.fillRect(55,70,90,100);

ctx.fillStyle = "black";
ctx.fillRect(46,67,110,12);


ctx.fillStyle = "black";
ctx.fillRect(90,139,20,30);



ctx.fillRect(63,90,20,20);

ctx.fillRect(117 ,90,20,20);


ctx.fillStyle = 'gray';
ctx.arc(70, 40, 12, 0, 2*Math.PI);
ctx.arc(70, 50, 10, 0, 2*Math.PI);
ctx.fill();
ctx.restore();


ctx.save();
ctx.scale(1, 1);
ctx.beginPath();
ctx.fillStyle = 'gray';
ctx.arc(70, 60, 8, 0, 2*Math.PI);
ctx.fill();
ctx.restore();

	ctx.save();
			ctx.scale(1, 1);
			ctx.beginPath();
			ctx.fillStyle = 'green';
			ctx.arc(175, 120, 10, 0, 2*Math.PI);
			ctx.arc(175, 130, 12, 0, 2*Math.PI);
			
			ctx.fill();
			ctx.restore();
						

	ctx.save();
			ctx.scale(1, 1);
			ctx.beginPath();
			ctx.fillStyle = 'green';
			ctx.arc(175, 140, 14, 0, 2*Math.PI);
			
			ctx.fill();
			ctx.restore();
						
						
						
	ctx.save();
			ctx.scale(1, 1);
			ctx.beginPath();
			ctx.fillStyle = 'skyblue';
			ctx.arc(175, 10, 9, 0, 2*Math.PI);
			ctx.arc(166, 25, 15, 0, 2*Math.PI);
			
			ctx.fill();
			ctx.restore();
						

	ctx.save();
			ctx.scale(1, 1);
			ctx.beginPath();
			ctx.fillStyle = 'skyblue';
			ctx.arc(180, 25, 15, 0, 5*Math.PI);
			
			ctx.fill();
			ctx.restore();
			
ctx.fillStyle = "black";						
ctx.fillRect(172,153,5,17);


ctx.fillStyle = 'green';
ctx.fillRect(0,169,200,30);

</script>


  <canvas id="myCanvas2" width="200" height="200"
    style="border:1px solid black;">
	</canvas>
	<script>
			
        var canvas = document.getElementById('myCanvas2');
        var ctx = canvas.getContext('2d');
				
						
				
			ctx.save();
			ctx.scale(1, 1);
			ctx.beginPath();
			ctx.fillStyle = '#cb99c9';
			ctx.arc(100, 74, 40, 0, 2*Math.PI);
			ctx.fill();
			ctx.restore();
						
						
			ctx.save();
			ctx.scale(1, 1);
			ctx.beginPath();
			ctx.fillStyle = '#e5d0bf';
			ctx.arc(70, 90, 30, 0, 2*Math.PI);
			ctx.fill();
			ctx.restore();
							
							
			ctx.save();
			ctx.scale(1, 1);
			ctx.beginPath();
			ctx.fillStyle = '#dea5a4';
			ctx.arc(130, 90, 30, 0, 2*Math.PI);
			ctx.fill();
			ctx.restore();
							
							
							
			ctx.save();
			ctx.scale(1, 1);
			ctx.beginPath();
			ctx.fillStyle = '#aec6cf';
			ctx.arc(100, 90, 30, 0, 2*Math.PI);
			ctx.fill();
			ctx.restore();
							
			ctx.fillStyle = '#ffb347';
			ctx.beginPath();
		ctx.moveTo(150, 110);
		ctx.lineTo(99, 190);
		ctx.lineTo(50, 110);
		ctx.closePath();
		ctx.fill();
		
		
		
		</script>
		
		
		<canvas id="myCanvas3" width="200" height="200"
    style="border:1px solid black;">
	</canvas>
	<script>
			
        var canvas = document.getElementById('myCanvas3');
        var ctx = canvas.getContext('2d');
	
	
		ctx.save();
			ctx.scale(1, 1);
			ctx.beginPath();
			ctx.fillStyle = 'orange';
			ctx.arc(100, 120, 70, 0, 2*Math.PI);
			ctx.fill();
			ctx.restore();
	

ctx.fillStyle = "#654321";
ctx.fillRect(1,0,200,30);

ctx.fillStyle = "green";
ctx.fillRect(93,30,15,30);

ctx.fillStyle = "green";
ctx.fillRect(85,60,30,5);

	ctx.fillStyle = 'brown';
ctx.save();
ctx.scale(1, 1);
ctx.beginPath();
ctx.arc(50, 141, 4, 0, 2*Math.PI);
ctx.arc(140, 111, 4, 0, 2*Math.PI);

ctx.fill();
ctx.restore();
ctx.fill();
ctx.restore();
	
ctx.fillStyle = 'brown';
ctx.save();
ctx.scale(1, 1);
ctx.beginPath();
ctx.arc(40, 101, 4, 0, 2*Math.PI);
ctx.arc(90, 121, 4, 0, 2*Math.PI);

ctx.fill();
ctx.restore();
ctx.fill();
ctx.restore();

	
ctx.fillStyle = 'brown';
ctx.save();
ctx.scale(1, 1);
ctx.beginPath();
ctx.arc(50, 121, 4, 0, 2*Math.PI);
ctx.arc(80, 161, 4, 0, 2*Math.PI);

ctx.fill();
ctx.restore();
ctx.fill();
ctx.restore();

	
ctx.fillStyle = 'brown';
ctx.save();
ctx.scale(1, 1);
ctx.beginPath();
ctx.arc(120, 101, 4, 0, 2*Math.PI);
ctx.arc(150, 121, 4, 0, 2*Math.PI);

ctx.fill();
ctx.restore();
ctx.fill();
ctx.restore();

	
ctx.fillStyle = 'brown';
ctx.save();
ctx.scale(1, 1);
ctx.beginPath();
ctx.arc(90, 101, 4, 0, 2*Math.PI);
ctx.arc(110, 161, 4, 0, 2*Math.PI);

ctx.fill();
ctx.restore();
ctx.fill();
ctx.restore();

	
ctx.fillStyle = 'brown';
ctx.save();
ctx.scale(1, 1);
ctx.beginPath();
ctx.arc(132, 161, 4, 0, 2*Math.PI);
ctx.arc(110, 111, 4, 0, 2*Math.PI);

ctx.fill();
ctx.restore();
ctx.fill();
ctx.restore();

	
ctx.fillStyle = 'brown';
ctx.save();
ctx.scale(1, 1);
ctx.beginPath();
ctx.arc(105, 80, 4, 0, 2*Math.PI);
ctx.arc(130, 90, 4, 0, 2*Math.PI);

ctx.fill();
ctx.restore();
ctx.fill();
ctx.restore();

	
ctx.fillStyle = 'brown';
ctx.save();
ctx.scale(1, 1);
ctx.beginPath();
ctx.arc(60, 80, 4, 0, 2*Math.PI);
ctx.arc(79, 90, 4, 0, 2*Math.PI);

ctx.fill();
ctx.restore();
ctx.fill();
ctx.restore();



ctx.fillStyle = 'brown';
ctx.save();
ctx.scale(1, 1);
ctx.beginPath();
ctx.arc(160, 140, 4, 0, 2*Math.PI);
ctx.arc(149, 150, 4, 0, 2*Math.PI);

ctx.fill();
ctx.restore();
ctx.fill();
ctx.restore();


ctx.fillStyle = 'brown';
ctx.save();
ctx.scale(1, 1);
ctx.beginPath();
ctx.arc(110, 140, 4, 0, 2*Math.PI);
ctx.arc(129, 150, 4, 0, 2*Math.PI);

ctx.fill();
ctx.restore();
ctx.fill();
ctx.restore();



ctx.fillStyle = 'brown';
ctx.save();
ctx.scale(1, 1);
ctx.beginPath();
ctx.arc(90, 140, 4, 0, 2*Math.PI);
ctx.arc(100, 150, 4, 0, 2*Math.PI);

ctx.fill();
ctx.restore();
ctx.fill();
ctx.restore();



ctx.fillStyle = 'brown';
ctx.save();
ctx.scale(1, 1);
ctx.beginPath();
ctx.arc(80, 140, 4, 0, 2*Math.PI);
ctx.arc(70, 150, 4, 0, 2*Math.PI);

ctx.fill();
ctx.restore();
ctx.fill();
ctx.restore();



ctx.fillStyle = 'brown';
ctx.save();
ctx.scale(1, 1);
ctx.beginPath();
ctx.arc(80, 127, 4, 0, 2*Math.PI);
ctx.arc(70, 120, 4, 0, 2*Math.PI);

ctx.fill();
ctx.restore();
ctx.fill();
ctx.restore();



ctx.fillStyle = 'brown';
ctx.save();
ctx.scale(1, 1);
ctx.beginPath();
ctx.arc(130, 127, 4, 0, 2*Math.PI);
ctx.arc(160, 120, 4, 0, 2*Math.PI);

ctx.fill();
ctx.restore();
ctx.fill();
ctx.restore();



ctx.fillStyle = 'brown';
ctx.save();
ctx.scale(1, 1);
ctx.beginPath();
ctx.arc(150, 80, 4, 0, 2*Math.PI);
ctx.arc(140, 70, 4, 0, 2*Math.PI);

ctx.fill();
ctx.restore();
ctx.fill();
ctx.restore();


ctx.fillStyle = 'brown';
ctx.save();
ctx.scale(1, 1);
ctx.beginPath();
ctx.arc(150, 110, 4, 0, 2*Math.PI);
ctx.arc(145, 90, 4, 0, 2*Math.PI);

ctx.fill();
ctx.restore();
ctx.fill();
ctx.restore();

	</script>
	
	
		
		<canvas id="myCanvas4" width="200" height="200"
    style="border:1px solid black;">
	</canvas>
	<script>
			
        var canvas = document.getElementById('myCanvas4');
        var ctx = canvas.getContext('2d');



ctx.fillStyle = 'green';
	ctx.save();
ctx.scale(1.5, 1);
ctx.beginPath();
ctx.arc(67, 132, 47, 0, 4*Math.PI);
ctx.fill();
ctx.restore();


	ctx.fillStyle = 'red';
	ctx.save();
ctx.scale(1.5, 1);
ctx.beginPath();
ctx.arc(67, 130, 45, 0, 4*Math.PI);
ctx.fill();
ctx.restore();
 

ctx.fillStyle = "white";
ctx.fillRect(30,28,144,100);

 

ctx.fillStyle = 'black';
ctx.save();
ctx.scale(1, 1);
ctx.beginPath();
ctx.arc(120, 141, 4, 0, 2*Math.PI);
ctx.arc(150, 141, 4, 0, 2*Math.PI);

ctx.fill();
ctx.restore();
ctx.fill();
ctx.restore();



ctx.fillStyle = 'black';
ctx.save();
ctx.scale(1, 1);
ctx.beginPath();
ctx.arc(60, 141, 4, 0, 2*Math.PI);
ctx.arc(90, 141, 4, 0, 2*Math.PI);

ctx.fill();
ctx.restore();
ctx.fill();
ctx.restore();



ctx.fillStyle = 'black';
ctx.save();
ctx.scale(1, 1);
ctx.beginPath();
ctx.arc(65, 154, 4, 0, 2*Math.PI);
ctx.arc(95, 154, 4, 0, 2*Math.PI);

ctx.fill();
ctx.restore();
ctx.fill();
ctx.restore();



ctx.fillStyle = 'black';
ctx.save();
ctx.scale(1, 1);
ctx.beginPath();
ctx.arc(120, 154, 4, 0, 2*Math.PI);
ctx.arc(144, 154, 4, 0, 2*Math.PI);

ctx.fill();
ctx.restore();
ctx.fill();
ctx.restore();



ctx.fillStyle = 'black';
ctx.save();
ctx.scale(1, 1);
ctx.beginPath();
ctx.arc(115, 168, 4, 0, 2*Math.PI);
ctx.arc(95, 168, 4, 0, 2*Math.PI);

ctx.fill();
ctx.restore();
ctx.fill();
ctx.restore();

  

ctx.fillStyle = 'green';
	ctx.save();
ctx.scale(1.5, 1);
ctx.beginPath();
ctx.arc(67, 90, 47, 0, 4*Math.PI);
ctx.fill();
ctx.restore();


	ctx.fillStyle = 'red';
	ctx.save();
ctx.scale(1.5, 1);
ctx.beginPath();
ctx.arc(67, 87, 45, 0, 4*Math.PI);
ctx.fill();
ctx.restore();



ctx.fillStyle = "white";
ctx.fillRect(30,-14,144,100);



ctx.fillStyle = 'black';
ctx.save();
ctx.scale(1, 1);
ctx.beginPath();
ctx.arc(120, 100, 4, 0, 2*Math.PI);
ctx.arc(150, 100, 4, 0, 2*Math.PI);

ctx.fill();
ctx.restore();



ctx.fillStyle = 'black';
ctx.save();
ctx.scale(1, 1);
ctx.beginPath();
ctx.arc(60, 100, 4, 0, 2*Math.PI);
ctx.arc(90, 100, 4, 0, 2*Math.PI);

ctx.fill();
ctx.restore();


ctx.fillStyle = 'black';
ctx.save();
ctx.scale(1, 1);
ctx.beginPath();
ctx.arc(120, 120, 4, 0, 2*Math.PI);
ctx.arc(90, 120, 4, 0, 2*Math.PI);

ctx.fill();
ctx.restore();

</script>

		<canvas id="myCanvas5" width="200" height="200"
    style="border:1px solid black;">
	</canvas>
	<script>
			
        var canvas = document.getElementById('myCanvas5');
        var ctx = canvas.getContext('2d');

ctx.fillStyle = "black";
ctx.fillRect(65,85,55,100);


ctx.fillStyle = "#87cefa";
ctx.fillRect(67,115,50,67);



ctx.fillStyle = "white";
ctx.fillRect(67,90,50,30);



ctx.fillStyle = "red";
ctx.fillRect(90,50,5,100);



ctx.fillStyle = "red";
ctx.fillRect(90,50,26,5);
 
</script>


		<canvas id="myCanvas6" width="200" height="200"
    style="border:1px solid black;">
	</canvas>
	<script>
			
        var canvas = document.getElementById('myCanvas6');
        var ctx = canvas.getContext('2d');



ctx.fillStyle = "black";
ctx.fillRect(17,78,66,99);


	
ctx.fillStyle = "#87cefa";
ctx.fillRect(20,80,60,95);
 

ctx.fillStyle = "brown";
ctx.fillRect(0,170,200,90);


	ctx.fillStyle = 'yellow';
	ctx.save();
ctx.scale(1, 1);
ctx.beginPath();
ctx.arc(170, 20, 20, 0, 2*Math.PI);
ctx.fill();
ctx.restore();

ctx.fillStyle = "black";
ctx.fillRect(24,87,20,20);


ctx.fillStyle = "black";
ctx.fillRect(54,87,20,20);

ctx.fillStyle = "black";
ctx.fillRect(54,110,20,20);

ctx.fillStyle = "black";
ctx.fillRect(24,110,20,20);

ctx.fillStyle = "black";
ctx.fillRect(40,140,20,30);

ctx.fillStyle = "black";
ctx.fillRect(88,84,74,86);

ctx.fillStyle = "#87cefa";
ctx.fillRect(90,86,70,84);

ctx.fillStyle = "black";
ctx.fillRect(97,100,20,30);

ctx.fillStyle = "black";
ctx.fillRect(129,100,20,30);

ctx.fillStyle = "black";
ctx.fillRect(115,140,20,30);

ctx.fillStyle = "black";
ctx.fillRect(0,40,200,2);

ctx.fillStyle = "black";
ctx.fillRect(0,20,200,2);

ctx.fillStyle = "black";
ctx.fillRect(120,70,20,2);

ctx.fillStyle = "black";
ctx.fillRect(120,65,20,2);

ctx.fillStyle = "black";
ctx.fillRect(128,60,3,25);
 
	ctx.fillStyle = 'green';
	ctx.save();
ctx.scale(1, 1);
ctx.beginPath();
ctx.arc(190, 120, 9, 0, 2*Math.PI);
ctx.arc(190, 130, 12, 0, 2*Math.PI);
ctx.arc(190, 140, 15, 0, 2*Math.PI);

ctx.fill();
ctx.restore();


ctx.fillStyle = "black";
ctx.fillRect(190,150,3,22);
 
</script>


		<canvas id="myCanvas7" width="200" height="200"
    style="border:1px solid black;">
	</canvas>
	<script>
			
        var canvas = document.getElementById('myCanvas7');
        var ctx = canvas.getContext('2d');

 
 
ctx.fillStyle = "brown";
ctx.fillRect(65,50,70,120);
 

		ctx.fillStyle = 'white';
		ctx.save();
	ctx.scale(1, 1.5);
	ctx.beginPath();
	ctx.arc(35, 70, 50, 0, 2*Math.PI);
	ctx.arc(165, 70, 50, 0, 2*Math.PI);
	  
	ctx.fill();
	ctx.restore();
 

ctx.fillStyle = "green";
ctx.fillRect(1,167,200,120);
 
		ctx.fillStyle = 'green';
		ctx.save();
	ctx.scale(1, 1.5);
	ctx.beginPath();
	ctx.arc(85, 40, 20, 0, 2*Math.PI);
	ctx.arc(120, 40, 20, 0, 2*Math.PI);
	  
	ctx.fill();
	ctx.restore();
 

		ctx.fillStyle = 'green';
		ctx.save();
	ctx.scale(1, 1.5);
	ctx.beginPath();
	ctx.arc(60, 20, 20, 0, 2*Math.PI);
	ctx.arc(90, 20, 20, 0, 2*Math.PI);
	  
	ctx.fill();
	ctx.restore();
 
		ctx.fillStyle = 'green';
		ctx.save();
	ctx.scale(1, 1.5);
	ctx.beginPath();
	ctx.arc(120, 20, 20, 0, 2*Math.PI);
	ctx.arc(150, 20, 20, 0, 2*Math.PI);
	  
	ctx.fill();
	ctx.restore();
 
		ctx.fillStyle = 'green';
		ctx.save();
	ctx.scale(1, 1.5);
	ctx.beginPath();
	ctx.arc(40, 10, 20, 0, 2*Math.PI);
	ctx.arc(90, 20, 20, 0, 2*Math.PI);
	  
	ctx.fill();
	ctx.restore();
 
ctx.fillStyle = "green";
ctx.fillRect(60	,0,110,30);
 
		ctx.fillStyle = 'green';
		ctx.save();
	ctx.scale(1, 1.5);
	ctx.beginPath();
	ctx.arc(160, 10, 20, 0, 2*Math.PI);
	 
	ctx.fill();
	ctx.restore();
	
	
		ctx.fillStyle = 'orange';
		ctx.save();
	ctx.scale(1, 1);
	ctx.beginPath();
	ctx.arc(100, 10, 15, 0, 2*Math.PI);
	ctx.arc(160, 19, 15, 0, 2*Math.PI);
	  
	ctx.fill();
	ctx.restore();
	
	
		ctx.fillStyle = 'orange';
		ctx.save();
	ctx.scale(1, 1);
	ctx.beginPath();
	ctx.arc(50, 10, 15, 0, 2*Math.PI);
	ctx.arc(120, 49, 15, 0, 2*Math.PI);
	  
	ctx.fill();
	ctx.restore();
	
	
</script>