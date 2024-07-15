<!DOCTYPE html>
<html>
  <head>
    <title>Powered By Initializ Buildpacks</title>
  </head>
  <body>
    <img style="display: block; margin-left: auto; margin-right: auto; width: 50%;" src="https://nkspknddghh.s3.ap-south-1.amazonaws.com/securepacks.png"></img>
<?php
  // https://getcomposer.org/doc/01-basic-usage.md#autoloading
  // This is how you autoload composer packages
  require 'vendor/autoload.php';

    foreach (get_loaded_extensions() as $ext) {
        print($ext . "\n");
    }
?>
  </body>
</html>
