<?php
$username = $_POST['username'];
   $password = $_POST['password'];
  $con=mysqli_connect('localhost','root');
   mysqli_select_db($con,'telephone');
  $q= "select * from dotlogin where 
   username='$username' and password='$password'";
   $result = mysqli_query($con,$q);
   $num=mysqli_num_rows($result);
    $q1="select * from phonedata3 where Totalconnection >9";
 $result1=mysqli_query($con,$q1);
 $num1=mysqli_num_rows($result1);
   if($num!=0)
   {
	   echo"valid user";
	   echo "<br>";
	  
	   
 echo "These aadhar card number has exceed number of connection";
 echo "<br>";
	
 echo "<br>";
 for($i=1;$i<=$num1;$i++)
 {
 $row=mysqli_fetch_array($result1);
 echo" Aadharno is: ".$row['Aadharno'];
 echo "<br>";
 }
 }
   
   else
   {
	   echo"not a valid user";
   }
	
   mysqli_close($con);
?>
