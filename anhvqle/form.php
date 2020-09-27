<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Welcome Back, Anh Le!</h1>
    <form enctype="multipart/form-data" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
    <p>
      <input type="hidden" name="MAX_FILE_SIZE" value="20000000" />
      <label for="uploadfile_input">Choose a file to upload:</label> <input name="uploadedfile" type="file" id="uploadfile_input" />
    </p>
    <p>
      <input type="submit" value="Upload File" />
    </p>
    </form>
    <?php
    if(isset($_POST['uploadedfile'])){
        printf("<p><strong>%s</strong></p>\n",
          htmlentities($_POST['uploadedfile'])
        );
    }
    ?>
  </body>
</html>
