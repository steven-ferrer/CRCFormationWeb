<?php

						//servername, username, password, DBName
$connect=mysqli_connect('localhost','root','Nomar112098','crc-contact');

if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}

?>
