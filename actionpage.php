<?php
$username = $_POST['username'];
   $password = $_POST['password'];
    $n=$_POST['anumber'];
	$m=$_POST['lsa'];
	
   $con=mysqli_connect('localhost','root');
   mysqli_select_db($con,'telephone');
  $q= "select * from tsplogin where 
   username='$username' and password='$password'";
   $result = mysqli_query($con,$q);
   $num=mysqli_num_rows($result);
    $q1="select * from phonedata2 where Aadharno=$n and lsa='$m'";
 $result1=mysqli_query($con,$q1);
 $num1=mysqli_num_rows($result1);
   if($num!=0)
   {
	   echo"valid user";
	   echo "<br>";
	 
 echo "Hello your AADHAR NUMBER is $n and LSA is $m";
 echo "<br>";
	echo "Total number of connection is $num1";
 echo "<br>";
 if($num1<=9)
 {
 for($i=1;$i<=$num1;$i++)
 {
 $row=mysqli_fetch_array($result1);
 echo" tsp name is: ".$row['tsp'];
 echo "<br>";
 }
   }
   else
   {
	   echo"you exceed total number of connection ";
   }
   }
   else
   {
	   echo"not a valid user";
   }
	
   mysqli_close($con);
?>
