<title>Abaring Portfolio</title>
<style>
	
	body {font-size: 30px; font-family: 'Bowlby One SC', cursive;}
	svg {position: absolute; left: 0; top: 0; width: 100%; height: 130%; }
	
.textt {fill: none; stroke: #fff; stroke-width: 3px; stroke-dasharray: 7% 28%; animation: stroke 4s infinite linear;}
.textt:nth-child(1) {stroke:#fff176; stroke-dasharray: 7%;}
.textt:nth-child(2) {stroke:#FEC8D8; stroke-dasharray: 14%;}
.textt:nth-child(3) {stroke:#00b0ff; stroke-dasharray: 21%;}
.textt:nth-child(4) {stroke:#651fff; stroke-dasharray: 28%;}
.textt:nth-child(5) {stroke:#dea5a4; stroke-dasharray: 35%;}

 
  
#fl{
  margin: 0;
  position: fixed;
  overflow:hidden;
  background:hsla( );
  background-repeat: no-repeat;
  background-attachment: fixed;
   }  
  
#fl1{
position: fixed;
}
#fl2{
position: fixed;
}
#fl3{
position: fixed;
}
#fl2{
position: fixed;
}
#parallax {
   position: absolute;
  display: none; }
  #parallax .layer {
    position: fixed;
    z-index: -1;
    height: 100vh;
    width: 101%;
	left:0;
  }
 
#bee{
  width: 50px;
  margin: 17vw;
    position: fixed;
  
  offset-path: path('M10,10 C50,0 50,0 100,50 C150,100 150,100 200,50 C250,0 250,0 300,50 C350,100 350,100 400,50 C450,0, 450,0 500,50');
  animation: beeFly 30000ms infinite ease-in-out;
}
   
section#topper { }
  section#topper .background {
    
    background: -webkit-linear-gradient(#0A2A39 1%, #0A2A39 51%, #bfbada 100%);
    }
  section#topper .landscape-container {
    width: 100%;
    padding-top: 10px;
    height: 100vh; }
    section#topper .landscape-container .sky svg {
      top: 0; }
    section#topper .landscape-container .mountains-pink svg {
      bottom: 3%; }
    section#topper .landscape-container .mountains-purple svg {
      bottom: 6%; }
    section#topper .landscape-container .background-mountains svg {
      bottom: 7%; }


  .buyog {
        padding:0px 0;
        position:absolute;
        width: 30px;
        height: 30px;
        left:1%;top:28%;
      }
	  .ig {
        padding:0px 0;
        position:absolute;
        width: 40px;
        height: 40px;
        left:150;top:910;
      }
.yellowFill{
  fill:#ffc659;
  stroke:#d1a045;
  stroke-width:4px;
}
.whiteFill{
  fill: white;
}

.fillGrey{
  fill:#999;
}
.outlineBlack{
  stroke:#000;
  stroke-miterlimit:10;
}
.outlineWhite{
  fill:none;
  stroke:#fff;
}
.wings{
  fill:#b7e6f9;
  stroke:#80b1c4;
  stroke-miterlimit:10;
  stroke-width:4px;
}
.bodyy{
  fill:#ffc659;
  stroke-width:5px;
  stroke-miterlimit:10;
  stroke: #d1a045;
}
.legs, .antennae{
  stroke:#000;
  fill:none;
  stroke-linecap:round;
  stroke-linejoin:round;
}
.legs{
  stroke-width:8px;
}
.antennae{
  stroke-width: 4px;
}
     

.waves:after {
    width: 100%;}
  .waves svg {
    width: 108%; }
  .waves svg > *:nth-child(4) {
    animation: move 7s infinite ease-in-out;
    animation-delay: -5s;
    right: 0; }
  .waves svg > *:nth-child(5) {
    animation: move 9s infinite ease-in-out;
    animation-delay: -2s; }
  
