<?php
 $n=$_POST['anumber'];
 echo "Hello your AADHAR NUMBER is $n ";
 echo "<br>";
 $con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'telephone');
 $q="select * from phonedata2 where Aadharno=$n ";
 $result=mysqli_query($con,$q);
 $num=mysqli_num_rows($result);
 echo "Total number of connection from particular lsa is $num";
 
 echo "<br>";
 for($i=1;$i<=$num;$i++)
 {
 $row=mysqli_fetch_array($result);
 echo"where mobile number is: ". $row['Mobileno']." ,tsp name is: ".$row['tsp']." and lsa is :".$row['lsa'];
 echo "<br>";
 }
 
 mysqli_close($con);
?>