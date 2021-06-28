<?php
    $subject_name = "";
    $err_subject = "";
    
    $code = "";
    $err_code = "";

    $department="";
	$err_department="";

    $description = "";
    $err_description = "";

    $createDate = "";
    $hasError = false;

    $departments = array("Science","Commerce","Arts");

    if(isset($_POST["submit"])){
        if(empty($_POST["subject_name"])){
            $hasError = true;
            $err_subject = "Subject Name Required.";
        }
        else{
            $subject_name = htmlspecialchars($_POST["subject_name"]);
        }


        if(empty($_POST["code"])){
            $hasError = true;
            $err_code = "Subject Code Required.";
        }
        else{
            $code = htmlspecialchars($_POST["code"]);
        }

        //Departments validation
        if (!isset($_POST["department"])){
			$hasError = true;
			$err_department="Department Required.";
		}
		else{
			$department = $_POST["department"];
		}

        if(empty($_POST["description"])){
            $hasError = true;
            $err_description = "Description Required.";
        }
        else{
            $description = htmlspecialchars($_POST["description"]);
        }

    }


?>


<!DOCTYPE html>
<html>
<head>
    <title>Subject creation</title>
</head>
<body>
    <a href="admindash.php">DashBord</a>
    <br>
    <form action="" method="post">
        <fieldset>
        <h1>Fillup the Subject information</h1>
                <table>
                    <tr>
                        <td>Name</td>
                        <td>: <input type="text" name="subject_name" value="<?php echo $subject_name; ?>"></td>
                        <td><span> <?php echo $err_subject; ?></span></td>
                    </tr>
                    <tr>
                        <td>Code</td>
                        <td>: <input type="text" name="code" value="<?php echo $code; ?>"></td>
                        <td><span> <?php echo $err_code; ?></span></td>
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
                        <td>Created at</td>
                        <td>: <input type="text" name="createDate" value="<?php echo $createDate; ?>"></td>
                        <td><span></span></td>
                    </tr>
    
                    <tr>
                        <td>Description</td>
                        <td>: <textarea name="description"><?php echo $description; ?></textarea></td>
                        <td><span><?php echo $err_description; ?> </span></td>
                    </tr>
                    <tr>
					    <td colspan="2" align="right"><input type="submit" name="submit" value="Submit"></td>
					
				    </tr>
                </table>    
        </fieldset>
    </form>
    
</body>
</html>