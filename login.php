<?php
$username = $_POST['username'];
$username = trim($username);
//echo("$username");

$file = fopen("users.txt", "r");

while(!feof($file) ){
    if($username == trim(fgets($file))){
         printf("Username Found");
    }
    // echo(fgets($file));
 }

fclose($file);

header("Location: form.php");
exit;

?>
