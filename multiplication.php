<?php
$servername="121.200.55.60:3307";
$username="2019UIT1155";
$password="2019UIT1155";
$dbname="2019UIT1155";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
die("connection failed:".mysqli_connect_error());
}
echo "connected successfully<br/>";
$trunc="truncate table multiplication_table";
mysqli_query($conn,$trunc);
echo "table truncated<br/>";
for($i=1;$i<=30;$i++)
{
$result=$i*5;
$sql="insert into multiplication_table(multiplicand,muliplier,result)values('$i',5,'$result')";
$res=mysqli_query($conn,$sql);
echo "success $res <br/>";
}
mysqli_close($conn);
?>

