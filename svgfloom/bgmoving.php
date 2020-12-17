<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
  <title>Gallego SVG</title>
</head>

<style>

#turn1{
  animation: turn1 5s ease-in-out infinite;
}
@keyframes turn1 {
  50% {
    transform: translateX(-5px);
  }
  100% {
    transform: translateX(0px);
  }
}
#turn2{
  animation: turn2 5s ease-in-out infinite;
}
@keyframes turn2 {
  50% {
    transform: translateY(-5px);
  }
  100% {
    transform: translateY(0px);
  }
}
#turn3{
  animation: turn3 5s ease-in-out infinite;
}
@keyframes turn3 {
  50% {
    transform: translateX(5px);
  }
  100% {
    transform: translateX(0px);
  }
}

</style>

<body>

<svg viewBox="-5 0 130 32" style="">

<g id="turn1">
 <circle 
         cx="30"
         cy="10" r="5"
         fill="black"    
         stroke-width="0.3px"
         stroke="yellow" />

<path
      fill="none"
      stroke-width="0.2px"
      stroke="black"
      d="m9 10 q10 10, 20 0,q-10 -10, -20 0, z"
      style="transform: rotate(0deg);"  
/>
 <path
      fill="none"
      stroke-width="0.2px"
      stroke="black"
      d="m30 10 q10 10, 20 0,q-10 -10, -20 0, z"
      style="transform: rotate(0deg);"  
/>
   <path
      fill="none"
      stroke-width="0.2px"
      stroke="black"
      d="m10 -30 q10 10, 20 0,q-10 -10, -20 0, z"
      style="transform: rotate(90deg);"  
/>
  <path
      fill="none"
      stroke-width="0.2px"
      stroke="black"
      d="m-10 -30 q10 10, 20 0,q-10 -10, -20 0, z"
      style="transform: rotate(90deg);"  
/>
</g>

<g id="turn2">
 <circle 
         cx="58"
         cy="25" r="5"
         fill="black"    
         stroke-width="0.3px"
         stroke="yellow" />
 <path
      fill="none"
      stroke-width="0.2px"
      stroke="black"
      d="m38 25 q10 10, 20 0,q-10 -10, -20 0, z"
      style="transform: rotate(0deg);"  
/>
 <path
      fill="none"
      stroke-width="0.2px"
      stroke="black"
      d="m58 25 q10 10, 20 0,q-10 -10, -20 0, z"
      style="transform: rotate(0deg);"  
/>
   <path
      fill="none"
      stroke-width="0.2px"
      stroke="black"
      d="m25 -58 q10 10, 20 0,q-10 -10, -20 0, z"
      style="transform: rotate(90deg);"  
/>
  <path
      fill="none"
      stroke-width="0.2px"
      stroke="black"
      d="m5 -58 q10 10, 20 0,q-10 -10, -20 0, z"
      style="transform: rotate(90deg);"  
/>

</g>


<g id="turn3">
 <circle 
         cx="85"
         cy="10" r="5"
         fill="black"    
         stroke-width="0.3px"
         stroke="yellow" />
 <path
      fill="none"
      stroke-width="0.2px"
      stroke="black"
      d="m65 10 q10 10, 20 0,q-10 -10, -20 0, z"
      style="transform: rotate(0deg);"  
/>
 <path
      fill="none"
      stroke-width="0.2px"
      stroke="black"
      d="m85 10 q10 10, 20 0,q-10 -10, -20 0, z"
      style="transform: rotate(0deg);"  
/>
   <path
      fill="none"
      stroke-width="0.2px"
      stroke="black"
      d="m10 -85 q10 10, 20 0,q-10 -10, -20 0, z"
      style="transform: rotate(90deg);"  
/>
  <path
      fill="none"
      stroke-width="0.2px"
      stroke="black"
      d="m-10 -85 q10 10, 20 0,q-10 -10, -20 0, z"
      style="transform: rotate(90deg);"  
/>
</g>


</svg>




</body>
</html>
