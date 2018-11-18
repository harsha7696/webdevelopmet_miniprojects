<?php
$dbhost = 'localhost';
$dbuser = 'root';
$conn = mysql_connect($dbhost, $dbuser);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT * from patients';

mysql_select_db('hms1');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    echo "PATIENT ID :{$row['id']}  <br> ".
         "NAME 		 : {$row['name']} <br> ".
         "AGE		 : {$row['age']} <br> ".
         "GENDER	 : {$row['gender']} <br> ".
         "OCCUPATION : {$row['occupation']} <br> ".
         "MOBILE	 : {$row['mobile']} <br> ".
         "ADDRESS	 : {$row['address']} <br> ".
         "------------------------------------------------------------------------------------------------<br>";
} 

mysql_close($conn);
?>
