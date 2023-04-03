<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="mycss.css">
	</head>
	<body>
		<div class="lighterbar">
			<h1 class="titleText">Jackson Donaldson</h1>
		</div>
		<div class="bar">
			<div class="topnav">
				<a href="/">Home</a>
				<a href="resume">Resume</a>
				<a href="tetris3D">Tetris3D</a>
				<a class="active" href="scheduler">Scheduler</a>
			</div>
		</div>
		
			
		<div class="back" style="padding-top:15px;">
			<div style="margin:auto;width:830px;height:70px;">
				<div class="back" style="display:inline-block;vertical-align:top;margin:auto;width:100px;height:60px;"></div>
				<button class="scheduleBlock" onClick="changeCol(0)"><h3>Monday</h3></button>
				<button class="scheduleBlock" onClick="changeCol(1)"><h3>Tuesday</h3></button>
				<button class="scheduleBlock" onClick="changeCol(2)"><h3>Wednesday</h3></button>
				<button class="scheduleBlock" onClick="changeCol(3)"><h3>Thursday</h3></button>
				<button class="scheduleBlock" onClick="changeCol(4)"><h3>Friday</h3></button>
				<button class="scheduleBlock" onClick="changeCol(5)"><h3>Saturday</h3></button>
				<button class="scheduleBlock" onClick="changeCol(6)"><h3>Sunday</h3></button>
			</div>
			<div class="scheduleRow">
				<button class="scheduleBlock" onClick="changeRow(0)"><h3>10 AM</h3></button>
				<button id="0,0" class="timeButton" onClick="changeState(this)"></button>
				<button id="0,1" class="timeButton" onClick="changeState(this)"></button>
				<button id="0,2" class="timeButton" onClick="changeState(this)"></button>
				<button id="0,3" class="timeButton" onClick="changeState(this)"></button>
				<button id="0,4" class="timeButton" onClick="changeState(this)"></button>
				<button id="0,5" class="timeButton" onClick="changeState(this)"></button>
				<button id="0,6" class="timeButton" onClick="changeState(this)"></button>
			</div>
			<div class="scheduleRow">
				<button class="scheduleBlock" onClick="changeRow(1)"><h3>11 AM</h3></button>
				<button id="1,0" class="timeButton" onClick="changeState(this)"></button>
				<button id="1,1" class="timeButton" onClick="changeState(this)"></button>
				<button id="1,2" class="timeButton" onClick="changeState(this)"></button>
				<button id="1,3" class="timeButton" onClick="changeState(this)"></button>
				<button id="1,4" class="timeButton" onClick="changeState(this)"></button>
				<button id="1,5" class="timeButton" onClick="changeState(this)"></button>
				<button id="1,6" class="timeButton" onClick="changeState(this)"></button>
			</div>
			<div class="scheduleRow">
				<button class="scheduleBlock" onClick="changeRow(2)"><h3>12 PM</h3></button>
				<button id="2,0" class="timeButton" onClick="changeState(this)"></button>
				<button id="2,1" class="timeButton" onClick="changeState(this)"></button>
				<button id="2,2" class="timeButton" onClick="changeState(this)"></button>
				<button id="2,3" class="timeButton" onClick="changeState(this)"></button>
				<button id="2,4" class="timeButton" onClick="changeState(this)"></button>
				<button id="2,5" class="timeButton" onClick="changeState(this)"></button>
				<button id="2,6" class="timeButton" onClick="changeState(this)"></button>
			</div>
			<div class="scheduleRow">
				<button class="scheduleBlock" onClick="changeRow(3)"><h3>1 PM</h3></button>
				<button id="3,0" class="timeButton" onClick="changeState(this)"></button>
				<button id="3,1" class="timeButton" onClick="changeState(this)"></button>
				<button id="3,2" class="timeButton" onClick="changeState(this)"></button>
				<button id="3,3" class="timeButton" onClick="changeState(this)"></button>
				<button id="3,4" class="timeButton" onClick="changeState(this)"></button>
				<button id="3,5" class="timeButton" onClick="changeState(this)"></button>
				<button id="3,6" class="timeButton" onClick="changeState(this)"></button>
			</div>
			<div class="scheduleRow">
				<button class="scheduleBlock" onClick="changeRow(4)"><h3>2 PM</h3></button>
				<button id="4,0" class="timeButton" onClick="changeState(this)"></button>
				<button id="4,1" class="timeButton" onClick="changeState(this)"></button>
				<button id="4,2" class="timeButton" onClick="changeState(this)"></button>
				<button id="4,3" class="timeButton" onClick="changeState(this)"></button>
				<button id="4,4" class="timeButton" onClick="changeState(this)"></button>
				<button id="4,5" class="timeButton" onClick="changeState(this)"></button>
				<button id="4,6" class="timeButton" onClick="changeState(this)"></button>
			</div>
			<div class="scheduleRow">
				<button class="scheduleBlock" onClick="changeRow(5)"><h3>3 PM</h3></button>
				<button id="5,0" class="timeButton" onClick="changeState(this)"></button>
				<button id="5,1" class="timeButton" onClick="changeState(this)"></button>
				<button id="5,2" class="timeButton" onClick="changeState(this)"></button>
				<button id="5,3" class="timeButton" onClick="changeState(this)"></button>
				<button id="5,4" class="timeButton" onClick="changeState(this)"></button>
				<button id="5,5" class="timeButton" onClick="changeState(this)"></button>
				<button id="5,6" class="timeButton" onClick="changeState(this)"></button>
			</div>
			<div class="scheduleRow">
				<button class="scheduleBlock" onClick="changeRow(6)"><h3>4 PM</h3></button>
				<button id="6,0" class="timeButton" onClick="changeState(this)"></button>
				<button id="6,1" class="timeButton" onClick="changeState(this)"></button>
				<button id="6,2" class="timeButton" onClick="changeState(this)"></button>
				<button id="6,3" class="timeButton" onClick="changeState(this)"></button>
				<button id="6,4" class="timeButton" onClick="changeState(this)"></button>
				<button id="6,5" class="timeButton" onClick="changeState(this)"></button>
				<button id="6,6" class="timeButton" onClick="changeState(this)"></button>
			</div>
			<div class="scheduleRow">
				<button class="scheduleBlock" onClick="changeRow(7)"><h3>5 PM</h3></button>
				<button id="7,0" class="timeButton" onClick="changeState(this)"></button>
				<button id="7,1" class="timeButton" onClick="changeState(this)"></button>
				<button id="7,2" class="timeButton" onClick="changeState(this)"></button>
				<button id="7,3" class="timeButton" onClick="changeState(this)"></button>
				<button id="7,4" class="timeButton" onClick="changeState(this)"></button>
				<button id="7,5" class="timeButton" onClick="changeState(this)"></button>
				<button id="7,6" class="timeButton" onClick="changeState(this)"></button>
			</div>
			<div class="scheduleRow">
				<button class="scheduleBlock" onClick="changeRow(8)"><h3>6 PM</h3></button>
				<button id="8,0" class="timeButton" onClick="changeState(this)"></button>
				<button id="8,1" class="timeButton" onClick="changeState(this)"></button>
				<button id="8,2" class="timeButton" onClick="changeState(this)"></button>
				<button id="8,3" class="timeButton" onClick="changeState(this)"></button>
				<button id="8,4" class="timeButton" onClick="changeState(this)"></button>
				<button id="8,5" class="timeButton" onClick="changeState(this)"></button>
				<button id="8,6" class="timeButton" onClick="changeState(this)"></button>
			</div>
			<div class="scheduleRow">
				<button class="scheduleBlock" onClick="changeRow(9)"><h3>7 PM</h3></button>
				<button id="9,0" class="timeButton" onClick="changeState(this)"></button>
				<button id="9,1" class="timeButton" onClick="changeState(this)"></button>
				<button id="9,2" class="timeButton" onClick="changeState(this)"></button>
				<button id="9,3" class="timeButton" onClick="changeState(this)"></button>
				<button id="9,4" class="timeButton" onClick="changeState(this)"></button>
				<button id="9,5" class="timeButton" onClick="changeState(this)"></button>
				<button id="9,6" class="timeButton" onClick="changeState(this)"></button>
			</div>
			<div class="scheduleRow">
				<button class="scheduleBlock" onClick="changeRow(10)"><h3>8 PM</h3></button>
				<button id="10,0" class="timeButton" onClick="changeState(this)"></button>
				<button id="10,1" class="timeButton" onClick="changeState(this)"></button>
				<button id="10,2" class="timeButton" onClick="changeState(this)"></button>
				<button id="10,3" class="timeButton" onClick="changeState(this)"></button>
				<button id="10,4" class="timeButton" onClick="changeState(this)"></button>
				<button id="10,5" class="timeButton" onClick="changeState(this)"></button>
				<button id="10,6" class="timeButton" onClick="changeState(this)"></button>
			</div>
			<div class="scheduleRow">
				<button class="scheduleBlock" onClick="changeRow(11)"><h3>9 PM</h3></button>
				<button id="11,0" class="timeButton" onClick="changeState(this)"></button>
				<button id="11,1" class="timeButton" onClick="changeState(this)"></button>
				<button id="11,2" class="timeButton" onClick="changeState(this)"></button>
				<button id="11,3" class="timeButton" onClick="changeState(this)"></button>
				<button id="11,4" class="timeButton" onClick="changeState(this)"></button>
				<button id="11,5" class="timeButton" onClick="changeState(this)"></button>
				<button id="11,6" class="timeButton" onClick="changeState(this)"></button>
			</div>
			<div class="scheduleRow">
				<button class="scheduleBlock" onClick="changeRow(12)"><h3>10 PM</h3></button>
				<button id="12,0" class="timeButton" onClick="changeState(this)"></button>
				<button id="12,1" class="timeButton" onClick="changeState(this)"></button>
				<button id="12,2" class="timeButton" onClick="changeState(this)"></button>
				<button id="12,3" class="timeButton" onClick="changeState(this)"></button>
				<button id="12,4" class="timeButton" onClick="changeState(this)"></button>
				<button id="12,5" class="timeButton" onClick="changeState(this)"></button>
				<button id="12,6" class="timeButton" onClick="changeState(this)"></button>
			</div>
			
			<div class="scheduleRow">
				<div class="timeButton" style="opacity=0;"></div>
				<div class="timeButton" style="opacity=0;"></div>
				<button class="scheduleBlock" style="width:413px;" onClick="showSubmitScreen()"><h3>Submit</h3></button>
				
			</div>
			<div class = "scheduleRow">
				<h2>Submitted: <?php
									if(filesize("names.txt") > 0){
										
										$file = fopen("names.txt","r");
										$names = fread($file, filesize("names.txt"));
										fclose($file);
										echo htmlspecialchars($names);
									}
								?>
								</h2>
									
		</div>
		
		<div class="centralPopup" id="submitScreen">
			<button style="position:absolute;right:15px;top:15px;background:none;border:none;" onClick="hideSubmitScreen()"><h1>X</h1></button>
			<h1 style="position:absolute;left:100px;top:30px;">Name:</h1>
			<input id="nameInput" type="text" style="position:absolute;left:220px;top:40px;width:150px;height:30px;background-color:#adadad;"/>
			<h1 style="position:absolute;left:100px;top:90px;">Password:</h1>
			<input id="passwordInput" type="password" style="position:absolute;left:220px;top:100px;width:150px;height:30px;background-color:#adadad;font-size:20px;"/>
			<button class="scheduleBlock" style="position:absolute;top:150px;left:150px;width:200px;" onClick="submit()"><h3>Send</h3></button>
		</div>
	
	
	<script>
		var avails = [];
		
		function setState(row, col, state){
			
			var e = document.getElementById(row + ","+col)
			if(e == null){
				console.log("bad element: " + row + ", " + col);
				return;
			}
			if(e.style.backgroundColor == "rgb(51, 51, 51)"){
				return;
			}
			
			avails[row][col] = state;
			var color = "#333" // already dead
			if(state == 1){
				//locally dead
				color = "#aa1d04"
			}
			if(state == 2){
				//alive
				color = "#04AA6D"
			}
			e.style.backgroundColor = color;
			

		}
		function changeState(button){
			console.log(button);
			var pos = button.id.split(",");
			console.log(button.style.backgroundColor);
			if(button.style.backgroundColor == "rgb(170, 29, 4)"){
				setState(pos[0],pos[1], 2);
			}
			else if(button.style.backgroundColor == "rgb(4, 170, 109)"){
				setState(pos[0], pos[1], 1);
			}
		}
		
		function changeRow(row){
			var changeTo = "0";
			for(var i = 0; i < 7; i++){
				if(changeTo != "0"){
					setState(row, i, changeTo)
				}
				else if(document.getElementById(row+","+i).style.backgroundColor == "rgb(4, 170, 109)"){
					changeTo = 1;
					i--;
				}
				else if(document.getElementById(row+","+i).style.backgroundColor == "rgb(170, 29, 4)"){
					changeTo = 2;
					i--;
				}
			}
		}
		
		function changeCol(col){
			var changeTo = "0";
			for(var i = 0; i < 13; i++){
				if(changeTo != "0"){
					setState(i, col, changeTo)
				}
				else if(document.getElementById(i+","+col).style.backgroundColor == "rgb(4, 170, 109)"){
					changeTo = 1;
					i--;
				}
				else if(document.getElementById(i+","+col).style.backgroundColor == "rgb(170, 29, 4)"){
					changeTo = 2;
					i--;
				}
			}
		}
		
		function loadTimes(){
			console.log("loading...");
			fetch("schedule.json?" + Math.random())
				.then(response => response.json())
				.then(data => process(data))
		}
		
		function process(data){
			console.log("continuing load...");
			avails = data;
			for(var i = 0; i < 13; i++){
				for(var j = 0; j < 7; j++){
					setState(i,j, avails[i][j]);
				}
			}
		}
		
		loadTimes();
		
		function showSubmitScreen(){
			var e = document.getElementById("submitScreen");
			e.style.display = "block";
		}
		function hideSubmitScreen(){
			var e = document.getElementById("submitScreen");
			e.style.display = "none";
		}
		function getPassword(){
			return document.getElementById("passwordInput").value;
		}
		function submit(){
			var req = new XMLHttpRequest();
			req.open("POST", "submitData.php", false, );
			req.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			var str = "";
			for(var i = 0; i < 13; i++){
				for(var j = 0; j < 7; j++){
					str += avails[i][j];
				}
			}
			req.send("user="+document.getElementById("nameInput").value+"&pass="+getPassword()+"&data="+str);
			console.log("sent!");
			setTimeout(()=>location.reload(true), 1000);
			
		}
	
	</script>	
	</body>
</html>
