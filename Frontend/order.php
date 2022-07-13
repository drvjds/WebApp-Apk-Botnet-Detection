<?php 
session_start();
error_reporting(1);
include('connection.php');
$eid=$_SESSION['create_account_logged_in'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Botnet Prediction</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="css/style.css"rel="stylesheet"/>
 <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body style="margin-top:50px;">

<body background="bots.jpg">  
<a href="C:\xampp\htdocs\bot\bots.jpg"></a>

  <?php
  include('Menu Bar.php');
  ?>

<div class="container-fluid"><!--Primary Id-->
    <div class="container">
    <div class="row">
        <table class="table table-hover table-bordered table-striped table-responsive"style="background-color:#c0c0c1;height:150px;">
<form method="post" action="processac.php">
	<script>
    function myFunction() {
        var x;
        var r = confirm("Botnet has been detected!! \nPlease select 'OK' to alert the Developer by mail. Select 'Cancel' to abort. ");
 
        if (r == true) {
         x = "Email has been sent.";
 window.location.href='processac1.php';
     }
        else {
         x = "Email sending Cancelled!";
     }
     document.getElementById("demo").innerHTML = x;
}
</script>
		<br>
                <br>
                
               
                <center><b><p style="color:black;font-size:20px;">Enter App URL:</p></b></center>
		<center><input type="text" name="bal"></center>
		<br>
           
		<center><input type="submit" name="save" value="Submit"></center>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
	</form>


              
               <tr>        
                    <th><p style="color:black;font-size:15px;">App-URL</p></th>
                    <th><p style="color:black;font-size:15px;">Botnet Prediction</p></th>
                    <th><p style="color:black;font-size:15px;">Botnet Family</p></th>
                    <th><p style="color:black;font-size:15px;">Alert the Developer</p></th>
               </tr>


               <?php 
$sql= mysqli_query($con,"select * from bots"); 
while($result=mysqli_fetch_assoc($sql))
{
$oid=$result['id'];
echo "<tr>";
echo "<td>".$result['ur']."</td>";
echo "<td>".$result['pred']."</td>";
echo "<td>".$result['family']."</td>";  
if ($result['family'] != "") {
?> 
 <td><button onclick="myFunction()">Send Email</button>
<p id="demo"></p></td>
<?php }  
}                    
                    ?> 
          </table>
    </div>
    </div>
  </div>
<?php
include('Footer.php')
?>
</body>
</html>
