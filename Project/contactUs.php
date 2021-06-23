<?php

    $first_name= "";
    $err_fname = "";

    $last_name= "";
    $err_lname = "";

    $email = "";
    $err_email = "";

    $phone = "";
    $err_phone = "";

    $profession = "";
    $err_profession = "";

    $address = "";
    $district = "";
    $err_address = "";

    $message = "";
    $err_message = "";

    $hasError = false;

    if(isset($_POST["submit"])){

        if(empty($_POST["first_name"])){
			$hasError = true;
			$err_fname="First Name Required";
		}
		else{
			$first_name = htmlspecialchars($_POST["name"]);
		}

        if(empty($_POST["last_name"])){
			$hasError = true;
			$err_lname="Last Name Required";
		}
        else if(strpos($_POST["last_name"]," ")){
            $hasError = true;
			$err_lname="Space is not allowed";
        }
        else{
			$last_name = htmlspecialchars($_POST["last_name"]);
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

        //Phone Number
        if(empty($_POST["phone"])){
            $hasError = true;
            $err_email = "Phone Number Required.";
        }
        else if(!is_numeric($_POST["phone"])){
            $hasError = true;
            $err_phone = "Phone Number Must be a number";
        }
        else{
            $phone = $_POST["phone"];
        }

        //profession
        if(empty($_POST["profession"])){
            $hasError = true;
            $err_profession = "Profession Required.";
        }
        else{
            $profession = $_POST["profession"];
        }


        //Address
        if(empty($_POST["address"])){
            $hasError = true;
            $err_address = "Address Required.";
        }
        else{
            $profession = $_POST["profession"];
        }

        if(empty($_POST["district"])){
            $hasError = true;
            $err_address = "Profession Required.";
        }
        else{
            $district = $_POST["district"];
        }


        //Message
        if(empty($_POST["message"])){
            $hasError = true;
            $err_message = "Message Required.";
        }
        else{
            $message = $_POST["message"];
        }


    }


?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
</head>
<body>
    <h1>Please fill the below information for contract with us.<h1>
    <form action="" method="post">
        <fieldset>
                <table>
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
                        <td><b>Email :</b></td>
                        <td><input type="text" name="email" value="<?php echo $email; ?>"></td>
                        <td><span><?php echo $err_email; ?> </span></td>
                    </tr>
                    <tr>
                        <td><b>Phone Number :</b></td>
                        <td><input type="text" name="phone" value="<?php echo $phone; ?>"></td>
                        <td><span><?php echo $err_phone; ?> </span></td>
                    </tr>
                    <tr>
                        <td><b>Profession :</b></td>
                        <td><input type="text" name="profession" value="<?php echo $profession; ?>"></td>
                        <td><span><?php echo $err_profession; ?> </span></td>
                    </tr>
                    <tr>
                        <td><b>Address :</b></td>
                        <td>
                            <input type="text" name="address" placeholder="Street address" value="<?php echo $address; ?>">
                            <span>  </span>
                            <input type="text" name="district" placeholder="District" value="<?php echo $district; ?>">
                        </td>
                        <td><span><?php echo $err_address; ?> </span></td>
                    </tr>
                    <tr>
                        <td><b>Message :</b></td>
                        <td><textarea name="message"><?php echo $message; ?></textarea></td>
                        <td><span><?php echo $err_message; ?> </span></td>
                    </tr>
                    <tr>
					    <td colspan="2" align="right"><input type="submit" name="submit" value="Submit"></td>
					
				    </tr>
                </table>    
        </fieldset>
    </form>
      
</body>
</html>