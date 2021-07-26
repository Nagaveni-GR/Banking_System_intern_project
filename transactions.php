<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer History</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
</head>

<body style="background-color : #EFF3A5;">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">NRS bank </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="customers.php">Our Customers</a>
        </li>  
		</ul>
    </div>    
  </div>
</nav>

<div class="container">
       <h2 class="text-center pt-4" style="color : #00000; font-size : 50px;" >Transfer Details</h2>
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead style="color : #00000;">
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php
            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>
            <tr style="color : #00000; background-color : white;">
            <td class="py-2; text-center"><?php echo $rows['sno']; ?></td>
            <td class="py-2; text-center"><?php echo $rows['sender']; ?></td>
            <td class="py-2;  text-center"><?php echo $rows['receiver']; ?></td>
            <td class="py-2;  text-center"><?php echo $rows['balance']; ?> </td>
            <td class="py-2;  text-center"><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }
        ?>
        </tbody>
    </table>
    </div>
</div>
</body>
</html>