.cloud.one {
  opacity: 0.9;
  -webkit-animation: drift 95s linear infinite;
  -moz-animation: drift 95s linear infinite;
  -o-animation: drift 95s linear infinite;
  -ms-animation: drift 95s linear infinite;
  animation: drift 95s linear infinite; }

.cloud.two {
  -webkit-animation: drift 70s linear infinite;
  -moz-animation: drift 70s linear infinite;
  -o-animation: drift 70s linear infinite;
  -ms-animation: drift 70s linear infinite;
  animation: drift 70s linear infinite; }


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
 


@-webkit-keyframes drift {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0px); }
  50% {
    opacity: 0.7;
    -webkit-transform: translateX(200%); }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0px); } }
@keyframes move {
  0% {
    transform: translateX(0); }
  50% {
    transform: translateX(-50px); }
  100% {
    transform: translateX(0); } }
@keyframes bounce {
  0%, 40%, 50%, 80%, 100% {
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    -webkit-transform: translateY(0);
    transform: translateY(0); }
  10% {
    -moz-transform: translateY(-6px);
    -ms-transform: translateY(-6px);
    -o-transform: translateY(-6px);
    -webkit-transform: translateY(-6px);
    transform: translateY(-6px); }
  20% {
    -moz-transform: translateY(0px);
    -ms-transform: translateY(0px);
    -o-transform: translateY(0px);
    -webkit-transform: translateY(0px);
    transform: translateY(0px); }
  25% {
    -moz-transform: translateY(-3px);
    -ms-transform: translateY(-3px);
    -o-transform: translateY(-3px);
    -webkit-transform: translateY(-3px);
    transform: translateY(-3px); }
  30% {
    -moz-transform: translateY(0px);
    -ms-transform: translateY(0px);
    -o-transform: translateY(0px);
    -webkit-transform: translateY(0px);
    transform: translateY(0px); } }

	@keyframes stroke {
  50% {
    stroke-dashoffset: 35%;
    stroke-dasharray: 0 30.5%;
  }
}
@keyframes beeFly{
   0% {
    offset-distance: 0%;
    transform: scaleX(1);
  }
   50%{
    offset-distance: 100%;
    transform: scaleX(1);
  }
   51%{
    transform: scaleX(-1);
  }
   99% {
    offset-distance: 0%;
    transform: scaleX(-1);
  }
 100%{
    transform: scaleX(1);
  }
}
@keyframes frontWingFlap{
 
  to{
    transform: rotate(-10deg)
  }
}

@media (min-width: 0px) {
 
  #parallax {display: block; } 
 }

 .waves {
    bottom: -260px; }
  .mountains-pink svg, .mountains-purple svg {
    bottom: 5%;
  -moz-animation: bounce 2s infinite;
  -ms-animation: bounce 2s infinite;
  -webkit-animation: bounce 2s infinite;
  -o-animation: bounce 2s infinite;
  animation: bounce 2s infinite; }
	} 	
	
	
</style>


<svg class="graphics">
<svg>	
    <rect x="0" y="0" rx="0" ry="0" width="100%" height="100" fill= "#FFDFD3" />
</svg>
</svg>
	
	
	
<svg>
  <symbol id="floom">
    <text x="6%" y="75" text-anchor="middle">K'Program</text>
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


 <svg>
  <circle cx="40" cy="-110" r="16" stroke="#C23B23" stroke-width="6" fill="#C23B23" transform="translate(138,161) "/>
 <circle cx="52" cy="-129" r="16" stroke="#957DAD" stroke-width="6" fill="#957DAD" transform="translate(138,161) "/>
 <circle cx="30" cy="-120" r="16" stroke="#D291BC" stroke-width="6" fill="#D291BC" transform="translate(138,161) "/>     
</svg> 

