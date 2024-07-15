<!DOCTYPE html>
<html>
  <head>
    <title>Powered By Initializ Buildpacks</title>
  </head>
  <body>
<?php
echo '<img style="display: block; margin-left: auto; margin-right: auto; width: 50%;" src="https://nkspknddghh.s3.ap-south-1.amazonaws.com/securepacks.png"></img>';

//simple counter to test sessions. should increment on each page reload.
session_start();
$count = isset($_SESSION['count']) ? $_SESSION['count'] : 1;

echo '<h1> Page hit count:';
echo $count;
echo '</h1>';

$_SESSION['count'] = ++$count;
?>
  </body>
</html>
