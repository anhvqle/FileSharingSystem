<?php
session_start();
$username = $_SESSION['username'];
$username = trim($username);
 if(isset($_POST['delete'])){
     $deleteFile = trim($_POST["delete"]);
     $filepath = "$username/$deleteFile";
     unlink($filepath);
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
          <form action="display.php" method="post" id = "delete">
          <p>Delete success: Click to direct to your file system</p>
          <input type="hidden" name="username" value = <?php echo($username); ?>>
          <input type="submit" value="Display" id = "deleteBtn">
     </form>  
     <script>
        document.getGetElementById("deleteBtn").click();
    </script>
     
</body>
</html>
