<?php
$dbhost = 'localhost';
$dbuser = 'root';
$conn = mysql_connect($dbhost, $dbuser);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT * from prescription';

mysql_select_db('hms1');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    echo "PATIENT ID :{$row['id']}  <br> ".
         "medicine1	 : {$row['medicine1']} <br> ".
         "medicine2	 : {$row['medicine2']} <br> ".
	 "medicine3	 : {$row['medicine3']} <br> ".
         "diagnosis	 : {$row['diagnosis']} <br> ".
         "instructions	 : {$row['instructions']} <br> ".
         "---------------------------------------------------------------------------------------------------<br>";
} 

mysql_close($conn);
?>
