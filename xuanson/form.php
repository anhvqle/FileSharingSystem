<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Welcome Back, Xuan Son!</h1>
    <form enctype="multipart/form-data" action="uploader.php" method="POST">
    <p>
      <input type="hidden" name="MAX_FILE_SIZE" value="20000000" />
      <label for="uploadfile_input">Choose a file to upload:</label> <input name="uploadedfile" type="file" id="uploadfile_input" />
    </p>
    <p>
      <input type="submit" value="Upload File" />
    </p>
    </form>
    <?php

    ?>
  </body>
</html>
