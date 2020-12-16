<!DOCTYPE html>
<head>
    <title>Customer details</title>
    <style>
        *{
            font-family:Georgia, 'Times New Roman', Times, serif;
            
        }
        .details{
            text-align:center;
            font-size:20px;
            font-weight:900;
            line-height:40px;
        }
        #image{
            border-radius:50%;
            border:3px solid black;
        }
        body{
            background-image:url("gradient.jpg");
        }
        header{
            text-align:center;
            text-decoration:underline;
        }
        button{
            padding:10px;
            font-size:20px;
            margin:10px;
        }
        #submit{
            padding:10px;
            font-size:20px;
            margin:10px;
        }
        #transfer{
            margin-left:70px;
        }
        .amount{
            padding:10px;
        }
    </style>
</head>
<body>
<?php
if(isset($_POST['submit'])) {
    $id=$_POST['ID'];
}
else{
    echo "cannot get info";
}
$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '';
$dbname = 'banking';
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
$sql = "SELECT * FROM `customer` WHERE `ID`=$id";
if(!$conn){
    die('Cant connect: '.mysql_error());
}
else{
if (mysqli_query($conn, $sql)) {
            $result=mysqli_query($conn,$sql);
            while($row = mysqli_fetch_array($result))
            {
            $name=$row['name'];
            $balance=$row['balance'];
            $email=$row['email'];
            $account=$row['acc_num'];
            }
} 
else {
	echo "Error: " . $sql . "" . mysqli_error($conn);
}
}
?>
<header>
    <h1><?php echo"$name"?>'s Details</h1>
</header>
<div class="details">
<img src='' id='image'/><br>
Name:<?php echo "$name";?><br>
Current Account Balance:<?php echo "$balance";?><br>
E-mail:<?php echo "$email";?><br>
Account number:<?php echo "$account";?><br>
<form action="transfer.php" method="POST">
<input type="hidden" name="payer" value= <?php echo $id; ?> >
<input type="number" name="amount" class="amount" placeholder="Enter Amount to transfer"><br>
<input type="submit" name="submit" id="submit" value="Transfer from <?php echo $name;?>'s account"><br>OR
</form>
<a href="customer.php"><button>Return to all customer's details</button></a>
</div>
<script>
    function image(){
        if(<?php echo"$id"?>==1){
            document.getElementById("image").src="c.png";
        }
        else if(<?php echo"$id"?>==2){
            document.getElementById("image").src="c2.png";
        }
        else if(<?php echo"$id"?>==3){
            document.getElementById("image").src="c4.png";
        }
        else if(<?php echo"$id"?>==4){
            document.getElementById("image").src="c5.png";
        }
        else if(<?php echo"$id"?>==5){
            document.getElementById("image").src="c3.png";
        }
        else if(<?php echo"$id"?>==6){
            document.getElementById("image").src="c6.png";
        }
        else if(<?php echo"$id"?>==7){
            document.getElementById("image").src="c7.png";
        }
        else if(<?php echo"$id"?>==8){
            document.getElementById("image").src="c8.png";
        }
        else if(<?php echo"$id"?>==9){
            document.getElementById("image").src="character1.png";
        }
        else if(<?php echo"$id"?>==10){
            document.getElementById("image").src="character2.png";
        }
    }
    image();
</script>
</body>
</html>