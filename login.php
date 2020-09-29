<?php
$username = $_POST['username'];
$username = trim($username);
//echo("$username");

$file = fopen("users.txt", "r");
$userDetected = false;

function httpPost($url, $data)
{
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    curl_close($curl);
    return $response;
}

while(!feof($file) ){
    if($username == trim(fgets($file))){
          $userDetected = true;
     //     header("Location: $username/form.php");
     //     exit;
    }
 }
 fclose($file);


 


 if($userDetected){
     $url = 'dislay.php';
     $data = array('username' => $username);
     httpPost($url, $data);
     header("Location: display.php");

 }
 else{
     header("Location: userNotFound.html");
 }

?>