<div class="buyog">
  <svg id="bee" data-type="parallax" data-depth="0.45"  viewBox="0 0 400 340">
    <g id="backWing" data-type="parallax" data-depth="0.45">
      <path class="wings" d="M110.08,183.77C45.58,135.62-5.14,65,42.17,37.69S120,62.14,135.11,161.07Z"/>
    </g>
    <g id="frontWing" data-type="parallax" data-depth="0.45">
      <path class="wings" d="M134.28,169.43C92.1,100.88,71,16.51,125.05,8.6s63.28,51.41,40.87,149Z"/>
    </g>
    <g id="body" data-type="parallax" data-depth="0.45">
      <path d="M40.69,215.56s-11.87,10.55-34.28,9.23c0,0,14.5,17.14,31.64,15.82Z"/>   
      <ellipse class="bodyy" cx="165.92" cy="227.43" rx="134.59" ry="80.21" transform="translate(-10.38 7.95) rotate(-2.66)"/>
      <path d="M125.52,152.06a193.42,193.42,0,0,0-26.58,7.75c-18,47.06-16.09,96.65,2.91,140.13A193.6,193.6,0,0,0,134,306.37C108.45,252,107,208.58,125.52,152.06Z"/>
      <path d="M180.51,147.19q-9-.3-18.32.11c-1.65.08-3.3.18-4.94.29-24.07,53.6-21.51,111.38,3.29,160.2,3,0,6.05-.09,9.1-.24,6.5-.3,12.86-.88,19.09-1.7C162.07,249.83,160.78,205.65,180.51,147.19Z"/>
      <path d="M228.31,154.44a189.4,189.4,0,0,0-21.68-4.75c-19.52,51.57-15.38,105.49,8.23,151.06A185,185,0,0,0,240.44,292C218,245.44,215.28,205.4,228.31,154.44Z"/>
      <path class="legs" d="M110.55,285.43c6.59,18.46,1.32,33-15.82,40.87"/>
      <path class="legs" d="M168.18,284.7c9.18,17.32,6,32.43-9.77,42.72"/>
      <path class="legs" d="M219.1,279.14c11.61,15.79,10.72,31.19-3.43,43.69"/>
    </g>
    <g id="head" data-type="parallax" data-depth="0.45">
      <ellipse class="bodyy" cx="314.88" cy="169.43" rx="80.41" ry="54.05" transform="translate(-31.65 81.25) rotate(-14.01)"/>
      <circle cx="343.88" cy="149.65" r="6.59"/>
      <circle cx="363.65" cy="54.74" r="6.59"/>
      <circle cx="230.51" cy="79.79" r="6.59"/>
      <circle cx="281.92" cy="164.15" r="6.59"/>
      <path d="M322,194.21c11.88-3.48,19.85-12,17.81-18.94l-43,12.57C298.83,194.83,310.12,197.68,322,194.21Z"/>
      <path class="antennae" d="M329.38,120.65c-4-47.45,19.77-63.27,31.64-65.91"/>
      <path class="antennae" d="M277.47,135.15c-9-46.75-35.49-55.8-47.31-55.25"/>
    </g>
  </svg>
  </div>
  

<section id="topper">
  <div id="parallax">
  <div class="layer background"></div>
  <div class="layer moon" data-depth="0.12">
      <svg  viewBox="-40 0 551.36 248.7">
        <g transform="scale(0.5)">
          <path d="M50 20A40 40 0 1 0 50 70 30 30 0 1 1 50 20z" fill="#F5BD1F" stroke-width="2" />transform="translate(-50.63 51.8) rotate(-49.69)" fill="#fbc73a"/>
        </g>
      </svg>
	</div>
   


<div class="landscape-container">
<div class="layer background-mountains" >
<svg id="Layer_1" viewBox="0 0 595.22 277.03">
          <defs>
            <linearGradient id="linear-gradient" x1="297.61" y1="277.03" x2="297.61" gradientUnits="userSpaceOnUse">
              <stop offset="0.62" stop-color="BLACK"/>
              <stop offset="0.99" stop-color="#a18aab"/>
            </linearGradient>
          </defs>
          <polygon id="Background_Mountains" data-name="Background Mountains" points="35.64 88.56 54.91 96.51 106.55 7.51 179.47 60.09 191.22 39.82 220.57 63.17 290.14 0 360.75 80.34 421.01 25.22 524.08 93.44 594.9 52.91 595.22 275.52 0 277.03 0 118.4 35.64 88.56" fill="url(#linear-gradient)"/>
        </svg>
      </div>
      
	 
