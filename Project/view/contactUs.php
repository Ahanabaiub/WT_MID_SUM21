<?php
   
    $first_name = "";
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

        //First Name Validation
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

        //Last Name validation
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
            $err_phone = "Phone Number Required.";
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
            $address= $_POST["address"];
        }

        if(empty($_POST["district"])){
            $hasError = true;
            $err_address = "District Required.";
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
    <h1>RDBMS College Bangladesh</h1>
    <a href="homePage.php">Home</a>
    <hr>
    <h1>Please fill the below information for contract with us.</h1>
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
                        <td>Profession</td>
                        <td>: <input type="text" name="profession" value="<?php echo $profession; ?>"></td>
                        <td><span><?php echo $err_profession; ?> </span></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>
                            : <input type="text" name="address" placeholder="Street address" value="<?php echo $address; ?>">
                            <span>  </span>
                            <input type="text" name="district" placeholder="District" value="<?php echo $district; ?>">
                        </td>
                        <td><span><?php echo $err_address; ?> </span></td>
                    </tr>
                    <tr>
                        <td>Message</td>
                        <td>: <textarea name="message"><?php echo $message; ?></textarea></td>
                        <td><span><?php echo $err_message; ?> </span></td>
                    </tr>
                    <tr>
					    <td colspan="2" align="right"><input type="submit" name="submit" value="Submit"></td>
					
				    </tr>
                </table>    
        </fieldset>
    </form>
    <p><b>© 2017 - RDBMS College, Dhaka.</b></p>  
</body>
</html>