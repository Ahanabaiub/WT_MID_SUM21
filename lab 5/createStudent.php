<?php
    //Global Variables
    $studentId;
    $err_id;

    $first_name = "";
    $err_fname = "";

    $last_name = "";
    $err_lname = "";

    $password = "";
    $err_password = "";

    $cPassword = "";
    $err_cPassword = "";

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

    $day = "";
    $month = "";
    $year = "";
    $err_birthDay = "";

    $gender = "";
    $err_gender = "";

    $hasError = false;

    $months = array("January","February","March","April","May","June","July","August","September","October","November","December");


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

    //Check if any upper case exists
    function upperCaseExist($value){
        
        $len = strlen($value);

        for($i=0; $i<$len; $i++){
            if(ctype_upper($value[$i])){
               return true;
            }
        }

        return false;

    }

    //Check if any lower case exists
    function lowerCaseExist($value){
        
        $len = strlen($value);

        for($i=0; $i<$len; $i++){
            if(ctype_lower($value[$i])){
               return true;
            }
        }

        return false;

    }

    //if form submitted
    if(isset($_POST["submit"])){

		if(empty($_POST["first_name"])){
			$hasError = true;
			$err_name="First Name Required";
		}
		else{
			$first_name= htmlspecialchars($_POST["first_name"]);
		}

        if(empty($_POST["last_name"])){
			$hasError = true;
			$err_lname="Last Name Required";
		}
		else{
			$last_lname= htmlspecialchars($_POST["last_name"]);
		}

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


        if(empty($_POST["password"])){
            $hasError = true;
            $err_password = "Password Required.";
        }
        else if(strlen($_POST["password"]) < 6){
            $hasError = true;
            $err_password = "Minimum 6 characters need.";
        }
        else if(!strpos($_POST["password"],"#") && !strpos($_POST["password"],"?")){
            $hasError = true;
            $err_password = "Must Contain a Special character(# or ? )";

        }
        else if(!isNumberExist($_POST["password"])){
            $hasError = true;
            $err_password = "Must Contain a number.";
        }
        else if(!upperCaseExist($_POST["password"]) || !lowerCaseExist($_POST["password"])){
            $hasError = true;
            $err_password = "Must contain Upper and Lower case.";

        }
        else{
            $password = htmlspecialchars($_POST["password"]);
        }

        if(empty($_POST["cPassword"])){
            $hasError = true;
            $err_cPassword = "Confirm Password Required";
        }
        else if($password != $_POST["cPassword"]){
            $hasError = true;
            $err_cPassword = "Must be same as Password.";

        }
        else{
            $cPassword = htmlspecialchars($_POST["cPassword"]);
        }

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

        //Gender Validation
        if(!isset($_POST["gender"])){
			$hasError = true;
			$err_gender="Gender Required";
		}
		else{
			$gender = $_POST["gender"];

        }
		
	}
    
  



?>



<html>
<head>
    <title>Student Creation</title>
</head>
<body>

    <form action="" method="post">
        <fieldset>
            <legend><b>Student Creation</b></legend>
                 <table>
                    <tr>
                        <td><b>ID :</b></td>
                        <td><input type="text" name="studentId" value="<?php echo $studentId; ?>"></td>
                        <td><span> <?php echo $err_id; ?></span></td>
                    </tr>
                    <tr>
                        <td><b>First Name :</b></td>
                        <td><input type="text" name="first_name" value="<?php echo $first_name; ?>"></td>
                        <td><span> <?php echo $err_fname; ?></span></td>
                    </tr>
                    <tr>
                        <td><b>Last Name :</b></td>
                        <td><input type="text" name="last_name" value="<?php echo $last_name; ?>"></td>
                        <td><span> <?php echo $err_lname; ?></span></td>
                    </tr>
                   
                    <tr>
                        <td><b>Password:</b></td>
                        <td><input type="password" name="password" value="<?php echo $password; ?>"></td>
                        <td><span><?php echo $err_password; ?> </span></td>
                    </tr>
                    <tr>
                        <td><b>Confirm Password:</b></td>
                        <td><input type="password" name="cPassword" value="<?php echo $cPassword; ?>"></td>
                        <td><span><?php echo $err_cPassword; ?> </span></td>
                    </tr>
                    <tr>
                        <td><b>Email :</b></td>
                        <td><input type="text" name="email" value="<?php echo $email; ?>"></td>
                        <td><span><?php echo $err_email; ?> </span></td>
                    </tr>
                    <tr>
                        <td><b>Phone :</b></td>
                        <td>
                            <input type="text" name="code" value="<?php echo $code; ?>" placeholder="Code"><b> - </b>
                            <input type="text" name="phoneNumber" value="<?php echo $phoneNumber; ?>" placeholder="Number">
                        </td>
                        <td><span><?php echo $err_phoneNumber; ?> </span></td>
                    </tr>
                    <tr>
                        <td><b>Adderss :</b></td>
                        <td>
                            <input type="text" name="address" value="<?php echo $address; ?>" placeholder="Street Address"><br>
                            <input type="text" name="city" value="<?php echo $city; ?>" placeholder="City">
                            <b> - </b>
                            <input type="text" name="state" value="<?php echo $state; ?>" placeholder="State"><br>
                            <input type="text" name="zipCode" value="<?php echo $zipCode; ?>" placeholder="Postal/Zip Code">

                        </td>
                        <td><span><?php echo $err_address; ?> </span></td>
                    </tr>
                    <tr>
                        <td><b>Birth Date :</b></td>
                        <td>
                            <select name="day">
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
                        <td><b>Gender :</b></td>
                        <td>
                            <input type="radio" name="gender" value="Male" <?php if($gender=="Male") echo "checked"; ?> name="gender"><b> Male </b>
                            <input type="radio" name="gender" <?php if($gender=="Female") echo "checked"; ?> value="Female" type="radio"><b> Female </b>
                         </td>
                        <td><span> <?php echo $err_gender;?> </span></td>
				</tr>
                <tr>
					<td colspan="2" align="right"><input type="submit" name="submit" value="Submit"></td>
					
				</tr>
            </table>
        </fieldset>
    </form>
    
</body>
</html>