<div class="layer sky">
    <svg>
      <g transform="scale(0.7)">
            <g class="cloud one">
              <path id="Cloud_2" data-name="Cloud 2" d="M134.95,60.76A11.58,11.58,0,0,1,123.4,72.31H110.08l-0.39.41a11.62,11.62,0,0,1-16.87-.41H84.27a11.55,11.55,0,0,1-1.3-23A9.34,9.34,0,0,1,98.7,44.77a8.31,8.31,0,0,1,.58.64A15.19,15.19,0,0,1,114,33.92h0.28A15.19,15.19,0,0,1,129.4,49.06v0.28q0,0.76-.07,1.51A11.56,11.56,0,0,1,134.95,60.76Z" transform="translate(-43.36 -15.58)" fill="#fff"/>
            </g>
            <g class="cloud two">
              <rect x="334.64" y="20.11" width="65.14" height="27.3" rx="13.65" ry="13.65" fill="#fff"/>
              <circle cx="355.18" cy="21.18" r="12.04" fill="#fff"/>
              <ellipse cx="376.08" cy="20.74" rx="15.8" ry="13.01" fill="#fff"/>
            </g>
            <g class="cloud one" transform="translate(200 290.5)" >
              <rect x="475.78" y="130.14" width="65.57" height="28.56" rx="14.28" ry="14.28" fill="#fff"/>
              <circle cx="495.54" cy="134.41" r="10.66" fill="#fff"/>
              <ellipse cx="514.36" cy="139.84" rx="18.83" ry="16.08" fill="#fff"/>
            </g>
            <g class="cloud two">
              <rect x="234.01" y="67.44" width="53.6" height="23.35" rx="11.67" ry="11.67" fill="#fff"/>
              <ellipse cx="253.76" cy="68.42" rx="12.3" ry="9.2" fill="#fff"/>
              <ellipse cx="274.26" cy="79.27" rx="15.39" ry="13.15" fill="#fff"/>
            </g>
          </g>
        </svg>
      </div>

