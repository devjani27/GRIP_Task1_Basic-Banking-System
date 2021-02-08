<?php
    session_start();
    DEFINE('DB_USER','root');
    DEFINE('DB_PASSWORD','');
    DEFINE('DB_SERVER','localhost');
    DEFINE('DB_NAME','bank_application');
    $dbc=mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME)
        OR dies('Could not connect to MySQL:' .
	    mysqli_connect_error());
	$query="SELECT AccountNumber,Name,Email,AccountBalance FROM customer";
	$stmt=mysqli_query($dbc,$query);
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

    <title>Customer List</title>
    <style>
    table{
    color:black;
    padding:20px 50px;
    margin-left:150px;
    text-align:center;
    border-collapse:collapse;
    }
    table, td, th {
    border: 2px solid black;
}
     td{
         font-size:18px;
     }
   
   .o{
    text-align:center;
     }
    
    .thead{
        color:red;
        font-size:20px;
    }
    .bu{
    
    background-color: rgba(235, 179, 205, 0.719);
    color:black;
    font-weight: bold;
    font-size: 20px;

}
    

    table.center {
     margin-left:auto; 
     margin-right:auto;
     }
     

     </style>
     </head>
<body>
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
        
       <?php
                    
						echo "<div class=\"o\"><h3></div>";
						echo "<br>";		
						echo "<table class=\"center\"cellpadding=\"10\"";
                        echo "<tr><th class=\"thead\">Account Number</th><th class=\"thead\">Name</th>
						<th class=\"thead\">Email</th>
                        <th class=\"thead\">Account Balance</th>
                        <th class=\"thead\">View Customer</th>
                        </tr>";
                        while($row=mysqli_fetch_array($stmt)) {
                            echo "<tr>";?>
                            
							<td><?php echo  $row["AccountNumber"]; ?></td>
                            <td><?php echo  $row["Name"]; ?></td>
                            <td><?php echo  $row["Email"]; ?></td>
                            <td><?php echo  $row["AccountBalance"]; ?></td>
                            <?php echo "<td> <a href = 'selectedcustomer.php?Name=$row[1]'><button class=\"bu\">View</button></a></td>";

                            
                        }

                        echo "</table> <br>";
                        
    				
					
    				
                    ?>
    
</body>
</html>
