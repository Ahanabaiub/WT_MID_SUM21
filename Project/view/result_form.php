<?php




 $name="";
 $err_name="";
 $id="";
 $err_id="";
 $gender="";
 $err_gender="";
 $sub_id="";
 $err_sub_id="";
 $marks="";
 $err_marks="" ;
 $hasError=false;
 $day = array("01","02","03","04","05","06","07","08","09","10","110","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31");
 $month = array("January","February","March","April","May","June","July","August","September","October","November","December",);
 
 if(isset($_POST["submit"])){
		if(empty($_POST["name"])){
			$hasError = true;
			$err_name="Name Required";
		}
		else if(strlen($_POST["name"]) <= 2){
			$hasError = true;
			$err_name="Name must contain >2 character";
		}
		else{
			$name = $_POST["name"];
		}
	if(empty($_POST["id"])){
			$hasError = true;
			$err_id="id Required";
		}
		else{
			$id = $_POST["id"];
		}
		if(empty($_POST["sub_id"])){
			$hasError = true;
			$err_sub_id="id Required";
		}
		else{
			$sub_id = $_POST["sub_id"];
		}if(empty($_POST["marks"])){
			$hasError = true;
			$err_marks="marks Required";
		}
		else{
			$marks = $_POST["marks"];
		}
		if(!isset($_POST["gender"])){
			$hasError = true;
			$err_gender="Gender Required";
		}
		else{
			$gender = $_POST["gender"];
		}
		if(!$hasError){
			echo "hello";
	echo $_POST["name"]."<br>";
	echo $_POST["id"]."<br>";
	echo $_POST["gender"]."<br>";
	echo $_POST["sub_id"]."<br>";
	echo $_POST["marks"]."<br>";
 		}}

?>
<html>
<head>
</head>
<body>
<form action="" method="post">
<fieldset><table>
	<tr>
	<td><h1>RESULT</h1></td>
	<td>
<table>
	<tr>
	<td>Name:</td>
	<td><input type="text" name="name"placeholder="name"value="<?php echo $name; ?>"></td>
	<td><span><?php echo $err_name; ?></span></td>
	</tr>
	<tr>
	<td>ID:</td>
	<td><input type="text" placeholder="id" name="id"value="<?php echo $id; ?>"></td>
	<td><span><?php echo $err_id; ?></span></td>
	</tr>
	<tr><td>gender:</td>
	<td>
	 <input type="radio" value="Male" <?php if($gender=="Male") echo "checked"; ?> name="gender"> Male <input name="gender"  value="Female" <?php if($gender=="Female") echo "checked"; ?>type="radio"> Female 
	 </td>
	 <td><span> <?php echo $err_gender;?> </span></td>
	</tr>
	</table>
	
	<tr><td>TEST date</td>
	<td>subject ID</td>
	<td>Obtained marks</td>
	</tr>
	<tr>
<td>
<select>
<option>Day</option>

 <?php
for($i=1;$i<=31;$i++){
echo "<option>$i</option>";
}
?>
</select>
<select>
<option>Month</option>

 <?php
$month = array("January","February","March","April","May","June","July","August","September","October","November","December",);
foreach($month as $m){
echo "<option>$m</option>";

 }
?>
</select>
<select>
<option>Year</option>

 <?php
for($y=2021;$y>=1900;$y--){
echo "<option>$y</option>";
}
?>
</select>
</td>
				<td><input type= "text" placeholder="subject id" name="sub_id"value="<?php echo $sub_id; ?>"></td>
				<td><input type="text" placeholder="obtained marks"name="marks"value="<?php echo $marks; ?>"></td>
				<td><span><?php echo $err_sub_id; ?></span></td>
				<td><span><?php echo $err_marks; ?></span></td>
				
				
	</tr>

	<tr>
	<td colspan="3" align="center"> <input type="submit" value="submit" name="submit"></td>
	</tr>
</table>
</fieldset>
</form>
</body>
</html>