<div class="layer mountains-pink"  >
        <svg  viewBox="0 0 595.28 273.25">
         <g id="Mountain_1" data-name="Mountain 1">
            <polygon points="319.46 273.06 136.3 37.42 0 273.08 319.46 273.06" fill="#F39A27"/>
            <path d="M144.78,222.75c7-2,15.89,8.36,23.06,7.44,4.41-.56,12.22-13,12.22-13L136.34,161l-38,65.61s15.94-11.11,23.3-8C129.41,221.87,135.73,225.33,144.78,222.75Z" transform="translate(0 -60.55)" fill="#fff"/>
            <polygon points="151.29 108.31 126.65 165.82 147.88 213.48 202.33 235.9 186.44 254.47 233.91 272.99 319.46 272.99 136.25 37.31 151.29 108.31" fill="#060809" opacity="0.31"/>
          </g
        </svg>
      </div>
      <div class="layer mountains-purple" data-type="parallax" data-depth="0.45">
        <svg  viewBox="0 0 595.28 245.82">
          
          <g id="Mountain_3" data-name="Mountain 3">
            <polygon points="503.48 245.09 393.7 112.47 389.04 114.03 380.7 126.22 364.02 114.82 351.11 122.2 340.4 114.03 324.8 114.61 218.97 245.09 503.48 245.09" fill="#6e517a"/>
            <path d="M351.89,265.12c3.75-1.55,10.47-6.55,14.36-5.8,4.29,0.83,8.61,9.09,12.85,10.08,5,1.18,15.7-13.11,15.7-13.11l-33.9-40.6-37.14,42.94s11-1.1,14.06.26C341.93,260.75,348.23,266.63,351.89,265.12Z" transform="translate(0 -142.75)" fill="#fff"/>
            <path d="M360.9,215.7l1.46,44.2,12.28,14.5-13.47,29.11,24.09,24.92-3.87,39.95,37.11,19.34h84.93S360.9,215,360.9,215.7Z" transform="translate(0 -142.75)" fill="#060809" opacity="0.3"/>
          </g>
          <g id="Mountain_5" data-name="Mountain 5">
            <polygon points="595.28 245.8 513.77 95.72 463.43 65.48 419.54 114.92 308.81 245.75 595.28 245.8" fill="#6e517a"/>
            <path d="M466.06,261.7c6.89,0.28,18.59-11.68,25.2-15,5.74-2.91,23.31-7,22.51-8.19l-50.33-30.34L426.21,250s9.5-2.07,14.48-1.48C448.16,249.42,459,261.41,466.06,261.7Z" transform="translate(0 -142.75)" fill="#fff"/>
            <polygon points="463.43 65.44 477.63 93.28 493.17 119.13 473.33 166.65 517.88 211.53 527.06 245.79 595.28 245.82 513.77 95.73 463.43 65.44" fill="#060809" opacity="0.3"/>
          </g>
        </svg>
      </div>
      <div class="layer clouds" data-type="parallax" data-depth="0.45">
        <svg  viewBox="-50 0 541.36 298.7">
          <g transform="scale(0.7)">
            <g class="cloud one">
              <rect x="8.21" y="112.85" width="65.14" height="27.3" rx="13.65" ry="50.65" fill="#fff"/>
              <ellipse cx="20.26" cy="124.55" rx="16.89" ry="14.94" fill="#fff"/>
              <ellipse cx="46.64" cy="113.47" rx="18.14" ry="14.94" fill="#fff"/>
            </g>
            <g class="cloud two">
              <rect x="475.78" y="130.14" width="65.57" height="30.56" rx="14.28" ry="14.28" fill="#fff"/>
              <circle cx="495.54" cy="134.41" r="10.66" fill="#fff"/>
              <ellipse cx="514.36" cy="139.84" rx="18.83" ry="16.08" fill="#fff"/>
            </g>
          </g>
        </svg>
        <svg viewBox="-130 0 501.36 238.7">
        
        </svg>
      </div>
	  
	    

      <div class="layer hills" data-type="parallax" data-depth="0.55">
        <svg  viewBox="0 0 595.28 146.18">
          <g id="Hill_1" data-name="Hill 1">
            <path d="M249.73,332.75H22.17c55-12.46,58-45.21,113.78-44.15C191.69,287.54,194.78,320.29,249.73,332.75Z" transform="translate(0 -257.67)" fill="#72c4be"/>
            <g opacity="0.5">
              <path d="M249.73,332.66H136V288.51C191.69,287.46,194.78,320.21,249.73,332.66Z" transform="translate(0 -257.67)" fill="#2a7e7e"/>
            </g>
          </g>
          <g id="Hill_1-2" data-name="Hill 1">
            <path d="M565,332.75H300.78c63.8-14.44,67.38-52.42,132.11-51.19C497.6,280.33,501.18,318.3,565,332.75Z" transform="translate(0 -257.67)" fill="#72c4be"/>
            <g opacity="0.5">
              <path d="M565,332.65H432.89V281.46C497.6,280.23,501.18,318.21,565,332.65Z" transform="translate(0 -257.67)" fill="#2a7e7e"/>
            </g>
          </g>
          <g id="Hill_2" data-name="Hill 2">
            <path d="M378.48,332.71H188.09c46-9.78,48.55-35.49,95.2-34.66C329.92,297.22,332.5,322.93,378.48,332.71Z" transform="translate(0 -257.67)" fill="#fbc73a"/>
            <path d="M378.38,332.71H283.19V298.05C329.82,297.22,332.4,322.93,378.38,332.71Z" transform="translate(0 -257.67)" fill="#f4992b"/>
          </g>
         
          
          </g>
          <g id="Trees">
            <rect x="425.7" y="25.11" width="1.13" height="2.87" fill="#603f16"/>
			<polygon points="144.75 29 133.19 29 138.97 18.64 144.75 29" fill="#013220"/>
            <polygon points="144.15 26.35 133.79 26.35 138.97 17.06 144.15 26.35" fill="#013220"/>
            <polygon points="143.16 23.43 134.78 23.43 138.97 16.74 143.16 23.43" fill="#013220"/>
            <g opacity="0.18">
              <polygon points="138.97 16.74 138.97 29 133.19 29 134.68 26.35 133.79 26.35 135.42 23.43 134.79 23.43 138.97 16.74"/>
            </g>
            <rect x="138.22" y="286.67" width="1.52" height="3.07" transform="translate(277.95 318.73) rotate(180)" fill="#603f16"/>
            <polygon points="474.81 66.82 499.4 66.82 487.11 39.26 474.81 66.82" fill="#013220"/>
            <polygon points="476.08 59.77 498.13 59.77 487.11 35.05 476.08 59.77" fill="#013220"/>
            <polygon points="478.2 52 496.01 52 487.11 34.2 478.2 52" fill="#013220"/>
            <g opacity="0.18">
              <polygon points="487.1 34.2 487.1 66.82 499.39 66.82 496.24 59.77 498.12 59.77 494.66 52.01 495.99 52.01 487.1 34.2"/>
            </g>
            <rect x="485.49" y="66.82" width="3.23" height="8.16" fill="#603f16"/>
            <polygon points="533.83 64.66 565.07 64.66 549.45 29.64 533.83 64.66" fill="#013220"/>
            <polygon points="535.45 55.7 563.46 55.7 549.45 24.3 535.45 55.7" fill="#013220"/>
            <polygon points="538.14 45.83 560.76 45.83 549.45 23.22 538.14 45.83" fill="#013220"/>
            <g opacity="0.18">
              <polygon points="549.44 23.22 549.44 64.66 565.06 64.66 561.06 55.71 563.45 55.71 559.04 45.84 560.74 45.84 549.44 23.22"/>
            </g>
            <rect x="547.29" y="64.66" width="4.1" height="10.37" fill="#603f16"/>
            <polygon points="314.78 70.84 327.38 70.84 321.08 56.72 314.78 70.84" fill="#013220"/>
            <polygon points="315.43 67.23 326.73 67.23 321.08 54.56 315.43 67.23" fill="#013220"/>
            <polygon points="316.52 63.25 325.64 63.25 321.08 54.12 316.52 63.25" fill="#013220"/>
            <g opacity="0.18">
              <polygon points="321.08 54.12 321.08 70.85 327.38 70.85 325.76 67.23 326.73 67.23 324.95 63.25 325.64 63.25 321.08 54.12"/>
            </g>
            <rect x="320.25" y="70.84" width="1.65" height="4.18" fill="#603f16"/>
            <polygon points="53.33 63.5 88.05 63.5 70.69 24.58 53.33 63.5" fill="#013220"/>
            <polygon points="55.12 53.54 86.25 53.54 70.69 18.64 55.12 53.54" fill="#013220"/>
            <polygon points="58.12 42.57 83.26 42.57 70.69 17.44 58.12 42.57" fill="#013220"/>
            <g opacity="0.18">
              <polygon points="70.67 17.44 70.67 63.5 88.04 63.5 83.59 53.55 86.24 53.55 81.35 42.59 83.24 42.59 70.67 17.44"/>
            </g>
            <rect x="68.4" y="63.5" width="1.56" height="11.52" fill="#603f16"/>
            <polygon points="29.49 66 56.68 66 43.09 35.52 29.49 66" fill="#013220"/>
            <polygon points="30.9 58.2 55.28 58.2 43.09 30.87 30.9 58.2" fill="#013220"/>
            <polygon points="33.24 49.61 52.93 49.61 43.09 29.93 33.24 49.61" fill="#013220"/>
            <g opacity="0.18">
              <polygon points="43.08 29.93 43.08 66 56.68 66 53.19 58.21 55.27 58.21 51.44 49.62 52.92 49.62 43.08 29.93"/>
            </g>
            <rect x="41.29" y="66" width="3.57" height="9.02" fill="#603f16"/>
            <polygon points="406.81 69.07 424.63 69.07 415.72 49.1 406.81 69.07" fill="#013220"/>
            <polygon points="407.73 63.95 423.7 63.95 415.72 46.05 407.73 63.95" fill="#013220"/>
            <polygon points="409.27 58.33 422.17 58.33 415.72 45.44 409.27 58.33" fill="#013220"/>
            <g opacity="0.18">
              <polygon points="415.71 45.44 415.71 69.07 424.62 69.07 422.34 63.96 423.7 63.96 421.19 58.34 422.16 58.34 415.71 45.44"/>
            </g>
            <rect x="414.54" y="69.06" width="2.34" height="5.91" fill="#603f16"/>
            <polygon points="421.94 25.11 430.59 25.11 426.27 15.42 421.94 25.11" fill="#013220"/>
            <polygon points="422.39 22.63 430.14 22.63 426.27 13.94 422.39 22.63" fill="#013220"/>
            <polygon points="423.14 19.9 429.4 19.9 426.27 13.64 423.14 19.9" fill="#013220"/>
            <g opacity="0.18">
              <polygon points="426.26 13.64 426.26 25.11 430.59 25.11 429.48 22.63 430.14 22.63 428.92 19.9 429.39 19.9 426.26 13.64"/>
            </g>
          <rect y="74.99" width="595.28" height="71.19" fill="#f8dcac"/>
        </svg>
      </div>
      <div class="layer waves" data-type="parallax" data-depth="0.68">
        <svg  viewBox="0 0 686.35 165.84">
          <g>
            <path d="M649.1,399H-37.13V363S44.49,340.7,70.95,339.19c48-2.75,144.34,20.46,192.41,21.41,64.72,1.28,144.2-14.13,191.17-14.91C505.81,344.83,649.1,354,649.1,354v45Z" transform="translate(37.13 -338.96)" fill="#fff"/>
          </g>
          <g>
            <path d="M649.21,405.25l-686.23-3v-33S39,347.54,65.71,346c48.46-2.75,145.79,20.46,194.35,21.41,65.37,1.28,145.65-14.13,193.09-14.91,51.79-.86,196.06,7.72,196.06,7.72v45Z" transform="translate(37.13 -338.96)" fill="#84c2eb"/>
          </g>
          <g>
            <path d="M649.1,405H-37.13V378S38.4,354.2,65.13,352.69c48.49-2.75,145.86,20.46,194.44,21.41C325,375.38,405.29,360,452.75,359.19,504.57,358.33,649.1,369,649.1,369v36Z" transform="translate(37.13 -338.96)" fill="#51a3db"/>
          </g>
          <g>
            <path d="M649.1,405l-686.23-1.45v-20.1s76-21.71,102.73-23.22c48.46-2.75,145.79,20.46,194.34,21.41,65.37,1.28,145.64-14.13,193.09-14.91C504.81,365.83,649.1,378,649.1,378v27Z" transform="translate(37.13 -338.96)" fill="#2c86c7"/>
          </g>
          <g id="Boat">
            <line x1="284.92" y1="15.29" x2="285.09" y2="45.28" fill="none" stroke="#6e517a" stroke-miterlimit="10" stroke-width="3"/>
            <polygon points="265.78 45.32 266.93 47.19 306.05 46.97 307.19 45.09 265.78 45.32" fill="#6e517a"/>
            <polygon points="269.25 50.9 303.74 50.7 306.3 46.57 266.69 46.79 269.25 50.9" fill="#f6f6f6"/>
            <polygon points="284.86 14.32 284.87 17.52 291.67 17.48 288.26 15.81 284.86 14.32" fill="#fbc73a"/>
            <polygon points="306.9 43.36 286.6 43.44 286.46 18.48 306.9 43.36" fill="#f6f6f6"/>
            <polygon points="268.36 49.47 269.37 51.34 303.63 51.15 304.62 49.27 268.36 49.47" fill="#6e517a"/>
            <polygon points="306.89 43.37 286.6 43.45 286.46 18.49 306.89 43.37" fill="#060809" opacity="0.2"/>
            <polygon points="307.24 45.06 306.35 46.52 285.16 46.64 285.15 45.18 307.24 45.06" fill="#060809" opacity="0.4"/>
            <polygon points="304.63 49.25 304.6 49.31 303.64 51.12 285.14 51.22 285.13 49.36 304.63 49.25" fill="#060809" opacity="0.4"/>
            <rect x="247.88" y="356.47" width="0.98" height="27.7" transform="translate(35.08 -337.57) rotate(-0.32)" fill="#060809" opacity="0.4"/>
          </g>
          <g>
            <path d="M649.15,504.8H-37l-0.11-103.21s75.54-23.32,102.27-25c48.49-3,145.86,22.31,194.44,23.34,65.4,1.39,145.71-15.4,193.18-16.25,51.82-.93,196.35,9.66,196.35,9.66Z" transform="translate(37.13 -338.96)" fill="#17517b"/>
          </g>
        </svg>
      </div>
    </div>
  </div>
 
