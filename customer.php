<!DOCTYPE html>
<head>
    <title>Customer details</title>
    <style>
        body{
            background-image: linear-gradient(to right, #44bce7, #e94974);
            background-size:400% 400%;
            animation:gradient 10s infinite;
        }
        .table{
            border:2px solid black;
            margin-left:8%;
            text-align:center;
            font-size:30px;
        }
        td{
            border:1px solid black;
            padding:5px;
        }
        td{
            padding:5px;
        }
        h1{
            text-align:center;
        }
        #customer{
            background-color:#44bce7;
            color:black;
            padding:4px;
        }
        #customer:hover{
            background-color:#e94974;
            color:black;
            padding:4px;
        }
        @keyframes gradient{
            0% {
		            background-position: 0% 50%;
	            }
	        50% {
		            background-position: 100% 50%;
	            }
	        100% {
		            background-position: 0% 50%;
	            }
        }
        #search{
            text-align:center;
        }
        #ID{
            padding:10px;
            font-size:30px;
        }
        #submit{
            padding:10px;
        }
    </style>
</head>
<body>
    <h1 style="text-decoration:underline;">CUSTOMER'S DETAILS</h1>
<?php
$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '';
$dbname = 'banking';
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if(!$conn){
    die('Cant connect: '.mysql_error());
}
else{
    echo"<table class='table'>
    <tr>
    <th>Customer ID</th>
    <th>Customer Name</th>
    <th>Current Balance</th>
    <th>Email</th>
    <th>Account Number</th>
    </tr>";
    for($i=1;$i<=10;$i++)
    {
        $sql = "SELECT * FROM `customer` WHERE `ID` = $i";
        if (mysqli_query($conn, $sql)) 
        {
            $result=mysqli_query($conn,$sql);
            while($row = mysqli_fetch_array($result))
            {
            echo "<tr>";
            echo"<td>".$row['ID']."</td>";
            echo"<td>".$row['name']."</td>";
            echo"<td>".$row['balance']."</td>";
            echo"<td>".$row['email']."</td>";
            echo"<td>".$row['acc_num']."</td>";
            echo"</tr>";
            }
        } 
        else 
        {
            echo "Error: " . $sql . "" . mysqli_error($conn);
        }
    }
    echo"</table>";
}
?>
<div id="search">
<h1 style="text-decoration:underline;">SELECT AND VIEW THE DETAILS OF ANY OF THE ABOVE:</h1>
<form action="view.php" method="POST">
    <input type="number" id="ID" name="ID" placeholder="Enter ID of desired User"><br>
    <input type="submit" name="submit" id="submit">
</div>
</body>
</html>