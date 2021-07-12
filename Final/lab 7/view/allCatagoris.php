<?php
include '../controller/catagoryController.php';

$categories = getAllCatagories();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>All Categories</title>
</head>
<body>

         <table>
            <tr>
                <td>Id</td>
                    <td>Name</td>
            </tr>
            <?php 
                $i=1;
                    foreach($categories as $c){
                           echo "<tr>";
                           echo "<td>$i</td>";
                            echo "<td>".$c['name']."</td>";
                            echo '<td><a href="editCatagory.php?id='.$c['id'].'>Edit</a</td>';
                            echo "</tr>";   
                            
                            $i++;
                    }
            ?>
        </table> 
    
</body>
</html>