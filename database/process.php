<?php include 'db.php';


// create a variable
$name=(isset($_POST['name']) ? $_POST['name']: '');
$email=(isset($_POST['email']) ? $_POST['email']: '');
$subject=(isset($_POST['subject']) ? $_POST['subject']: '');
$message=(isset ($_POST['message']) ? $_POST['message']: '');


//Execute the query
mysqli_query($connect,
	"INSERT INTO contact1 (`name`,`email`,`subject`,`message`)
		        VALUES ('$name','$email','$subject','$message')");


if(mysqli_affected_rows($connect) == TRUE){
	$msg = 'Successfully Sent!';
} else {
	$msg = Sending Faile<br>'';
	echo mysqli_error ($connect);
}

  echo '<script>
             alert("'.$msg.'");
          window.location.href = "../index.php";
          </script>';


 ?>
