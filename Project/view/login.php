<?php
    $cid = "";
    $err_cid = "";

    $password = "";
    $err_password = "";

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>RDBMS College Bangladesh</H1>
            <ul>
                <li><a href="homePage.php">Home</a></li>
                <li><a href="">Administration</a></li>
                <li><a href="">Registration</a></li>
            </ul>
            <hr>
    <form action="" method="post">
        <fieldset>
                <table>
                    <tr>
                        <td></td>
                        <td><h2>Login</h2></td>
                    </tr>
                    <tr>
                        <td><b>College ID :</b></td>
                        <td><input type="text" name="cid" value="<?php echo $cid; ?>"></td>
                        <td><span> <?php echo $err_cid; ?></span></td>
                    </tr>
                    <tr>
                        <td><b>Password :</b></td>
                        <td><input type="text" name="password" value="<?php echo $password; ?>"></td>
                        <td><span> <?php echo $err_password; ?></span></td>
                    </tr>    
                    <tr>
					    <td colspan="2" align="right"><input type="submit" name="submit" value="Submit"></td>
				    </tr>
        </fieldset>
    </form>
</body>
</html>