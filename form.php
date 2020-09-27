<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $username = $_POST['username']);
      $username = trim($username);
      //echo("$username");

      $file = fopen("users.txt", "r");

      while(!feof($file) ){
          echo(gettype(fgets($file)));
          if($username == trim(fgets($file))){
               printf("Username Found");
          }
          // echo(fgets($file));
       }

      fclose($file);

    ?>
  </body>
</html>
