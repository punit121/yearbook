<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Upload photos for Yearbook 2016</title>
    <style media="screen">
      body {
        text-align: center;
      }
    </style>
  </head>
  <body>
    <h2>Enter your roll number to begin uploading photos:</h2>
    <form class="" method="post">
      <input type="text" name="rollnumber" value="" placeholder="Roll Number" required>
      <input type="submit" name="a" value="Submit Roll Number">
    </form>
  </body>
</html>
<?php
  session_start();
  if ($_POST['rollnumber']) {
    $_SESSION['rollnumber'] = $_POST['rollnumber'];
    header('Location: basic.html');
  }
 ?>
