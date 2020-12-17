<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
  <title>Gallego SVG</title>
</head>
<body>
<table style="margin-left: auto;margin-right: auto;">
    <tr>
      <th>
        <svg viewBox="0 0 100 100" style="border: black solid;width:300px; height:300px; background-color:#f1f1f1;"> 
            
        <path
        id="graph"
        fill="none"
        stroke-width="1px"
        stroke="black"
        stroke-dasharray="1360"
        stroke-dashoffset="1360"
        d="M30 10, Q50 -5, 70 10, M70 10, Q85 25, 60 40, V45, H40 , V39.5 ,M40 40, Q15 25, 30 10 "
  />
  <path
        id="line1"
        fill="none"
        stroke-width="1px"
        stroke="gray"
        stroke-dasharray="1360"
        stroke-dashoffset="1360"
        d="M45 90, V55"
  />
    <path
        id="line2"
        fill="none"
        stroke-width="1px"
        stroke="black"
        stroke-dasharray="1360"
        stroke-dashoffset="1360"
        d="M47 90, V60"
  />
    <path
        id="graph2"
        fill="none"
        stroke-width="1px"
        stroke="black"
        stroke-dasharray="1360"
        stroke-dashoffset="1360"
        d="M40 50, H60 , V60 , T55 63, V65,T60 70, V75, T55 78, V80, L60 85, V90, L50 100, L40 90, Z  "
  />

 <path
        id="circle"
        fill="none"
        stroke-width="1px"
        stroke="black"
        transform="translate(50,20)"
        stroke-dasharray="1360"
        stroke-dashoffset="1360"
        d="M 9,0 A 9,9 0 0 1 -9,0 A 9,9 0 0 1 9,0 "
  />
  <animate
        xlink:href="#graph"
        begin="1s"
        dur="8s"
        attributeName="stroke-dashoffset"
        to="0"
        fill="freeze"   
  />
    <animate
        xlink:href="#graph2"
        begin="1s"
        dur="8s"
        attributeName="stroke-dashoffset"
        to="0"
        fill="freeze"   
  /> 
    <animate
        xlink:href="#line1"
        begin="1s"
        dur="12s"
        attributeName="stroke-dashoffset"
        to="0"
        fill="freeze"   
  /> 
   <animate
        xlink:href="#line2"
        begin="2s"
        dur="12s"
        attributeName="stroke-dashoffset"
        to="0"
        fill="freeze"   
  /> 
  <animate
        xlink:href="#circle"
        begin="1s"
        dur="10s"
        attributeName="stroke-dashoffset"
        to="0"
        fill="freeze"    
  />
   <animate
        xlink:href="#circle"
        begin="1s"
        dur="5s"
        attributeName="fill"
        from="transparent"
        to="gray"
        fill="freeze"    
  />
 
 
  
  		<text
				id="text"
				x="0"
				y="80"	
				stroke-dashoffset="560"
				style="font-weight:bold;font-size:15px;stroke:black;fill:transparent;stroke-width:1px;stroke-dasharray:560;"
            ><tspan x="0" y="50">THE</tspan>
        <tspan x="0" y="62">KEY</tspan></text>
			<animate
				xlink:href="#text"
				attributeName="stroke-dashoffset"
				attributeType="XML"
				to="0"
				dur="12s"
				fill="freeze"
begin="0.5s"
			/>

        </svg></th>
     
    </table>


</body>
</html>
