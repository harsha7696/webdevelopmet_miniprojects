<?php
session_start();
?>


<?php
$id=$_POST['id'];
$medicine1=$_POST['medicine1'];
$medicine2=$_POST['medicine2'];
$medicine3=$_POST['medicine3'];
$diagnosis=$_POST['diagnosis'];
$instructions=$_POST['instructions'];
$doc_name=$_POST['doc_name'];
$con=@mysql_connect("localhost","root") or die(mysql_error());
$db=@mysql_select_db("hms1",$con)or die(mysql_error());
$str="insert into prescription values('$id','$medicine1','$medicine2','$medicine3','$diagnosis','$instructions','$doc_name')";
$res=@mysql_query($str)or die(mysql_error());
if($res>=0)
{
echo'<br><br><b>prescription added!!<br>';
}

?>
<html>
<body style="background-image:url(background4.jpg)">
<br>
<a href="home.html"><b>Click here to return to the home page</b></a>
</body></html>
