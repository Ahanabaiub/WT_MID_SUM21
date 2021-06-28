<?php
       $coursename="";
	   $err_coursename="";
	   $courseid="";
	   $err_courseid="";
       $day = "";
       $month = "";
       $year = "";
       $err_date = "";
	   $department="";
	   $err_department="";
	   $year="";
	   $err_year="";
	   $session="";
	   $err_session="";	
	   $examinationtype="";
	   $err_examinationtype="";	
	   $time="";
	   $err_time="";
	   $duration="";
	   $err_duration="";
	   $mark="";
	   $err_mark="";
	   $room="";
	   $err_room="";
	
	   $hasError=false;
	
	   $array= array("Science","BusienssAdministration","Arts");
	   $months = array("January","February","March","April","May","June","July","August","September","October","November","December");
	   $session= array("2018-2019","2019-2020","2020-2021");
	   $coursename= array("Bangla","English","Math","Botany","Zoology","Finance","Accounting","SocialScience","Islam");
	   $courseid= array("1001","1002","1003","1004","1005");
	   $room= array("501","502","503","504","505");
	
	if(isset($_POST["submit"])){
		
		if (!isset($_POST["coursename"])){
			$hasError = true;
			$err_coursename="course name Required";
		}
		else{
			$coursename = $_POST["coursename"];
		}
		if (!isset($_POST["courseid"])){
			$hasError = true;
			$err_courseid="Course id Required";
		}
		else{
			$courseid = $_POST["courseid"];
		}
		
		if (!isset($_POST["day"])){
			$hasError = true;
			$err_date = "Select A Day.";
		}
		else{
			$day = $_POST["day"];
		}

        if (!isset($_POST["month"])){
			$hasError = true;
			$err_date = "Select A Month.";
		}
		else{
			$month = $_POST["month"];
		}

        if (!isset($_POST["year"])){
			$hasError = true;
			$err_date = "Select A Year.";
		}
		else{
			$year = $_POST["year"];
		}
		
		if (!isset($_POST["department"])){
			$hasError = true;
			$err_department="department Required";
		}
		else{
			$department = $_POST["department"];
		}
		
		if(!isset($_POST["year"])){
			$hasError = true;
			$err_year="year Required";
		}
		else{
			$year = $_POST["year"];
		}
		
		if (!isset($_POST["session"])){
			$hasError = true;
			$err_session="session Required";
		}
		else{
			$session = $_POST["session"];
		}
		
		if(!isset($_POST["examinationtype"])){
			$hasError = true;
			$err_examinationtype="examinationtype Required";
		}
		else{
			$examinationtype = $_POST["examinationtype"];
		}
		if(empty($_POST["time"])){
			$hasError = true;
			$err_time="Time Required";
		}
		
		if(!isset($_POST["duration"])){
			$hasError = true;
			$err_duration="duration Required";
		}
		else{
			$duration = $_POST["duration"];
		}
		if(!isset($_POST["mark"])){
			$hasError = true;
			$err_year="mark Required";
		}
		else{
			$year = $_POST["mark"];
		}
		if (!isset($_POST["room"])){
			$hasError = true;
			$err_room="room Required";
		}
		else{
			$room = $_POST["room"];
		}
		
		if(!$hasError){
			echo "<h1>Form submitted</h1>";
			echo $_POST["coursename"]."<br>";
			echo $_POST["courseid"]."<br>";
			echo $day." ".$month." ".$year." "."<br>";	
			echo $_POST["department"]."<br>";
			echo $_POST["year"]."<br>";
			echo $_POST["session"]."<br>";
			echo $_POST["examinationtype"]."<br>";
			echo $_POST["time"]."<br>";
			echo $_POST["duration"]."<br>";
			echo $_POST["mark"]."<br>";
			echo $_POST["room"]."<br>";
			
		}
		
	}
	
