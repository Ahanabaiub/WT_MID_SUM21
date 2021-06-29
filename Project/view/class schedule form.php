<?php

$bio="";
$err_bio="";
$time1="";
$err_time1="";
$subject1="";
$err_subject1="";
$time2="";
$err_time2="";
$subject2="";
$err_subject2="";
$time3="";
$err_time3="";
$subject3="";
$err_subject3="";
$haserr=false;

$time1=array("8.00-10.00","10.00-12.00","12.00-2.00");
$time2=array("8.00-10.00","10.00-12.00","12.00-2.00");
$time3=array("8.00-10.00","10.00-12.00","12.00-2.00");
if(isset ($_POST["publish"])){
	if(empty($_POST["subject1"])){
		$haserr=true;
		$err_subject1="subject1 not valid";
	
	}else{ $subject1=$_POST["subject1"];}
	if(empty($_POST["subject2"])){
		$haserr=true;
		$err_subject2="subject2 not valid";
	}else{ $subject2=$_POST["subject2"];}
	if(empty($_POST["subject3"])){
		$haserr=true;
		$err_subject3="subject3 not valid";
	}else{ $subject3=$_POST["subject3"];}
	if(empty($_POST["bio"])){
		$haserr=true;
		$err_bio="bio not valid";
	}else{ $bio=$_POST["bio"];}
	if(empty($_POST["time1"])){
		$haserr=true;
		$err_time1="time1 not valid";
	
	}else{ $time1=$_POST["time1"];}
	if(empty($_POST["time2"])){
		$haserr=true;
		$err_time2="time2 not valid";
	
	}else{ $time2=$_POST["time2"];}
	
	
	if(!$haserr){
		echo $_POST["bio"];
	echo $_POST["time1"];
	echo $_POST["subject1"]."<br>";
	echo $_POST["time2"];
	echo $_POST["subject2"]."<br>";
	echo $_POST["time3"];
	echo $_POST["subject3"]."<br>";
	}
	
}

?>
<html>
	<head>
	</head>
	<body>
		<form action="" method="post">
		<fieldset>
		<table>
			<tr>
				<td colspan="4" align="center"><h1>CLASS ROUTINE OF</h1><td>
				<td colspan="6"><h1> <textarea name="bio"><?php echo $bio; ?></textarea></h1></td>
			</tr>
			<tr>
				<td align = "center">TIME</td>
				<td>CLASS_1</td>
				<td align = "center">TIME</td>
				<td>CLASS_2</td>
				<td align = "center">TIME</td>
				<td>CLASS_3</td>
			</tr>
			<tr>
				<td><select  name="time1">
				<option selected disabled>select time</option>
				<?php
				foreach($time__1 as $t1){
					if ($t1 == $time1 )
					echo "<option selected> $t1</option>";
				else "<option>$t1</option>";
				}
				?>
				
						</select>
				</td>
				<td><input type="text" name="subject1" placeholder="enter your subject"value="<?php echo $subject1; ?>"></td>
				<td><select  name="time2">
				<option selected disabled>select time</option>
				<?php
				foreach($time2 as $t2){
					if($t2==$time2)
					echo "<option selected> $t2</option>";
				else echo"<option>$t2<option>";
				}
				?>
				
						</select>
				</td>
				<td><input type="text" name="subject2" placeholder="enter your subject"value="<?php echo $subject2; ?>"></td>
				<td><select  name="time3">
				<option selected disabled>select time</option>
				<?php
				foreach($time3 as $t3){
					echo "<option> $t3</option>";
				}
				?>
				
				
						</select>
				</td>
				<td><input type="text" name="subject3" placeholder="enter your subject"value="<?php echo $subject3; ?>"></td>
				<td><span><?php echo $err_subject1; ?></span></td>
				<td><span><?php echo $err_subject2; ?></span></td>
				<td><span><?php echo $err_subject3; ?></span></td>
				<td><span><?php echo $err_bio; ?></span></td>
				<td><span> <?php echo $err_time1;?> </span></td>
				<td><span> <?php echo $err_time2;?> </span></td>
			
				
			</tr>
			
			<tr>
			<td colspan="6" align="center">
			<input type="submit" value="submit" name="publish">
			</td>
			</tr>
		</table>
		</fieldset>
		</form>
	</body>
</html>