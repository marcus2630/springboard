<?php require_once('connect.php');
ob_start();
if(isset($_GET["post"])) {
	if(
		isset($_POST["msg"]) && isset($_POST["submit"]) && isset($_POST["pin"])
		) {
				$msg = stripcslashes($conn->real_escape_string($_POST["msg"]));
				$type = stripcslashes($conn->real_escape_string($_POST["submit"]));
				$pin = stripcslashes($conn->real_escape_string($_POST["pin"]));
	} else echo("errorz");

	$sql = "
	INSERT INTO status_msg
	VALUES ('', '$msg', '$type')
	";

	if($pin == "1337") {
		mysqli_query($conn, $sql);
		mysqli_close($conn);
	}
	
	mysqli_close($conn);
	header('Location: index.php');
}

?>