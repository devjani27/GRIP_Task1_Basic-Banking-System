<?php
    session_start();
    DEFINE('DB_USER','root');
    DEFINE('DB_PASSWORD','');
    DEFINE('DB_SERVER','localhost');
    DEFINE('DB_NAME','bank_application');
    $con=mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME)
    OR dies('Could not connect to MySQL:' .
    mysqli_connect_error());

    if(isset($_GET['Name'])){
		$Name=$_GET['Name'];
	}

	$q="SELECT * From customer WHERE Name='$Name'";
	$result=mysqli_query($con,$q);
	$row_count=mysqli_num_rows($result);
	$_SESSION['senderName']=$Name;
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://kit.fontawesome.com/f935d9d29d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Transaction</title>
    <style>
		table {
		font-family: sans-serif;
		border-collapse: collapse;
		width: 100%;
		}

		h1{
		font-family: sans-serif;
		font-size:40px;
		}
		
		td, th {
		border: 1px solid black;
		text-align: center;
		padding: 8px;
		}

		tr:nth-child(odd) {
		background-color: lavenderblush;	
		}
	</style>
   
</head>

<div class="menu_bar">
    <image class="im" src="images/logo.png" ></image> 
    <h1>THE SPARKS FOUNDATION BANK</h1>
    <h3>....the name you can bank upon</h3>
       <div class="menu_icons">
       <ul style="list-style:none;">
               <li><a href="index.php"><i class=" ic fa fa-home" style="color:red;" ></i> Home</a></li>       
       </ul>
       <ul style="list-style:none;">
              <li><a href="view_transaction.php" ><i class=" ic fa fa-clipboard" style="color:red;" ></i> View Transactions</a></li>       
       </ul>
       </div>
       </div>
	            <br><br>
               <h1 style="font-family:serif;text-align:center;color: red;font-size:30px;font-weight:bold">Account Details</h1>
               <br>
               <table style="background-color:#CAE1FF;" >
                  <th>Account Number</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Account Balance</th>
                  <tr>
                  
                   <?php  
                       $row=mysqli_fetch_array($result)
                   ?>
                   
                    
                   <td><?php echo  $row["AccountNumber"]; ?></td>
                   <td><?php echo  $row["Name"]; ?></td>
                   <td><?php echo  $row["Email"]; ?></td>
                   <td><?php echo  $row["AccountBalance"]; ?></td>
                  </tr>
       
               </table>
           </div>
               
           <?php echo "<form method='post' action='transactions.php?Name=$Name'>"?>
       <br><br>
          <br><br><br><br>
           <table border="0px" style="background-color:#75A1D0;" >
               <tr>
               <td>Transfer To:</td>
               <td><select name="user">
                   <option>--Select--</option>
          
                   <?php  
                       $q1="select * from customer";
                       $result1=mysqli_query($con,$q1);
                       while($row=mysqli_fetch_array($result1)){
                   ?>
       
                   <option value="<?php echo $row['Name']; ?>"> <?php echo $row["Name"]; ?></option>
       
                   <?php }
                   ?>
                   
                   </select></td></tr> 
                   <tr><td>Amount:</td><td><input type="text" name="Amount"></td></tr>
                   <tr><td></td><td><input type="submit" name="submit" value="Submit" align=center style="margin-top: 10px; width:6em; height:2em; font-size:15px; background-color: bisque; font-weight: bold;"></td></tr>
           </table>
       
       </form>
       
       
       
       </body>
       </html> 
                