<?php
 $n=$_POST['anumber'];
 echo "Hello your AADHAR NUMBER is $n ";
 echo "<br>";
 $con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'telephone');
 $q="select * from phonedata2 where Aadharno=$n ";
 $result=mysqli_query($con,$q);
 $num=mysqli_num_rows($result);
 echo "Total number of connection is $num";
 mysqli_close($con);
?>