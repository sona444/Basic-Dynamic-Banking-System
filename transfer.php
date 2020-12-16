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
        #submit{
            padding:10px;
        }
        .row{
            text-align:center;
            padding-left:15%;
        }
        .col-md-3{
            font-size:20px;
            font-weight:700;
            border:2px solid black;
            margin:10px;
            padding:5px;
        }
    </style>
</head>
<body>
<div class='container'>
    <div class='row'>
    <h1 style="text-decoration:underline; margin-right:20%;">TO WHOM YOU WANT TO TRANSFER THE AMOUNT?</h1>
<?php
if(isset($_POST['submit'])) {
    $amount=$_POST['amount'];
    $prev=$_POST['payer'];
}
else{
    echo "cannot get info";
}
$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '';
$dbname = 'banking';
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if(!$conn){
    die('Cant connect: '.mysql_error());
}
else{
    for($i=1;$i<=10;$i++)
    {
        if ($i==$prev)
        {
            continue;
        }
        else
        {
        $sql = "SELECT * FROM `customer` WHERE `ID` = $i";
        if (mysqli_query($conn, $sql)) 
        {
            $result=mysqli_query($conn,$sql);
            while($row = mysqli_fetch_array($result))
            {
            $id=$row['ID'];
            echo"<div class='col-md-3' id='$id'>";
            if($id==1)
            {
                echo"<img src='c.png'class='image'><br>";
            }
            else if($id==2)
            {
                echo"<img src='c2.png'class='image'><br>";
            }
            else if($id==3)
            {
                echo"<img src='c4.png'class='image'><br>";
            }
            else if($id==4)
            {
                echo"<img src='c5.png'class='image'><br>";
            }
            else if($id==5)
            {
                echo"<img src='c3.png'class='image'><br>";
            }
            else if($id==6)
            {
                echo"<img src='c6.png'class='image'><br>";
            }
            else if($id==7)
            {
                echo"<img src='c7.png'class='image'><br>";
            }
            else if($id==8)
            {
                echo"<img src='c8.png'class='image'><br>";
            }
            else if($id==9)
            {
                echo"<img src='character1.png'class='image'><br>";
            }
            else if($id==10)
            {
                echo"<img src='character2.png'class='image'><br>";
            }
            echo "Name: ".$row['name']."<br>";
            echo "Current Balance:".$row['balance']."<br>";
            echo "Email: ".$row['email']."<br>";
            echo "Account no: ".$row['acc_num']."<br>";
            echo "<form action='send.php' method='POST' id='$id'><input type='hidden' name='amount' value=".$amount."><input type='hidden' name='previous' value=".$prev."><input type='hidden' name='next' id='next' value=".$id."><input type='submit' name='submit' value='select' id='submit' >";
            echo"</div>";
            }
        } 
        else 
        {
            echo "Error: " . $sql . "" . mysqli_error($conn);
        }
    }
    }
}
?>
<!-- <script>
function select(){
let id=document.getElementById("next").parentNode.id;
document.getElementById("next").value=id;
}
select();
</script> -->
</div>
</div>
</body>
</html>