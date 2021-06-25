<?php
    $subject_name = "";
    $err_subject = "";
    
    $code = "";
    $err_code = "";

    $department = "";
    $err_department = "";

    $description = "";
    $err_description = "";

    $createDate = "";
    $hasError = false;

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
    <form action="" method="post">
        <fieldset>
        <h1>Fillup the Subject information<h1>
                <table>
                    <tr>
                        <td><b>Name :</b></td>
                        <td><input type="text" name="subject_name" value="<?php echo $subject_name; ?>"></td>
                        <td><span> <?php echo $err_subject; ?></span></td>
                    </tr>
                    <tr>
                        <td><b>Code :</b></td>
                        <td><input type="text" name="code" value="<?php echo $code; ?>"></td>
                        <td><span> <?php echo $err_code; ?></span></td>
                    </tr>
                    <tr>
                        <td><b>Department :</b></td>
                        <td><input type="text" name="department" value="<?php echo $department; ?>"></td>
                        <td><span><?php echo $err_department; ?> </span></td>
                    </tr>
                    <tr>
                        <td><b>Created at :</b></td>
                        <td><input type="text" name="createDate" value="<?php echo $createDate; ?>"></td>
                        <td><span></span></td>
                    </tr>
                    <!-- <tr>
                        <td><b>Last Update :</b></td>
                        <td>
                            <input type="text" name="lastUpdate" value="<?php echo $lastUpdate; ?>">
                        </td>
                        <td><span> </span></td>
                    </tr> -->
                    <tr>
                        <td><b>Description :</b></td>
                        <td><textarea name="description"><?php echo $description; ?></textarea></td>
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