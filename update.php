<?php
    $username = $_POST['username'];
    $username = trim($username);

    if(isset($_POST['submit'])){
        $filename = basename($_FILES['uploadedfile']['name']);
        $filepath = "$username/$filename";

     if( move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $filepath) ){
          echo("upload_success");
          exit;
     }else{
          echo("upload_failure");
          
          exit;
     }

    }
?>

<body>
          <form action="display.php" method="post">
          <p>Update success: Click to direct to your file system</p>
          <input type="hidden" name="username" value = <?php echo($username); ?>>
          <input type="submit" value="Display">
        </form>  
</body>