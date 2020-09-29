<?php
    session_start();
    $username = $_SESSION['username'];
    $username = trim($username);

    if(isset($_POST['submit'])){
        $filename = basename($_FILES['uploadedfile']['name']);
        $filepath = "$username/$filename";

     if( move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $filepath) ){
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
        <form action="display.php" method="post">
                <p>Update success: Click to direct to your file system</p>
                <input type="hidden" name="username" value = <?php echo($username); ?>>
                <input type="submit" value="Display" id = "updateBtn">
            </form>  
        </body>
        <script>
            document.getGetElementById("updateBtn").click();
        </script>
        </html>
<?php
          exit;
     }else{
          echo("upload_failure");
          
          exit;
     }

    }
?>

