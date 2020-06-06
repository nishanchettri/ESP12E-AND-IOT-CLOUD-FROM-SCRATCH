

<?php
$servername = "localhost"; //always as local host
$username = "id13982090_dbiotclouduser" ; //database username
$password = "9WBGNJ%25RT>&#*g" ; //db password
$dbname = "id13982090_dbiotcloud" ;//db name

//create a connection 

$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	//echo "connection established" ;
}

else
{
	die("connection failed because of: ".mysqli_connect_error());
}

?>
