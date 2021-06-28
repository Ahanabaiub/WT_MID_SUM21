<?php
	$teacherrecentname="";
	$err_teacherrecentname="";
	$teacherupdatename="";
	$err_teacherupdatename="";
	
	$studentrecentname="";
	$err_studentrecentname="";
	$studentupdatename="";
	$err_studentupdatename="";
	
	$employeerecentname="";
	$err_employeerecentname="";
	$employeeupdatename="";
	$err_employeeupdatename="";
	$teacherid="";
	$err_teacherid="";
	$studentid="";
	$err_studentid="";
	$employeeid="";
	$err_employeeid="";
	$email = "";
    $err_email = "";
	$code = "";
    $phoneNumber = "";
    $err_phoneNumber = "";
	$address = "";
    $city = "";
    $state = "";
    $zipCode = "";
    $err_address = "";
	
	$hasError=false;
	
	if(isset($_POST["submit"])){
		if(empty($_POST["teacherrecentname"])){
			$hasError = true;
			$err_teacherrecentname="Recent Name Required";
		}
		else if(strlen($_POST["teacherrecentname"]) <= 2){
			$hasError = true;
			$err_name="Recent Name must contain >2 character";
		}
		else{
			$name = $_POST["teacherrecentname"];
		}
		if(empty($_POST["teacherupdatename"])){
			$hasError = true;
			$err_teacherupdatename="update Name Required";
		}
		else if(strlen($_POST["teacherupdatename"]) <= 2){
			$hasError = true;
			$err_name="Update Name must contain >2 character";
		}
		else{
			$name = $_POST["teacherupdatename"];
		}
		
		if(empty($_POST["studentrecentname"])){
			$hasError = true;
			$err_studentrecentname="Recent Name Required";
		}
		else if(strlen($_POST["studentrecentname"]) <= 2){
			$hasError = true;
			$err_name="Recent Name must contain >2 character";
		}
		else{
			$name = $_POST["studentrecentname"];
		}
		if(empty($_POST["studentupdatename"])){
			$hasError = true;
			$err_studentupdatename="update Name Required";
		}
		else if(strlen($_POST["studentupdatename"]) <= 2){
			$hasError = true;
			$err_name="Update Name must contain >2 character";
		}
		else{
			$name = $_POST["studentupdatename"];
		}
		
		if(empty($_POST["employeerecentname"])){
			$hasError = true;
			$err_employeerecentname="Recent Name Required";
		}
		else if(strlen($_POST["employeerecentname"]) <= 2){
			$hasError = true;
			$err_name="Recent Name must contain >2 character";
		}
		else{
			$name = $_POST["employeerecentname"];
		}
		if(empty($_POST["employeeupdatename"])){
			$hasError = true;
			$err_employeeupdatename="update Name Required";
		}
		else if(strlen($_POST["employeeupdatename"]) <= 2){
			$hasError = true;
			$err_name="Update Name must contain >2 character";
		}
		else{
			$name = $_POST["employeeupdatename"];
		}
		
		if(empty($_POST["teacherid"])){
			$hasError = true;
			$err_teacherid="Id Required";
		}
		else if(strlen($_POST["teacherid"]) <= 6){
			$hasError = true;
			$err_teacherid="Id must contain >8 character";
		}
		else{
			$id = $_POST["teacherid"];
		}
		
		if(empty($_POST["studentid"])){
			$hasError = true;
			$err_studentid="Id Required";
		}
		else if(strlen($_POST["studentid"]) <= 6){
			$hasError = true;
			$err_studentid="Id must contain >8 character";
		}
		else{
			$id = $_POST["studentid"];
		}
		
		if(empty($_POST["employeeid"])){
			$hasError = true;
			$err_employeeid="Id Required";
		}
		else if(strlen($_POST["employeeid"]) <= 6){
			$hasError = true;
			$err_employeeid="Id must contain >8 character";
		}
		else{
			$id = $_POST["employeeid"];
		}
		if(empty($_POST["email"])){
            $hasError = true;
            $err_email = "Email Required.";
        }
        else if(!strpos($_POST["email"],"@")){
            $hasError = true;
            $err_email = "Contain '@' .";

        }
        else if(!strpos($_POST["email"],".",strpos($_POST["email"],"@")+1)){
            $hasError = true;
            $err_email = "contain '.' after '@' .";

        }
        else{
            $email = $_POST["email"];
        }
		if(empty($_POST["code"])){
            $hasError = true;
            $err_phoneNumber = "Code Required.";

        }
        else if(!is_numeric($_POST["code"])){
            $hasError = true;
            $err_phoneNumber = "Code Must be a number";
        }
        else{
            $code = $_POST["code"];
        }

        if(empty($_POST["phoneNumber"])){
            $hasError = true;
            $err_phoneNumber = "Phone Number Required.";
        }
        else if(!is_numeric($_POST["phoneNumber"])){
            $hasError = true;
            $err_phoneNumber = "Phone Number Must be a number";
        }
        else{
            $phoneNumber = $_POST["phoneNumber"];
        }
		if(empty($_POST["address"])){
            $hasError = true;
            $err_address = "Street Address Required.";
        }
        else{
            $address = $_POST["address"];
        }

        if(empty($_POST["city"])){
            $hasError = true;
            $err_address = "City Required.";
        }
        else{
            $city = $_POST["city"];
        }

        if(empty($_POST["state"])){
            $hasError = true;
            $err_address = "State Required.";
        }
        else{
            $state = $_POST["state"];
        }

        if(empty($_POST["zipCode"])){
            $hasError = true;
            $err_address = "Zip Code Required.";
        }
        else{
            $zipCode = $_POST["zipCode"];
        }
		 
		
		if(!$hasError){
			echo "<h1>Form submitted</h1>";
			echo $_POST["teacherrecentname"]."<br>";
			echo $_POST["teacherupdatename"]."<br>";
			echo $_POST["studentrecentname"]."<br>";
			echo $_POST["studentupdatename"]."<br>";
			echo $_POST["employeerecentname"]."<br>";
			echo $_POST["employeeupdatename"]."<br>";
			echo $_POST["teacherid"]."<br>";
			echo $_POST["studentid"]."<br>";
			echo $_POST["employeeid"]."<br>";
			echo $_POST["email"]."<br>";
			echo $_POST["code"].$_POST["phoneNumber"]."<br>";
			echo $_POST["address"]." ".$_POST["city"]." ".$_POST["state"]." ".$_POST["zipCode"]."<br>";
			
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
					<td>Teacher Recent Name</td>
					<td>: <input type="text" name="teacherrecentname" value="<?php echo $teacherrecentname; ?>" placeholder="Enter Recent Name "> </td>
					<td><span> <?php echo $err_teacherrecentname;?> </span></td>
				</tr>
				<tr>
					<td>Teacher Update Name</td>
					<td>: <input type="text" name="teacherupdatename" value="<?php echo $teacherupdatename; ?>" placeholder="Enter Update Name "> </td>
					<td><span> <?php echo $err_teacherupdatename;?> </span></td>
				</tr>
				
				<tr>
					<td>Student Recent Name</td>
					<td>: <input type="text" name="studentrecentname" value="<?php echo $studentrecentname; ?>" placeholder="Enter Recent Name "> </td>
					<td><span> <?php echo $err_studentrecentname;?> </span></td>
				</tr>
				<tr>
					<td>Student Update Name</td>
					<td>: <input type="text" name="studentupdatename" value="<?php echo $studentupdatename; ?>" placeholder="Enter Update Name "> </td>
					<td><span> <?php echo $err_studentupdatename;?> </span></td>
				</tr>
				
				<tr>
					<td>Employee Recent Name</td>
					<td>: <input type="text" name="employeerecentname" value="<?php echo $employeerecentname; ?>" placeholder="Enter Recent Name "> </td>
					<td><span> <?php echo $err_employeerecentname;?> </span></td>
				</tr>
				<tr>
					<td>Employee Update Name</td>
					<td>: <input type="text" name="employeeupdatename" value="<?php echo $employeeupdatename; ?>" placeholder="Enter Update Name "> </td>
					<td><span> <?php echo $err_employeeupdatename;?> </span></td>
				</tr>
				<tr>
					<td>Teacher Id</td>
					<td>: <input type="text" name="teacherid" placeholder="Enter Teacher Id">  </td>
					<td><span> <?php echo $err_teacherid;?> </span></td>
				</tr>
				<tr>
					<td>Student Id</td>
					<td>: <input type="text" name="studentid" placeholder="Enter Student Id">  </td>
					<td><span> <?php echo $err_studentid;?> </span></td>
				</tr>
				<tr>
					<td>Employee Id</td>
					<td>: <input type="text" name="employeeid" placeholder="Enter Employee Id">  </td>
					<td><span> <?php echo $err_employeeid;?> </span></td>
				</tr>
				<tr>
                        <td>Email</td>
                        <td>: <input type="text" name="email" value="<?php echo $email; ?>"></td>
                        <td><span><?php echo $err_email; ?> </span></td>
                    </tr>
					 <tr>
                        <td>Phone</td>
                        <td>
                            : <input type="text" name="code" value="<?php echo $code; ?>" placeholder="Code">
                            - <input type="text" name="phoneNumber" value="<?php echo $phoneNumber; ?>" placeholder="Number">
                        </td>
                        <td><span><?php echo $err_phoneNumber; ?> </span></td>
                    </tr><br>
					 <tr>
                        <td>Adderss</td>
                        <td>
                            : <input type="text" name="address" value="<?php echo $address; ?>" placeholder="Street Address">
                            - <input type="text" name="city" value="<?php echo $city; ?>" placeholder="City"><br>  
							: <input type="text" name="state" value="<?php echo $state; ?>" placeholder="State">
                            - <input type="text" name="zipCode" value="<?php echo $zipCode; ?>" placeholder="Postal/Zip Code">
                        </td>
                        <td><span><?php echo $err_address; ?> </span></td>
                    </tr>					
				<tr>
					<td colspan="2" align="right"><input type="submit" name="submit" value="Submit"></td>
					
				</tr>
			</table>
		</fieldset>
		</form>
	</body>
</html>