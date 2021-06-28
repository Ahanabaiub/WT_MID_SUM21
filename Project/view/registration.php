<?php
    $first_name = "";
    $err_fname = "";

    $last_name = "";
    $err_lname = "";

    $father_name = "";
    $err_fatherName = "";

    $mother_name = "";
    $err_motherName = "";

    $email = "";
    $err_email = "";

    $phone = "";
    $err_phone = "";

    $gPhone = "";
    $err_gPhone = "";

    $gpa = "";
    $err_gpa = "";

    $pAddress = "";
    $err_pAddress = "";

    $prAddress = "";
    $err_prAddress ="";

    $gender = "";
    $err_gender = "";

    $bloodgroup="";
	$err_bloodgroup="";

    $department="";
	$err_department="";

    $day = "";
    $month = "";
    $year = "";
    $err_birthDay = "";

    $hasError = false;

    $months = array("January","February","March","April","May","June","July","August","September","October","November","December");
    $departments = array("Science","Commerce","Arts");

     //Check if a string contains numbers or not
     function isNumberExist($value){

        $len = strlen($value);

        for($i=0; $i<$len; $i++){
            if(is_numeric($value[$i])){
               return true;
            }
        }

        return false;
    }

    if(isset($_POST["submit"])){

        if(empty($_POST["first_name"])){
            $hasError = true;
            $err_fname = "First Name Required.";
        }
        else if(isNumberExist($_POST["first_name"])){
            $hasError = true;
            $err_fname = "Cannot Contain Numbers.";

        }
        else{
            $first_name = htmlspecialchars($_POST["first_name"]);
        }

        if(empty($_POST["last_name"])){
            $hasError = true;
            $err_lname = "Last Name Required.";
        }
        else if(isNumberExist($_POST["last_name"])){
            $hasError = true;
            $err_lname = "Cannot Contain Numbers.";

        }
        else if(strpos($_POST["last_name"]," ")){
            $hasError = true;
            $err_lname = "Space Not Allowed.";

        }
        else{
            $last_name = htmlspecialchars($_POST["last_name"]);
        }


        ///fathers name validation
        if(empty($_POST["father_name"])){
            $hasError = true;
            $err_fatherName = "Father's Name Required.";
        }
        else if(isNumberExist($_POST["father_name"])){
            $hasError = true;
            $err_fatherName = "Cannot Contain Numbers.";

        }
        else{
            $father_name = htmlspecialchars($_POST["father_name"]);
        }

        //mothers name validation
        if(empty($_POST["mother_name"])){
            $hasError = true;
            $err_motherName = "Mothe's Name Required.";
        }
        else if(isNumberExist($_POST["mother_name"])){
            $hasError = true;
            $err_motherName = "Cannot Contain Numbers.";

        }
        else{
            $mother_name = htmlspecialchars($_POST["mother_name"]);
        }

        //email validation
        if(empty($_POST["email"])){
            $hasError = true;
            $err_email = "Email Required.";
        }
        else if(!strpos($_POST["email"],"@")){
            $hasError = true;
            $err_email = "Must Contain '@' .";

        }
        else if(!strpos($_POST["email"],".",strpos($_POST["email"],"@")+1)){
            $hasError = true;
            $err_email = "Must contain '.' after '@' .";

        }
        else{
            $email = htmlspecialchars($_POST["email"]);
        }

        //phone number validation
        if(empty($_POST["phone"])){
            $hasError = true;
            $err_phone = "Phone Number Required.";
        }
        else if(!is_numeric($_POST["phone"])){
            $hasError = true;
            $err_phone = "Phone Number Must be a number";
        }   
        else{
            $phone = $_POST["phone"];
        }

         //Gurdians phone number validation
         if(empty($_POST["gPhone"])){
            $hasError = true;
            $err_gPhone = "Gurdians Phone Number Required.";
        }
        else if(!is_numeric($_POST["gPhone"])){
            $hasError = true;
            $err_gPhone = "Phone Number Must be a number";
        }
        else{
            $gPhone = $_POST["gPhone"];
        }

        ///GPA
        if(empty($_POST["gpa"])){
            $hasError = true;
            $err_gpa = "SSC GPA Required.";
        }
        else if(!is_numeric($_POST["gpa"])){
            $hasError = true;
            $err_gpa = "GPA Must be a number";
        }
        else if($_POST["gpa"]>5){
            $hasError = true;
            $err_gpa = "Maximum 5.00";
        }
        else{
            $gpa = $_POST["gpa"];
        }

        //present address
        if(empty($_POST["pAddress"])){
            $hasError = true;
            $err_pAddress = "Present Address Required.";
        }
        else{
            $pAddress = htmlspecialchars($_POST["pAddress"]);
        }

          //prmanent address
          if(empty($_POST["prAddress"])){
            $hasError = true;
            $err_prAddress= "Present Address Required.";
        }
        else{
            $prAddress = htmlspecialchars($_POST["prAddress"]);
        }


         //Gender Validation
         if(!isset($_POST["gender"])){
			$hasError = true;
			$err_gender="Gender Required";
		}
		else{
			$gender = $_POST["gender"];

        }

        //DOB validation
        if (!isset($_POST["day"])){
			$hasError = true;
			$err_birthDay = "Select A Day.";
		}
		else{
			$day = $_POST["day"];
		}

        if (!isset($_POST["month"])){
			$hasError = true;
			$err_birthDay = "Select A Month.";
		}
		else{
			$month = $_POST["month"];
		}

        if (!isset($_POST["year"])){
			$hasError = true;
			$err_birthDay = "Select A Year.";
		}
		else{
			$year = $_POST["year"];
		}

        //Blood Group
        if(!isset($_POST["bloodgroup"])){
			$hasError = true;
			$err_bloodgroup="Blood Group Required.";
		}
		else{
			$bloodgroup = $_POST["bloodgroup"];
		}


        //Departments validation
        if (!isset($_POST["department"])){
			$hasError = true;
			$err_department="Department Required.";
		}
		else{
			$department = $_POST["department"];
		}


    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
</head>
<body>
<h1>RDBMS College Bangladesh</h1>
    <a href="homePage.php">Home</a>
    <hr>
    <h1>Registration Form</h1>
    <form action="" method="post">
        <fieldset>
                <table>
                    <tr>
                        <td>First Name</td>
                        <td>: <input type="text" name="first_name" value="<?php echo $first_name; ?>"></td>
                        <td><span> <?php echo $err_fname; ?></span></td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td>: <input type="text" name="last_name" value="<?php echo $last_name; ?>"></td>
                        <td><span> <?php echo $err_lname; ?></span></td>
                    </tr>
                    <tr>
                        <td>Father's Name</td>
                        <td>: <input type="text" name="father_name" value="<?php echo $father_name; ?>"></td>
                        <td><span> <?php echo $err_fatherName; ?></span></td>
                    </tr>
                    <tr>
                        <td>Mother's Name</td>
                        <td>: <input type="text" name="mother_name" value="<?php echo $mother_name; ?>"></td>
                        <td><span> <?php echo $err_motherName; ?></span></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>: <input type="text" name="email" value="<?php echo $email; ?>"></td>
                        <td><span><?php echo $err_email; ?> </span></td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td>: <input type="text" name="phone" value="<?php echo $phone; ?>"></td>
                        <td><span><?php echo $err_phone; ?> </span></td>
                    </tr>
                    <tr>
                        <td>Gurdian's Phone Number</td>
                        <td>: <input type="text" name="gPhone" value="<?php echo $gPhone; ?>"></td>
                        <td><span><?php echo $err_gPhone; ?> </span></td>
                    </tr>
                    <tr>
                        <td>GPA(SSC)</td>
                        <td>: <input type="text" name="gpa" placeholder="5.00" value="<?php echo $gpa; ?>"></td>
                        <td><span><?php echo $err_gpa; ?> </span></td>
                    </tr>
                    <tr>
                        <td>Present Address</td>
                        <td>: <input type="text" name="pAddress" placeholder="Address" value="<?php echo $pAddress; ?>"></td>
                        <td><span><?php echo $err_pAddress; ?> </span></td>
                    </tr>
                    <tr>
                        <td>Permanent Address</td>
                        <td>
                            : <input type="text" name="prAddress" placeholder="Address" value="<?php echo $prAddress; ?>">
                        </td>
                        <td><span><?php echo $err_prAddress; ?> </span></td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>
                            : <input type="radio" name="gender" value="Male" <?php if($gender=="Male") echo "checked"; ?> name="gender">Male
                            <input type="radio" name="gender" <?php if($gender=="Female") echo "checked"; ?> value="Female" type="radio">Female
                         </td>
                        <td><span> <?php echo $err_gender;?> </span></td>
				    </tr>
                    <tr>
                        <td>Birth Date</td>
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
                            <b> - </b>
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
                            <b> - </b>
                            <select name="year">
                                <option disabled selected>Year</option>
                                <?php
                                    for($i = 2021; $i>=1950; $i--){
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
                        <td><span><?php echo $err_birthDay; ?> </span></td>
                    </tr>
                    <tr>
                        <td>Department</td>
                        <td>: <select name="department">
                            <option disabled selected>--Select Department--</option>
                            <?php
                                foreach($departments as $d){
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
                        <td>Blood Group</td>
                        <td>: <input type="radio" value="A+" <?php if($bloodgroup=="A+") echo "checked"; ?> name="bloodgroup"> A+ <input name="bloodgroup" <?php if($bloodgroup=="B+") echo "checked"; ?> value="B+" type="radio"> B+ <input name="bloodgroup" <?php if($bloodgroup=="O+") echo "checked"; ?> value="O+" type="radio"> O+<input name="bloodgroup" <?php if($bloodgroup=="AB+") echo "checked"; ?> value="AB+" type="radio"> AB+ </td>
                        <td><span> <?php echo $err_bloodgroup;?> </span></td>
				    </tr>
                    <tr>
					    <td colspan="2" align="right"><input type="submit" name="submit" value="Submit"></td>
					
				    </tr>
                </table>    
        </fieldset>
    </form>
    
</body>
</html>