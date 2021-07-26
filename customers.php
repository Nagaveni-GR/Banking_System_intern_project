<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customers Details</title>	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <style type="text/css">
      button{
			border:none;
			background: #C5CBD6;
		}
	    button:hover{
			background-color:#6D7789;
			transform: scale(1.1);
			color:white;
		}
      
    </style>
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <!--<div class="container-fluid">-->
    <a class="navbar-brand" href="#">NRS Bank </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="transactions.php">Transfer History</a>
        </li>       
      </ul>
      
    </div>
  
</nav>

<body style="background-color : #EFF3A5;">
<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>

<div class="container">
        <h2 class="text-center pt-4" style="color : #00000; font-size : 50px;" >Customers Details</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="border-color:white;">
                        <thead style="color : #000000;" >
                            <tr>
                            <th scope="col" class="text-center py-2">Account no.</th>
                            <th scope="col" class="text-center py-2">Account holder name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance(in Rs.)</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : #00000; background-color : white">
                        <td class="py-2; text-center"><?php echo $rows['id'] ?></td>
                        <td class="py-2; text-center"><?php echo $rows['name']?></td>
                        <td class="py-2; text-center"><?php echo $rows['email']?></td>
                        <td class="py-2; text-center"><?php echo $rows['balance']?></td>
                        <td><a href="transfer.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn" style="background-color : #00000;">Transfer money</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
</body>
</html>