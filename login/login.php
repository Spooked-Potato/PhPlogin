<?php

session_start();
	
if (isset($_POST['utilizador']) && isset($_POST['pass'])) {
	$user = $_POST['utilizador'];
	$pass = $_POST['pass'];

	unset($_POST['utilizador']);
	unset($_POST['pass']);

	
	$dados = ["Artur","123"];

	if ($dados[0]== $user && $dados[1] == $pass) {
		$_SESSION['user'] = $user;
		setcookie("tempo", true, time() + 60);
	
		
		header('Location: ../_cliente/Brands/index.php');
	}
	else{
		$_SESSION['loginalert'] = "<p style='color:red; text-align: center; font-family: Calibri;font-size: 20px;'><strong>Ocorreu um erro ao entrar na sua conta!<br> Verifique o Nome de utilizador e a palavra-passe</strong></p>";
		header("Location: ./login.php");
	}


}
else{
	header('Location: ./');
}

?>
