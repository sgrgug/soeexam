<html>
	<?php
		include "inc/head.php";
		include "inc/config.php";
		echo "<title>Take Exam</title>";
	?>
	<body>
		<div style="background: white;">
			<center><img src="img/pu_logo.png" width="180" height="50"></center>
		</div>
		<div class="content">
		<p style="float: left; font-weight: bold; font-size: 20px;">INSTRUCTION</p><br /><br /><br />
		<div style="padding-left: 40px;">
			<ul>
				<li>Students are responsible for keeping themselves informed about Regulations relating to studies and examinations at The University of Stavanger and other instructions relevant to their exam.</li>
				<li>Randum sentence for rules and regulation that student can do and can't do during exam. All student must follow our rules and regulatin otherwise we will expell you.</li>
				<li>Students are responsible for keeping themselves informed about exam dates, as well as the time and place of the examination.</li>
				<li>Randum sentence for rules and regulation that student can do and can't do during exam. All student must follow our rules and regulatin otherwise we will expell you.</li>
				<li>Candidates must be present in the exam room at least 30 minutes before the exam starts. If students arrive later than this when they have a digital exam, they will not be granted extra time if they do not get logged in on time for when the exam starts.</li>
				<li>During digitals exams, candidates must have their own laptop, cf. Regulations on payment for universities and colleges ยง 3-3 (3). Candidates are required to prepare their machine in advance of the exam. The machine must be of recent date and updated so that it can be used for exam completion.</li>
				<li>The University does not assume responsibility for damage to the candidate's own PC, any associated equipment, data or software for use during the course of the examination or while the equipment is in UiS's premises. The University is not responsible for loss of text / data due to power failure or malfunction of the machine. The candidate must make sure to take the necessary backup himself.</li>
			</ul>
		</div>
		<div style="padding: 100px;">
			<form method="GET">
				<input type="text" class="inputTEXT2" placeholder="Symbol Number" name="iSym"><br /><br />
				<center><input style="background: red; border: 0px; width: 100%; color: white; padding: 10px; font-weight: bold;" type="submit" value="Start" name="start"></center>
			</form>
			
			<?php
				if(isset($_GET['start'])){
					$input_sym = mysqli_real_escape_string($con, $_GET['iSym']);
					if($input_sym == ""){
						echo "
							<script>
								alert('Enter your symbol number.');
							</script>
					
					";
					}else{
						//get data from database for symbole
						$query = mysqli_query($con,"SELECT symbolNO FROM student WHERE symbolNO='$input_sym'");
						
						if(mysqli_num_rows($query) != 0){
							header('location:startExam.php?sym_no='.$input_sym);
						}else{
							echo "Invlid Symbol Number";
						}
						
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