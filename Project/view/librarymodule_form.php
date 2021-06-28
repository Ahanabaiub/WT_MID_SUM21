<?php
	  $bookid="";
	  $err_bookid="";
	  $title="";
	  $err_title="";
	  $publishyear="";
	  $err_publishyear="";
	  $author="";
	  $err_author="";
	  $publisherid="";
	  $err_publisherid="";
	  $publisherdetails="";
	  $err_publisherdetails="";
	  $bookcatagory="";
	  $err_bookcatagory="";
      $day = "";
      $month = "";
      $year = "";
      $err_purchasedate = "";
	  $purchasesource ="";
	  $err_purchasesource="";
	  $pagecount="";
	  $err_pagecount="";
	  $extracontent="";
	  $err_extracontent="";
	  $description="";
	  $err_description="";
	  $notes="";
	  $err_notes="";
	
	  $hasError=false;
	
	
	  $months = array("January","February","March","April","May","June","July","August","September","October","November","December");
	  $bookid= array("B1001","B1002","B1003","B1004","B1005");
	  $publisherid= array("1001","1002","1003","1004","1005");
	  $pagecount= array("1-10","10-20","20-30");
	  $bookcatagory= array("Bangla","English","Math","Ict","Programming");
	
	if(isset($_POST["submit"])){
		
		if (!isset($_POST["bookid"])){
			$hasError = true;
			$err_bookid="Book id Required";
		}
		else{
			$bookid = $_POST["bookid"];
		}
		
		if(empty($_POST["title"])){
			$hasError = true;
			$err_title="Title Required";
		}
		
		if(empty($_POST["publishyear"])){
			$hasError = true;
			$err_publishyear="Publishyear Required";
		}
		if(empty($_POST["author"])){
			$hasError = true;
			$err_author="Author Required";
		}
		if (!isset($_POST["publisherid"])){
			$hasError = true;
			$err_publisherid="Publisherid Required";
		}
		else{
			$publisherid = $_POST["publisherid"];
		}
		
		
		if(empty($_POST["publisherdetails"])){
			$hasError = true;
			$err_publisherdetails = "Publisher Details Required";
		}
		else{
			$publisherdetails = $_POST["publisherdetails"];
		}
		
		if (!isset($_POST["bookcatagory"])){
			$hasError = true;
			$err_bookcatagory="Bookcatagory Required";
		}
		else{
			$bookcatagory = $_POST["bookcatagory"];
		}
		
		
		if (!isset($_POST["day"])){
			$hasError = true;
			$err_purchasedate = "Select A Day.";
		}
		else{
			$day = $_POST["day"];
		}

        if (!isset($_POST["month"])){
			$hasError = true;
			$err_purchasedate = "Select A Month.";
		}
		else{
			$month = $_POST["month"];
		}

        if (!isset($_POST["year"])){
			$hasError = true;
			$err_purchasedate = "Select A Year.";
		}
		else{
			$year = $_POST["year"];
		}
		
		if(empty($_POST["purchasesource"])){
			$hasError = true;
			$err_purchasesource="Purchasesource Required";
		}
		else{
			$purchasesource = $_POST["purchasesource"];
		}
		
		
		if (!isset($_POST["pagecount"])){
			$hasError = true;
			$err_pagecount="Pagecount Required";
		}
		else{
			$pagecount = $_POST["pagecount"];
		}
		
		if(!isset($_POST["extracontent"])){
			$hasError = true;
			$err_extracontent="Extracontent Required";
		}
		else{
			$extracontent = $_POST["extracontent"];
		}
		if(empty($_POST["description"])){
			$hasError = true;
			$err_description = "Description Required";
		}
		else{
			$description = $_POST["description"];
		}
		if(empty($_POST["notes"])){
			$hasError = true;
			$err_notes = "Notes Required";
		}
		else{
			$notes = $_POST["notes"];
		}
		
		if(!$hasError){
			echo "<h1>Form submitted</h1>";
		
			echo $_POST["bookid"]."<br>";
			echo $_POST["title"]."<br>";
			echo $_POST["publishyear"]."<br>";
			echo $_POST["author"]."<br>";
			echo $_POST["publisherid"]."<br>";
		    echo $_POST["publisherdetails"]."<br>";
			echo $_POST["bookcatagory"]."<br>";
			echo $day." ".$month." ".$year." "."<br>";	
			echo $_POST["purchasesource"]."<br>";
			echo $_POST["pagecount"]."<br>";
			echo $_POST["extracontent"]."<br>";
			echo $_POST["description"]."<br>";
			echo $_POST["notes"]."<br>";
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
					<td>Book Id</td>
					<td>: <select name="bookid">
						<option disabled selected>--Choose Book Id--</option>
						<?php
							foreach($bookid as $b){
								if($b == $bookid) 
									echo "<option selected>$b</option>";
								else
									echo "<option>$b</option>";
							}
						?>
						</select>
					</td>
					<td><span> <?php echo $err_bookid;?> </span></td>
				</tr>
                 <tr>
					<td>Title</td>
					<td>: <input type="text" name="title" value="<?php echo $title; ?>" placeholder="Enter Title "> </td>
					<td><span> <?php echo $err_title;?> </span></td>
				</tr>
				
				<tr>
					<td>Publish year</td>
					<td>: <input type="text" name="publishyear" value="<?php echo $title; ?>" placeholder="Enter Publish Year "> </td>
					<td><span> <?php echo $err_publishyear;?> </span></td>
				</tr>
				<tr>
					<td>Author</td>
					<td>: <input type="text" name="author" value="<?php echo $author; ?>" placeholder="Enter Author Name "> </td>
					<td><span> <?php echo $err_author;?> </span></td>
				</tr>
				
				<tr>
					<td>Publisher Id</td>
					<td>: <select name="publisherid">
						<option disabled selected>--Choose Publisher Id--</option>
						<?php
							foreach($publisherid as $p){
								if($p == $publisherid) 
									echo "<option selected>$p</option>";
								else
									echo "<option>$p</option>";
							}
						?>
						</select>
					</td>
					<td><span> <?php echo $err_publisherid;?> </span></td>
				</tr>
				
				
				<tr>
					<td>Publisher Details</td>
					<td>: <textarea name="publisherdetails" ><?php echo $publisherdetails; ?></textarea>
					<td><span> <?php echo $err_publisherdetails;?> </span></td>
					</td>
				</tr>
				
				
				<tr>
					<td>Book Catagory</td>
					<td>: <select name="bookcatagory">
						<option disabled selected>--Choose Book Catagory--</option>
						<?php
							foreach($bookcatagory as $m){
								if($m == $bookcatagory) 
									echo "<option selected>$m</option>";
								else
									echo "<option>$m</option>";
							}
						?>
						</select>
					</td>
					<td><span> <?php echo $err_bookcatagory;?> </span></td>
				</tr>
				
			<tr>
                        <td>Purchase Date</td>
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
                            <select name="year">
                                <option disabled selected>Year</option>
                                <?php
                                    for($i = 2021; $i>=1970; $i--){
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
                        <td><span><?php echo $err_purchasedate; ?> </span></td>
                    </tr>
				<tr>
					<td>Purchase Source</td>
					<td>: <input type="text" name="purchasesource" value="<?php echo $purchasesource; ?>" placeholder="Enter Purchase Source "> </td>
					<td><span> <?php echo $err_purchasesource;?> </span></td>
				</tr>
				
				<tr>
					<td>Page Count</td>
					<td>: <select name="pagecount">
						<option disabled selected>--Page Count--</option>
						<?php
							foreach($pagecount as $p){
								if($p == $pagecount) 
									echo "<option selected>$p</option>";
								else
									echo "<option>$p</option>";
							}
						?>
						</select>
					</td>
					<td><span> <?php echo $err_pagecount;?> </span></td>
				</tr>	
				<tr>
					<td>Extra Content</td>
					<td>: <input type="radio" value="Yes" <?php if($extracontent=="Yes") echo "checked"; ?> name="extracontent"> Yes <input name="extracontent" <?php if($extracontent=="No") echo "checked"; ?> value="No" type="radio"> No </td>
					<td><span> <?php echo $err_extracontent;?> </span></td>
				</tr>	
				
				<tr>
					<td>Description</td>
					<td>: <textarea name="description" ><?php echo $description; ?></textarea>
					<td><span> <?php echo $err_description;?> </span></td>
					</td>
				</tr>
				<tr>
					<td>Notes</td>
					<td>: <textarea name="notes" ><?php echo $notes; ?></textarea>
					<td><span> <?php echo $err_notes;?> </span></td>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="right"><input type="submit" name="submit" value="Submit"></td>
					
				</tr>
			</table>
		</fieldset>
		</form>
	</body>
</html>