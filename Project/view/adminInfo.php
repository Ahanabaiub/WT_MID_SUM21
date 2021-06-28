<?php
    $cid = "11-1243-11";
    $name ="Ahanab Shakil";
    $email = "shieam47@gmail.com";
    $phone = "0175648945";
    $address = "sector#06 Uttara, Dhaka.";
    $gender = "Male";
    
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin info</title>
</head>
<body>
    <h1>Admin Information</h1>
    <form>
        <fieldset>
            <table>
                <tr>
                    <td>CID :</td>
                    <td><?php echo $cid ?></td>
                </tr>
                <tr>
                    <td>Name :</td>
                    <td><?php echo $name ?></td>
                </tr>
                <tr>
                    <td>Email :</td>
                    <td><?php echo $email ?></td>
                </tr>
                <tr>
                    <td>Phone :</td>
                    <td><?php echo $phone ?></td>
                </tr>
                <tr>
                    <td>Address :</td>
                    <td><?php echo $address ?></td>
                </tr>
                <tr>
                    <td>Gender :</td>
                    <td><?php echo $gender ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td><a href="">Update</a></td>
                </tr>

            </table>

    </fieldset>

    </form>
    
</body>
</html>