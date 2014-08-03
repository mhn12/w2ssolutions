<?php

	if(!empty($_POST['email']))
	{	
	
		$to = "info@way2smile.com";
		$from =  $_POST['email'];

		$subject = "w2ssolutions.com Visitor's Query";
		$message = "<br/><br/><br/><table border=0>";
		$message .= "<tr><td valign='top'>Name :</td><td>".$_POST['name']."</td></tr>";
		$message .= "<tr><td valign='top'>Email ID :</td><td>".$_POST['email']."</td></tr>";
		$message .= "<tr><td valign='top'>Contact Number :</td><td>".$_POST['contactno']."</td></tr>";
		$message .= "<tr><td valign='top'>Country :</td><td>".$_POST['country']."</td></tr>";
		$message .= "<tr><td valign='top'>Query :</td><td>".$_POST['query']."</td></tr>";
			
		
		$message .= "<tr><td valign='top'>Thanks,</td><td></td></tr>";
		$message .= "<tr><td valign='top'>W2s team</td><td></td></tr>";		
		$message .= "</table>";	
		$headers  = 'MIME-Version: 1.0'."\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
		$headers .= 'From: '.$from."\r\n";
		$header.= "MIME-Version: 1.0\r\n"; 		
		$header.= "Content-Type: text/html; charset=utf-8\r\n"; 		
		$headers .= 'Reply-To: '.$from. "\r\n";
		$headers .= 'Return-Path: '.$from."\r\n";
		$headers .= "X-Priority: 1 (Highest)\r\n"; 
		$headers .= "X-MSMail-Priority: High\r\n"; 
		$headers .= "Importance: High\r\n";
		$headers .= 'X-Mailer: PHP/' . phpversion();


		$mail = mail($to, $subject, $message, $headers);
		//echo $to;
		if($mail)
		{
			echo "\n Email Sent Successfully; We will get you soon". ' - '. $_POST['email'];
		}
		else
		{
			echo "Some technical problem ; Please try later";
		}
	}
	else
	{
		echo "THis page not accessible";
	}
		
?>