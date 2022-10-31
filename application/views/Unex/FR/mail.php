<?php 
	if (isset($_POST) && !empty($_POST['name']) && !empty($_POST['email'])) {
		extract($_POST);
		$to= 'contact@unex.online';
		$from="From : ".$_POST['name']." <".$_POST['email'].">";
		$subject=$_POST['subject'];
		//$message = $_POST['message']."<br><br>Veuillez me contacter sur ce numéro si besoin : ".$_POST['phone'];
		$message = '
			<html>
			<head>
				<title></title>
			</head>
			<body>
				<?php $_POST["message"]."<br><br>Veuillez me contacter sur ce numéro si besoin : ".$_POST["phone"]; ?>
			</body>
			</html>
		';
		$mail=mail($to, $subject, $message,$from);
		if ($mail) {
			echo "email sent successfully";
			header('Location:FR/Unex/home');
		} else{ 
			echo "email not sent, please try again";
		}
	} else{
		echo "Please fill the form ! ";
	}
?>
