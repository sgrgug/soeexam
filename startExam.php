<html>
	<?php
		include "inc/head.php";
		include "inc/config.php";
	?>
	<body>
		<?php
			$value = $_GET['sym_no'];
		?>
		<div style="background: white;">
			<center><img src="img/pu_logo.png" width="180" height="50"></center>
		</div>
		<div class="content">
			<div align="center" id="timer" style="color: red; font-weight: bold;"></div>
		<script>
		
			document.getElementById('timer').innerHTML = 03 + ":" + 00;
			startTimer();

			function startTimer() {
				var presentTime = document.getElementById('timer').innerHTML;
				var timeArray = presentTime.split(/[:]+/);
				var m = timeArray[0];
				var s = checkSecond((timeArray[1] - 1));
				if(s==59){m=m-1}
				//if(m<0){alert('timer completed')}
  
					document.getElementById('timer').innerHTML = m + ":" + s;
				setTimeout(startTimer, 1000);
			}

			function checkSecond(sec) {
				if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
				if (sec < 0) {sec = "59"};
				return sec;
			}
		</script>
		<div style="background: white; padding: 10px; border-radius: 5px;">
			<?php
				//get data from database for symbole
				$sql = "SELECT * FROM student WHERE symbolNO = '$value'";
				$result = mysqli_query($con, $sql);
					if(mysqli_num_rows($result) > 0){
						while($row = mysqli_fetch_assoc($result)){
							$f_name = $row['first_name'];
							$m_name = $row['middle_name'];
							$l_name = $row['last_name'];
							$address = $row['address'];
							$programe = $row['programe'];
						}
					}
					
					echo "Full Name: $f_name $m_name $l_name<br />";
					echo "Address: $address<br />";
					echo "Programe: $programe<br />";
					echo "Symbol Number: $value";
			?>
		</div><br />
		<div style="background: white; padding: 30px; border-radius: 5px;">
			<form method="POST">
				<p style="font-weight: bold;">1.What is the full form of RAM?</p>
					<select style="width: 100%; padding: 8px;" name="one">
						<option>Random Access Memory</option>
						<option>Ram Amar Milan</option>
						<option>Radio Access Machine</option>
						<option>Radius Amplitude Measure</option>
					</select> 
					
					<br /><br /><br />
				<p style="font-weight: bold;">2.What is the full form of JS?</p>
					<select style="width: 100%; padding: 8px;" name="two">
						<option>John Sena</option>
						<option>JavaScript</option>
						<option>JQuery Script</option>
						<option>Jhiley Sachin</option>
					</select> 

					<br /><br /><br />
				<p style="font-weight: bold;">3.Choose the correct statement of HTML?</p>
					<select style="width: 100%; padding: 8px;" name="three">
						<option>In traditional XHTML close tag for some element is optional but not encouraged</option>
						<option>In traditional HTML close tag for some element is optional but not encouraged</option>
						<option>None of the mentioned</option>
						<option>In both traditional XHTML and HTML close tag for some element is optional</option>
					</select> 

					
					<br /><br /><br />
				<p style="font-weight: bold;">4.Choose the correct tag for largest heading in HTML?</p>
					<select style="width: 100%; padding: 8px;" name="four">
						<option>h6</option>
						<option>heading</option>
						<option>h1</option>
						<option>head</option>
					</select> 
					
					<br /><br /><br />
				<p style="font-weight: bold;">5.Which one is not a browser?</p>
					<select style="width: 100%; padding: 8px;" name="five">
						<option>opera</option>
						<option>facebook</option>
						<option>chrome</option>
						<option>mircosoft edge</option>
					</select> 
					<br /><br />
				<input class="submitReg" type="submit" name="submit" value="Submit">
			</form>
		</div>
		
		<?php
					
			if(isset($_POST['submit'])){
				
				
			$q1 = mysqli_real_escape_string($con, $_POST['one']);
			$q2 = mysqli_real_escape_string($con, $_POST['two']);
			$q3 = mysqli_real_escape_string($con, $_POST['three']);
			$q4 = mysqli_real_escape_string($con, $_POST['four']);
			$q5 = mysqli_real_escape_string($con, $_POST['five']);
				

				
			
				//get data from database for symbole
				$sql = "SELECT * FROM student WHERE symbolNO = '$value'";
				$result = mysqli_query($con, $sql);
					if(mysqli_num_rows($result) > 0){
						while($row = mysqli_fetch_assoc($result)){
							$qnCorrect = $row['corect_qn'];
						}
					}
					
					
					$cQN = 0;
				
				
				if($q1 == "Random Access Memory"){
					$cQN++;
				}
				if($q2 == "JavaScript"){
					$cQN++;
				}
				if($q3 == "In traditional HTML close tag for some element is optional but not encouraged"){
					$cQN++;
				}
				if($q4 == "h1"){
					$cQN++;
				}
				if($q5 == "facebook"){
					$cQN++;
				}
				
					$mark = $cQN*20;
					mysqli_query($con,"UPDATE student SET corect_qn = '$cQN', marks = '$mark' WHERE symbolNO = '$value'");
					
					header('location:success.php');
					
			}
		?>
		
		</div>
		
		<div style="background: #071729; color: white; padding: 10px">
			<center><p>Copyrigh @ 2019 | Pokhara University</p></center>
		</div>
	</body>
<html>