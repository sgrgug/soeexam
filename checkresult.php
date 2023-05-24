<html>
	<?php
		include "inc/head.php";
		include "inc/config.php";
	?>
	<body>
		<?php
		?>
		<div style="background: white;">
			<center><img src="img/pu_logo.png" width="180" height="50"></center>
		</div>
		<div class="content">
		
			<center><h3 style="color: #0396cd;">Bachelor Examination Board (Pokhara University)</h3>
			<h1 style="color: #0396cd;">Engineering : Result 2019</h1></center>
		
			<div style="margin: 90px; background: #fff; padding: 10px; border-radius: 10px; border: 1px solid #d4d4d4;">
				<p style="background: #33c574; color: #fff; border-radius: 5px; padding: 10px; float: left; font-weight: bold; font-size: 20px;">Result 2019</p><br /><br /><br /><br /><br />
				<form style="margin-left: 30px;" method="POST">
					<label style="color: #a9a9a9; font-weight: bold;">Symbol Number:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
					<input style="border: 1px solid #d4d4d4; padding: 8px;" type="text" name="inSym" placeholder="Type Symbol Number">
					<label style="color: #a9a9a9;">&nbsp;&nbsp;Eg : 12013825</label><br /><br >
					<input type="submit" name="checksym" style="background: #0396cd; margin-left: 160px; border: 0px; color: white; padding: 10px;" value="Check">
				</form>
			</div>
			<?php
				if (isset($_POST['checksym'])){
					
					$symbol = mysqli_real_escape_string($con, $_POST['inSym']);
					
					//get data from database for symbole
					$sql = "SELECT * FROM student WHERE symbolNO = '$symbol'";
					$result = mysqli_query($con, $sql);
						if(mysqli_num_rows($result) > 0){
							while($row = mysqli_fetch_assoc($result)){
								$f_name = $row['first_name'];
								$m_name = $row['middle_name'];
								$l_name = $row['last_name'];
								$address = $row['address'];
								$programe = $row['programe'];
								$totalQN = $row['total_qn'];
								$corectQN = $row['corect_qn'];
								$marks = $row['marks'];
							}
						}
					
					if($marks >= 60){
						$resultQN = "Pass";
					}else{
						$resultQN = "Fail";
					}
					
					echo "<div style='margin-left: 90px; margin-right: 90px; margin-top: -70px; background: #fff; padding: 10px; border-radius: 10px; border: 1px solid #d4d4d4;'>";
					
					echo "<b style='color: #7b7b7b;'>Your Result Given Below:</b><br />";
					
					echo "<label style='color: #7b7b7b;'>Symbol number: </label>$symbol<br />";
					echo "<label style='color: #7b7b7b;'>Name: </label>$f_name $m_name $l_name<br />";
					echo "<label style='color: #7b7b7b;'>Address: </label>$address<br />";
					echo "<label style='color: #7b7b7b;'>Programe: </label>$programe<br />";
					echo "<label style='color: #7b7b7b;'>Total Question: </label>$totalQN<br />";
					echo "<label style='color: #7b7b7b;'>Correct Question: </label>$corectQN<br />";
					echo "<label style='color: #7b7b7b;'>Marks: </label>$marks<br />";
					echo "<label style='color: #7b7b7b;'>Result: </label>$resultQN<br />";
					
					echo "</div>";
					
				}
			?>
		
		</div>
	
		<div style="background: #071729; color: white; padding: 10px">
			<center><p>Copyrigh @ 2019 | Pokhara University</p></center>
		</div>
	</body>
</html>