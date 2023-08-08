
<html>
<body bgcolor="white">
<b>
<center>
<font size="8" face="Times New Roman, Times, serif" color="black">
<hr />
STUDENT MARK LIST
<hr />
<?php
$no=$_POST['t1'];
$name=$_POST['t2'];
$m1=$_POST['t3'];
$m2=$_POST['t4'];
$m3=$_POST['t5'];
$total=$m1+$m2+$m3;
$avg=$total/3;
if($avg>=80)
$gr="O";
else if($avg>=60&&$avg<=79)
$gr="A";
else if($avg>=40&&$avg<=59)
$gr="B";
else
$gr="fail";
?>
<table border="5" cellpadding="10" cellspacing="10" bgcolor="White">
<?php
echo"<tr><td style:size=5>no<td>".$no;
echo"<tr><td>Name<td>".$name;
echo"<tr><td>Mark1<td>".$m1;
echo"<tr><td>Mark2<td>".$m2;
echo"<tr><td>Mark3<td>".$m3;
echo"<tr><td>Total<td>".$total;
echo"<tr><td>Avg<td>".$avg;
echo"<tr><td>Grade<td>".$gr;
?>
</table>
</font>
</center>
</b>
</body>
</html>
