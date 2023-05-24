<html>
	<?php
		include "inc/head.php";
		echo "<title>Form Registration</title>";
	?>
	<body>
		<?php
			include "inc/header.php";
			include "inc/config.php";
		?>
		
		
		
		<div class="content">
			<div style="padding: 50px;">
				<p style="float: left; font-weight: bold; font-size: 20px;">Form Registration</p><br /><br /><br />
				
				<form method="POST">
					<table width="100%">
						<tr>
							<td width="30%">
								<input class="inputTEXT" type="text" placeholder="First Name" name="fname">
							</td>
							<td width="30%">
								<input class="inputTEXT" type="text" placeholder="Middle Name" name="mname">
							</td>
							<td width="30%">
								<input class="inputTEXT" type="text" placeholder="Last Name" name="lname">
							</td>
						</tr>
					</table><br >
					<input class="inputTEXT2" type="text" placeholder="Address" name="addr"><br /><br />
					<p style="float: left; font-weight: bold; font-size: 20px;">Choose Programe</p><br /><br /><br /><br />
					<select name="programe">
						<option>Civil</option>
						<option>Computer</option>
						<option>Software</option>
						<option>Electric</option>
					</select>
					<br /><br />
					<input class="submitReg" type="submit" name="reg">
				</form>
				
				<?php
		
			session_start(); 
			if (isset($_POST['reg'])){
				$f_name = mysqli_real_escape_string($con, $_POST['fname']);
				$m_name = mysqli_real_escape_string($con, $_POST['mname']);
				$l_name = mysqli_real_escape_string($con, $_POST['lname']);
				$address = mysqli_real_escape_string($con, $_POST['addr']);
				$programe = mysqli_real_escape_string($con, $_POST['programe']);
				
				
				if($f_name == "" || $l_name == "" || $address == "" || $programe == ""){
					echo "
					
					<script>
						alert('Must fill every fields!');
					</script>
					
					";
				} else {
					mysqli_query($con,"INSERT INTO `student` (first_name, middle_name, last_name, address, programe, total_qn) VALUES ('$f_name', '$m_name', '$l_name', '$address', '$programe', '5')");
				
				echo "You form is successfully registered!<br />";
				
				//get data from database for symbole
				$sql = "SELECT * FROM student WHERE first_name = '$f_name'";
				$result = mysqli_query($con, $sql);
					if(mysqli_num_rows($result) > 0){
						while($row = mysqli_fetch_assoc($result)){
							$id = $row['std_ID'];
						}
					}
				//symbol no alogrithm
				$symbol = 2394308 + $id;
				mysqli_query($con,"UPDATE student SET symbolNO = '$symbol' WHERE first_name = '$f_name'");
				
				//get data from database for symbole
				$sql1 = "SELECT * FROM student WHERE first_name = '$f_name'";
				$result1 = mysqli_query($con, $sql1);
					if(mysqli_num_rows($result1) > 0){
						while($row1 = mysqli_fetch_assoc($result1)){
							$get_sym = $row1['symbolNO'];
						}
					}
				
				echo "Your Symbol Number is: ";
				echo "<font color='red'><b>".$get_sym."</b></font>";
				}
				
			}
		?>
				
				
			</div>
		</div>
		
		<div style="background: #071729; color: white; padding: 10px">
			<center><p>Copyrigh @ 2019 | Pokhara University</p></center>
		</div>
	</body>
</html>