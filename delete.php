<?php
$username = $_POST['username'];
$username = trim($username);
 if(isset($_POST['delete'])){
     $deleteFile = trim($_POST["delete"]);
     $filepath = "$username/$deleteFile";
     unlink($filepath);
 }

?>

<body>
          <form action="display.php" method="post" id = "delete">
          <p>Delete success: Click to direct to your file system</p>
          <input type="hidden" name="username" value = <?php echo($username); ?>>
          <input type="submit" value="Display">
     </form>  
     <script>
        document.getGetElementById("delete").submit() 
    </script>
     
</body>