?>
<html>
	<head></head>
	<body>
		<form action="" method="post">
		<fieldset>

			<table>
			<tr>
					<td>Course Name</td>
					<td>: <select name="coursename">
						<option disabled selected>--Select Course Name--</option>
						<?php
							foreach($coursename as $c){
								if($c == $coursename) 
									echo "<option selected>$c</option>";
								else
									echo "<option>$c</option>";
							}
						?>
						</select>
					</td>
					<td><span> <?php echo $err_coursename;?> </span></td>
				</tr>	
				<tr>
					<td>Course Id</td>
					<td>: <select name="courseid">
						<option disabled selected>--Choose Course Id--</option>
						<?php
							foreach($courseid as $s){
								if($s == $courseid) 
									echo "<option selected>$s</option>";
								else
									echo "<option>$s</option>";
							}
						?>
						</select>
					</td>
					<td><span> <?php echo $err_courseid;?> </span></td>
				</tr>	
				
			<tr>
                        <td>Date</td>
                        <td>
                            : <select name="day">
                                <option disabled selected>Day</option>
                                <?php
                                    for($i = 1; $i<=31; $i++){
                                       if($day == $i){
                                        echo "<option selected>$i</option>";
                                       }else{
                                            echo "<option>$i</option>";
                                       }
                                    }
                                ?>
                            </select>
                            <select name="month">
                                <option disabled selected>Month</option>
                                <?php
                                   foreach($months as $m){
                                    if($month == $m){
                                        echo "<option selected>$m</option>";
                                       }
                                       else{
                                            echo "<option>$m</option>";
                                       }
                                   }
                                ?>
                            </select>
                            <select name="year">
                                <option disabled selected>Year</option>
                                <?php
                                    for($i = 2021; $i>=1970; $i--){
                                        if($year == $i){
                                                echo "<option selected>$i</option>";
                                           }
                                           else{
                                                echo "<option>$i</option>";
                                           }
                                    }
                                ?>
                            </select>
                        </td>
                        <td><span><?php echo $err_date; ?> </span></td>
                    </tr>
				
				<tr>
					<td>Department</td>
					<td>: <select name="department">
						<option disabled selected>--Select Department--</option>
						<?php
							foreach($array as $d){
								if($d == $department) 
									echo "<option selected>$d</option>";
								else
									echo "<option>$d</option>";
							}
						?>
						</select>
					</td>
					<td><span> <?php echo $err_department;?> </span></td>
				</tr>	
				<tr>
					<td>Year</td>
					<td>: <input type="radio" value="First" <?php if($year=="First") echo "checked"; ?> name="year"> First <input name="year" <?php if($year=="Second") echo "checked"; ?> value="Second" type="radio"> Second </td>
					<td><span> <?php echo $err_year;?> </span></td>
				</tr>	
				<tr>
					<td>Session</td>
					<td>: <select name="session">
						<option disabled selected>--Select Session--</option>
						<?php
							foreach($session as $s){
								if($s == $session) 
									echo "<option selected>$s</option>";
								else
									echo "<option>$s</option>";
							}
						?>
						</select>
					</td>
					<td><span> <?php echo $err_session;?> </span></td>
				</tr>
				<tr>
					<td>Examination Type</td>
					<td>: <input type="radio" value="FirstTerm" <?php if($examinationtype=="FirstTerm") echo "checked"; ?> name="examinationtype"> FirstTerm <input name="examinationtype" <?php if($examinationtype=="SecondTerm") echo "checked"; ?> value="SecondTerm" type="radio"> SecondTerm <input name="examinationtype" <?php if($examinationtype=="FinalTerm") echo "checked"; ?> value="FinalTerm" type="radio"> FinalTerm </td>
					<td><span> <?php echo $err_examinationtype;?> </span></td>
				</tr>
				
				<tr>
					<td>Time</td>
					<td>: <input type="text" name="time" value="<?php echo $time; ?>" placeholder="Enter Time "> </td>
					<td><span> <?php echo $err_time;?> </span></td>
				</tr>
				
				<tr>
					<td>Duration</td>
					<td>: <input type="radio" value="1 Hour" <?php if($duration=="1 Hour") echo "checked"; ?> name="duration"> 1 Hour <input name="duration" <?php if($duration=="2 Hour") echo "checked"; ?> value="2 hour" type="radio"> 2 Hour   <input name="duration" <?php if($duration=="3 Hour") echo "checked"; ?> value="3 hour" type="radio"> 3 Hour</td>
					<td><span> <?php echo $err_duration;?> </span></td>
				</tr>	
				
				<tr>
					<td>Mark</td>
					<td>: <input type="radio" value="50" <?php if($mark=="50") echo "checked"; ?> name="mark"> 50 <input name="mark" <?php if($mark=="100") echo "checked"; ?> value="100" type="radio"> 100 </td>
					<td><span> <?php echo $err_mark;?> </span></td>
				</tr>	
				<tr>
					<td>Room</td>
					<td>: <select name="room">
						<option disabled selected>--Select Room--</option>
						<?php
							foreach($room as $r){
								if($r == $room) 
									echo "<option selected>$r</option>";
								else
									echo "<option>$r</option>";
							}
						?>
						</select>
					</td>
					<td><span> <?php echo $err_room;?> </span></td>
				</tr>	
				<tr>
					<td colspan="2" align="right"><input type="submit" name="submit" value="Submit"></td>
					
				</tr>
			</table>
		</fieldset>
		</form>
	</body>
</html>