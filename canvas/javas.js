
var canvas_1 = document.getElementById('canvas-1'),
context_1 = canvas_1.getContext('2d'),
canvas_2 = document.getElementById('canvas-2'),
context_2 = canvas_2.getContext('2d'),
canvas_3 = document.getElementById('canvas-3'),
context_3 = canvas_3.getContext('2d'),
canvas_4 = document.getElementById('canvas-4'),
context_4 = canvas_4.getContext('2d'),
canvas_5 = document.getElementById('canvas-5'),
context_5 = canvas_5.getContext('2d'),
canvas_6 = document.getElementById('canvas-6'),
context_6 = canvas_6.getContext('2d'),
canvas_7 = document.getElementById('canvas-7'),
context_7 = canvas_7.getContext('2d'),
canvas_8 = document.getElementById('canvas-8'),
context_8 = canvas_8.getContext('2d');


context_1.beginPath();
context_1.arc(50,50,40,0,2*Math.PI);
context_1.stroke();

context_1.beginPath();
context_1.rotate(20 * Math.PI / 90);
context_1.fillRect(110, 10, 60, 5);
context_1.closePath();
context_1.fillStyle = '#000000';
context_1.fill();

/// ---- context 2 ---- ///

context_2.beginPath();
context_2.arc(50,50,40,0,2*Math.PI);
context_2.stroke();

context_2.beginPath();
context_2.fillRect(35, 50, 30, 5);
context_2.closePath();
context_2.fillStyle = '#000000';
context_2.fill();

context_2.beginPath();
context_2.fillRect(47.5, 38, 5, 30);
context_2.closePath();
context_2.fillStyle = '#000000';
context_2.fill();

context_2.beginPath();
context_2.rotate(20 * Math.PI / 90);
context_2.fillRect(110, 10, 60, 5);
context_2.closePath();
context_2.fillStyle = '#a0abbd';
context_2.fill();


/// ---- context 3 ---- ///

context_3.beginPath();
context_3.arc(51,60,50,0,2*Math.PI);
context_3.stroke();

context_3.beginPath();
context_3.fillRect(47.5, 58, 5, 30);
context_3.closePath();
context_3.fillStyle = '#000000';
context_3.fill();

context_3.beginPath();
context_3.fillRect(47.5, 38, 5, 5);
context_3.closePath();
context_3.fillStyle = '#000000';
context_3.fill();

/// ---- context 4 ---- ///

context_4.beginPath();

context_4.fillRect(10, 50, 125, 15);
context_4.closePath();
context_4.fillStyle = "gray";
context_4.fill();

context_4.beginPath();
context_4.fillRect(20, 50, 5, 15);
context_4.closePath();
context_4.fillStyle = "red";
context_4.fill();

context_4.beginPath();
context_4.fillRect(110, 50, 25, 15);
context_4.closePath();
context_4.fillStyle = "gray";
context_4.fill();

context_4.beginPath();
context_4.fillRect(30, 50, 5, 15);
context_4.closePath();
context_4.fillStyle = "black";
context_4.fill();

context_4.beginPath();
context_4.fillRect(130, 25, 2, 20);
context_4.closePath();
context_4.fillStyle = "black";
context_4.fill();

context_4.beginPath();
context_4.fillRect(127, 25, 2, 20);
context_4.closePath();
context_4.fillStyle = "black";
context_4.fill();

context_4.beginPath();
context_4.fillRect(124, 25, 2, 20);
context_4.closePath();
context_4.fillStyle = "black";
context_4.fill();


/// ---- context 5 ---- ///

context_5.beginPath();
context_5.fillRect(10,0, 120, 170);
context_5.closePath();
context_5.fillStyle = "#223556";
context_5.fill();

context_5.beginPath();
context_5.fillRect(15,25, 110, 160);
context_5.closePath();
context_5.fillStyle = "gray";
context_5.fill();
context_5.beginPath();

context_5.beginPath();
context_5.fillRect(60,10, 20, 5);
context_5.closePath();
context_5.fillStyle = "black";
context_5.fill();

context_5.beginPath();
context_5.fillRect(10,130, 120, 45);
context_5.closePath();
context_5.fillStyle = "black";
context_5.fill();

context_5.beginPath();
context_5.arc(70,150,8,0,2*Math.PI);
context_5.fillStyle = "#223556";
context_5.fill();


/// ---- context 6 ---- ///

context_6.beginPath();
context_6.arc(60,60,50,0,2*Math.PI);
context_6.strokeStyle = "black";
context_6.lineWidth = 7;
context_6.stroke();

context_6.beginPath();
context_6.fillRect(57, 40, 5, 25);
context_6.closePath();
context_6.fillStyle = '#000000';
context_6.fill();

context_6.beginPath();
context_6.fillRect(57, 60, 25, 5);
context_6.closePath();
context_6.fillStyle = '#000000';
context_6.fill();

/// ---- context 7 ---- ///

context_7.beginPath();
context_7.fillRect(38,45, 124.5, 90);
context_7.closePath();
// the triangle
context_7.beginPath();
context_7.moveTo(50, 50);
context_7.lineTo(150, 50);
context_7.lineTo(100, 100);
context_7.closePath();


// the outline
context_7.lineWidth = 10;
context_7.strokeStyle = "gray";
context_7.stroke();

// the fill color
context_7.fillStyle = "#223556";
context_7.fill();

/// ---- context 8 ---- ///

context_8.beginPath();
context_8.fillRect(10, 50, 125, 45);
context_8.closePath();
context_8.fill();
context_8.fillStyle = "gray";
context_8.closePath();

context_8.beginPath();
context_8.fillRect(10, 90, 125, 50);
context_8.closePath();
context_8.fillStyle = "gray";
context_8.fill();
context_8.closePath();

context_8.beginPath();
context_8.arc(120,62,8,0,2*Math.PI);
context_8.strokeStyle = "gray";
context_8.stroke();
context_8.closePath();

context_8.beginPath();
context_8.arc(75,100,25,0,2*Math.PI);
context_8.strokeStyle = "gray";
context_8.lineWidth = 5;
context_8.fillStyle = "#223556";
context_8.fill();
context_8.stroke();
context_8.closePath();