<svg id="fl" width="100%" height="100%" viewBox="30 -290 600 1500"  >
 <path id="path">
		<animate attributeName="d" from="m0,110 h0" to="m0,110 h1100" dur="2s" begin="0s" repeatCount="indefinite"/>
	</path>
	<text font-size="180" stroke="black" stroke-width="2" font-family="'Bowlby One SC', cursive" fill='white'>
		<textPath xlink:href="#path">ABOUT
    </textPath>
	</text>
  </svg></div> 
  <svg id="fl1">
  
    <g>  <text x="200" y="260" font-family="'Bowlby One SC', cursive" font-size="30" fill="white" stroke= "black" >This website is a compilation of my works in our major subject </text></g> </svg>
  <svg id="fl2">
  <g>  <text x="420" y="300" font-family="'Bowlby One SC', cursive" font-size="30" fill="white" stroke= "black">"Web Animation Technique"  </text></g> </svg>
 <svg id="fl3">
  <g>  <text x="100" y="330" font-family="'Bowlby One SC', cursive" font-size="30" fill="white" stroke= "black">The adoption of animated elements using Cascading Style Sheets, SVG's and Canvas </text></g> </svg>
  <svg id="fl3">
  <g>  <text x="80" y="360" font-family="'Bowlby One SC', cursive" font-size="30" fill="white" stroke= "black">increased overtime changing how animated elements are utilized and viewed in general.</text></g> </svg>


</section>
<nav id="navbar">
      <ul>
	  <li><a href="index.php">Home</a></li>
        <li><a href="About.php">About</a></li>
		<li><a href="css.php">Css</a></li>
		<li><a href="svg.php">Svg</a></li>
        <li><a href="canvas.php">Canvas</a></li>
      </ul>
    </nav>


<canvas id = "drawLines">
   </canvas>
   <script>
     var canvas = document.getElementById("drawLines");
     var context = canvas.getContext("2d")

 function star(R, cX, cY, N) {
  //star draw
  ctx.beginPath();
  ctx.moveTo(cX + R,cY);
  for(var i = 1; i <= N * 2; i++)
  {
    if(i % 2 == 0){
      var theta = i * (Math.PI * 2) / (N * 2);
      var x = cX + (R * Math.cos(theta));
      var y = cY + (R * Math.sin(theta));
    } else {
      var theta = i * (Math.PI * 2) / (N * 2);
      var x = cX + ((R/2) * Math.cos(theta));
      var y = cY + ((R/2) * Math.sin(theta));
    }

    ctx.lineTo(x ,y);
  }
  ctx.closePath();
  ctx.stroke();
}
</script>