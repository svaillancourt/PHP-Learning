<?php
  // This file's code will execute right here in the file.
  include './includes/datatypes.php';
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $myMessage; // Echo is used for outputting strings. ?></title>
</head>
<body>
  <h1><?php echo $myMessage; ?></h1>
  <?php include './includes/navigation.php'; // We're executing this code right here... the nav will display. ?>
  <pre>
    <?php
      // Var dump is great for seeing what's inside!
      var_dump( $myOtherArray );
    ?>
  </pre>
  <h2>Concatenated String</h2>
  <p>
    <?php echo $concattedString; ?>
  </p>
  <h2>Difference Between Single and Double Quoted Strings</h2>
  <h3>Single Quoted</h3>
  <p>
    <?php echo $mySingleQuoteHelloString; ?>
  </p>
  <h3>Double Quoted</h3>
  <p>
    <?php echo $myDoubleQuoteHelloString; ?>
  </p>
</body>
</html>