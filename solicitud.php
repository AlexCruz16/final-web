<?php

		if(isset($_POST['txAnio'])){
			$txAnio=$_POST['txAnio'];
		}else{
			$txAnio="";
			}
	
		if ($txAnio <= 1998) {
			session_start();
			header('Location:malibu.php');
		}else{
			echo"<script type=\"text/javascript\">alert('Lo sentimos, eres menor de edad para ingresar al sitio.'); window.location='index.html';</script>";
		}


?>