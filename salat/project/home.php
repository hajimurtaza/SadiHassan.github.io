<?php
	// We need to use sessions, so you should always start sessions using the below code.
	session_start();
	// If the user is not logged in redirect to the login page...
	if (!isset($_SESSION['loggedin'])) {
		header('Location: index.html');
		exit();
	}    
	if(isset($_POST['SubmitButton'])){ //check if form was submitted
		$matrix = $_POST['matrix']; //get input text
		//print_r($matrix);
		/*
		$token = strtok($matrix, ",");
		while($token !== false){
			print_r($token);
			$token = strtok($token, ",");
		}
		*/
		$matrix_splitted = explode(",", $matrix);
		//print_r($matrix_splitted);
		for($i = 0 ; $i < )
	}
	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	
	<style>
		
		.box {
		  background-color: #DDE1E6;
		  color: #00f;
		  border-radius: 0.2em;
		  padding: 0em;
		  margin-bottom: 25%;
		  font-size: 0.8em;
		  height: 1em;
		  width: 1em;
		}
		
		.box:hover{
		  background-color: #9DAEB5;	
		}

		.box:hover > #date {
    		color: red;
		}

		.wrapper {
		  width: 60%;
		  height: 700px; /* When I put height = 10%, scroll doesn't show-up. How to put height so that it will behave dynamically?*/
		  display: grid;
		  grid-column-gap: 1%;
		  grid-row-gap: 0%;
		  /*grid-template-columns: repeat(6, 5%);*/
		  grid-template-columns: 7% 5% 5% 5% 5% 5%;
		  grid-auto-flow: row;
		  overflow: scroll;
		  scroll-behavior: smooth;
		}

		#date{
			margin-top: 10%;
			color: #6C6B68;
			font-family: sans-serif;
			font-size: 0.8em;
			font-weight: 400;
		}
	</style>
	
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>Salat Diary</h1>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			<h2>Profile of <?=$_SESSION['name']?></h2>
			<!--<p>Welcome back, <?=$_SESSION['name']?>!</p>-->
		
		</div>
		<form action="" method="post"> 
			<input type="text" id="matrix" name="matrix">
			<input type="submit" value="Save" name="SubmitButton"> 
		</form> 
	
	<script>
		let root_div = document.createElement("div");
		let box_last_id = 0;
		let top_max = -1;
		let top_min = 10000;
		let date = new Date();
		let random_number = Math.random() * 100;
		let date_backward = new Date();
		let matrix;
		let cur_row = 0;

		function addSalat(id){
			let background_color = document.getElementById(""+id).style.background;
			console.log('color: ' + background_color);
			if(background_color == '')
				background_color = 'rgb(129, 225, 120)';
			else if(background_color == 'rgb(129, 225, 120)')
				background_color = 'green';
			else
				background_color = '';
			document.getElementById(id).style.background = background_color;
		}
		
		function getMonthEng(d){
			d += 1
			if(d == 1) return "Jan";
			if(d == 2) return "Feb";
			if(d == 3) return "Mar";
			if(d == 4) return "Apr";
			if(d == 5) return "May";
			if(d == 6) return "Jun";
			if(d == 7) return "Jul";
			if(d == 8) return "Aug";
			if(d == 9) return "Sep";
			if(d == 10) return "Oct";
			if(d == 11) return "Nov";
			if(d == 12) return "Dec";
			return "InvalidDate";
		}
		
		
		
		window.onload = function(){
			matrix = Array();
			let container = document.getElementsByClassName("content");
			date.setDate( date.getDate() - 1 );
			root_div.classList.add("wrapper");
			root_div.id = "wrapper_id";
			
			root_div.onscroll = function(){ setTimeout(scrollAction, 500); }
			
			container[0].appendChild(root_div);
			
			
			for(let row = 0; row < 35; row++){ //Initially amximum 15 rows are visible before scrolling
				let arr = Array();
				let date_div = document.createElement("div");
				date.setDate( date.getDate() + 1 )
				date_div.innerHTML = getMonthEng(date.getMonth()) + "/" + date.getDate();
				date_div.id = "date";
				root_div.appendChild(date_div);
				
				random_number = Math.random() * 100;
				arr.push("" + date); // Sadi: if date object is passed instead of date as a string, the latest date always been appended!!! Why???
				//arr.push(random_number);
				
				for(let col = 1; col <= 5; col++){ // column for 5 times pray
					let div = document.createElement("div");
					div.classList.add("box");
					div.id = "" + (row * 5 + col);
					box_last_id = (row * 5 + col);
					div.innerHTML = ""; // + (row * 5 + col);
					arr.push(0);
					root_div.appendChild(div);
					
					div.onclick = function(){
						addSalat(div.id); //HOW div.id is accessible from inside function() scope?
						matrix[row][col] = (matrix[row][col] + 1) % 3;
						document.getElementById("matrix").value = matrix;
						//alert(matrix[row][col]);
					};
				}
				matrix.push(arr);
				cur_row = row;
				document.getElementById("matrix").value = matrix;
			}
			root_div.scrollTop = 50;
			
			//console.log(matrix);
			
		}
		
		let scrollAction = function(){
			
			let root_div = document.getElementById('wrapper_id')
			
			let new_row = 0;
			
			if(root_div.scrollTop > top_max){
				top_max = root_div.scrollTop;
				cur_row++;
				let arr = Array();
				for(let col = 1; col <= 5; col++){
					let div = document.createElement("div");
					div.classList.add("box");
					box_last_id++;
					div.id = "" + box_last_id;
					//div.innerHTML = div.id;
					if(box_last_id % 5 == 1){
						let date_div = document.createElement("div");
						date.setDate( date.getDate() + 1 )
						arr.push("" + date);
						date_div.id = "date";
						date_div.innerHTML = getMonthEng(date.getMonth()) + "/" + date.getDate();
						root_div.appendChild(date_div);
					}
					else {
						arr.push(0);
					}
					
					root_div.appendChild(div);
					div.onclick = function(){
						addSalat(div.id); //HOW div.id is accessible from inside function() scope?
						col = div.id % 5;
						row = Math.floor(div.id / 5);
						//console.log(row + " " + col);
						matrix[row][col] = (matrix[row][col] + 1) % 3;
						document.getElementById("matrix").value = matrix;
					};
				}
				matrix.push(arr);
			}
			document.getElementById("matrix").value = matrix;
			//console.log(matrix);
		}
		
	</script>	
	</body>
</html>