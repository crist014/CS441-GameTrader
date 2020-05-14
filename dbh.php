<!-- 
    AUTHOR: Darnel Cristobal
 -->
<?php 
$host="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="GTLogins";

//connects to the databse
$conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbName);

if(mysqli_connect_error())
{die('connect error('. mysqli_connect_errno(). ')'. mysqli_connect_error());}
?>