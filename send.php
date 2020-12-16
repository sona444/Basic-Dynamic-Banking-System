<!DOCTYPE html>
<head>
    <title>All Customers</title>
    <link rel="stylesheet" href="ca2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/99fe66f91e.js" crossorigin="anonymous"></script>
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
        .row{
            text-align:center;
            padding-left:5%;
        }
        .col-md-3{
            font-size:20px;
            font-weight:700;
            border:2px solid black;
            padding:5px;
            text-align:center;
        }
        .money{
            float:left;
           
        }
        .money img{
            animation:money 5s;
            animation-fill-mode:forwards ;
        }
        @keyframes money{
            0%{
                margin-left:0;
            }
            100%{
                margin-left:65%;
            }
        }
        .end{
            text-align:center;
            font-size:20px;
        }
        .return{
            padding:10px;
        }
    </style>
</head>
<body>
<div class="row">
    <div class="col-md-12">
    <h1>Transfer Details</h1>
    </div>
<?php
if(isset($_POST['submit'])) {
    $prev=$_POST['previous'];
    $next=$_POST['next'];
    $amount=$_POST['amount'];
}
else{
    echo "cannot get info";
}
?>
<?php
$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '';
$dbname = 'banking';
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
$sql = "SELECT * FROM `customer` WHERE `ID`= $prev ";
if(!$conn){
    die('Cant connect: '.mysql_error());
}
else{
if (mysqli_query($conn, $sql)) {
            $result=mysqli_query($conn,$sql);
            while($row = mysqli_fetch_array($result))
            {
            $name=$row['name'];
            $account=$row['acc_num'];
            }
} 
else {
	echo "Error: " . $sql . "" . mysqli_error($conn);
}
}
?>

<?php
echo"<div class='col-md-3'>";
            if($prev==1)
            {
                echo"<img src='c.png'class='image'><br>";
            }
            else if($prev==2)
            {
                echo"<img src='c2.png'class='image'><br>";
            }
            else if($prev==3)
            {
                echo"<img src='c4.png'class='image'><br>";
            }
            else if($prev==4)
            {
                echo"<img src='c5.png'class='image'><br>";
            }
            else if($prev==5)
            {
                echo"<img src='c3.png'class='image'><br>";
            }
            else if($prev==6)
            {
                echo"<img src='c6.png'class='image'><br>";
            }
            else if($prev==7)
            {
                echo"<img src='c7.png'class='image'><br>";
            }
            else if($prev==8)
            {
                echo"<img src='c8.png'class='image'><br>";
            }
            else if($prev==9)
            {
                echo"<img src='character1.png'class='image'><br>";
            }
            else if($prev==10)
            {
                echo"<img src='character2.png'class='image'><br>";
            }
?>
Name:<?php echo "$name";?><br>
Account number:<?php echo "$account";?>
</div>
<div class="col-md-5 money">
    <img src="money.gif" class="col-md-5">
</div>
<?php
$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '';
$dbname = 'banking';
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
$sql = "SELECT * FROM `customer` WHERE `ID`= $next ";
if(!$conn){
    die('Cant connect: '.mysql_error());
}
else{
if (mysqli_query($conn, $sql)) {
            $result=mysqli_query($conn,$sql);
            while($row = mysqli_fetch_array($result))
            {
            $name=$row['name'];
            $account=$row['acc_num'];
            }
} 
else {
	echo "Error: " . $sql . "" . mysqli_error($conn);
}
}
?>
<?php
echo"<div class='col-md-3'>";
            if($next==1)
            {
                echo"<img src='c.png'class='image'><br>";
            }
            else if($next==2)
            {
                echo"<img src='c2.png'class='image'><br>";
            }
            else if($next==3)
            {
                echo"<img src='c4.png'class='image'><br>";
            }
            else if($next==4)
            {
                echo"<img src='c5.png'class='image'><br>";
            }
            else if($next==5)
            {
                echo"<img src='c3.png'class='image'><br>";
            }
            else if($next==6)
            {
                echo"<img src='c6.png'class='image'><br>";
            }
            else if($next==7)
            {
                echo"<img src='c7.png'class='image'><br>";
            }
            else if($next==8)
            {
                echo"<img src='c8.png'class='image'><br>";
            }
            else if($next==9)
            {
                echo"<img src='character1.png'class='image'><br>";
            }
            else if($next==10)
            {
                echo"<img src='character2.png'class='image'><br>";
            }
?>
Name:<?php echo "$name";?><br>
Account number:<?php echo "$account";?>
</div>
<?php
$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '';
$dbname = 'banking';
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
$sql = "SELECT * FROM `customer` WHERE `ID` = $prev";
if(!$conn){
    die('Cant connect: '.mysql_error());
}
else{
if (mysqli_query($conn, $sql)) {
            $result=mysqli_query($conn,$sql);
            while($row = mysqli_fetch_array($result))
            {
            $balance1=$row['balance'];
            $name1=$row['name'];
            }
} 
$balance2=$balance1-$amount;
$sql1 = "UPDATE `customer` SET `balance`=$balance2 WHERE `ID` = $prev";
if (mysqli_query($conn, $sql1)) {

} 
$sql2 = "SELECT * FROM `customer` WHERE `ID` = $next";
if (mysqli_query($conn, $sql2)) {
    $result=mysqli_query($conn,$sql2);
    while($row = mysqli_fetch_array($result))
    {
    $balance3=$row['balance'];
    $name2=$row['name'];
    }
} 
$balance4=$balance3+$amount;
$sql3 = "UPDATE `customer` SET `balance`=$balance4 WHERE `ID` = $next";
if (mysqli_query($conn, $sql3)) {

} 
// $sql4="INSERT INTO `transaction`( `amount`, `payer`, `reciever`) VALUES ($amount,$name1,$name2)";
// if (mysqli_query($conn, $sql4)) {
//     echo "";
// } 
else {
	echo "Error: " . $sql . "" . mysqli_error($conn);
}

}
?>

<div class="col-md-12 end">
<br>Money Transfered Successfully!<br>
<a href="homepage.html"><button class="return">Return to Home Page</button></a>
</div>
</div>
</body>
</html>