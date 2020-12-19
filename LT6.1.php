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


.words {
  stroke: #ee0;
  font-family: sans-serif;
  font-weight: bold;
  font-size: 16;
  filter: drop-shadow(0px 0px 2px #a20);
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
        <li><a href="About.php">About</a></li>
        <li><a href="css.php">Css</a></li>
		<li><a href="svg.php">Svg</a></li>
		<li><a href="canvas.php">Canvas</a></li>
      </ul>
    </nav>
 

<svg class="words" viewBox="0 0 700 300">
  <defs>
    <path id="MyPath"
          fill="white" stroke="white" stroke-width="4" d="M66.039,133.545c0,0-21-57,18-67s49-4,65,8
    s30,41,53,27s66,4,58,32s-5,44,18,57s22,46,0,45s-54-40-68-16s-40,88-83,48s11-61-11-80s-79-7-70-41
    C46.039,146.545,53.039,128.545,66.039,133.545z" pathLength="1">
    <linearGradient id="grad">      
    </linearGradient>
  </defs>

  <text fill="url(#grad)" textLength="500" lengthAdjust="spacingAndGlyphs">
    <textPath xlink:href="#MyPath"  method="stretch" spacing="auto">
     Many of life’s failures are people who did not realize how close they were to success when they gave up.
    </textPath>
  </text>
</svg>