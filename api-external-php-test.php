<?php
  // Submit a request to the API endpoint.
  $randomUserJSONString = file_get_contents( 'http://randomuser.me/api/' );
  // Convert the response to a PHP object.
  $randomUserObject = json_decode( $randomUserJSONString );
  // Collect the first user in the results array.
  $randomUser = $randomUserObject->results[0]; 
  // $randomUser2 = $randomUserObject->info[0]; 
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>External API PHP Test</title>
</head>
<body>
  <h1>External API PHP Test</h1>
  <?php include './includes/navigation.php'; ?>
  <h2>Random User</h2>
  <dl>
    <dt>Full Name</dt>
    <dd>
      <?php echo $randomUser->name->title; ?>
      <?php echo $randomUser->name->first; ?>
      <?php echo $randomUser->name->last; ?>
    </dd>
    <dt>Location</dt>
    <dd>
    <?php echo $randomUser->location->street->number; ?>
    <?php echo $randomUser->location->street->name; ?>
    <?php echo $randomUser->location->city; ?>
    <?php echo $randomUser->location->state; ?>
    </dd>
    <dd></dd>
    <dt>Country</dt>
    <dd><?php echo $randomUser->location->country; ?></dd>
    <dd></dd>
    <dt>Timezone</dt>
    <dd><?php echo $randomUser->location->timezone->offset; ?></dd>
    <dd><?php echo $randomUser->location->timezone->description; ?></dd>      
    <dd></dd>
    <dt>E-Mail Address</dt>
    <dd></dd>
    <dd>Username: <?php echo $randomUser->email; ?></dd>
    <dd>Password: <?php echo $randomUser->login->username; ?></dd>
    <dd></dd>
    <dt>Photograph</dt>
    <dd><img src="<?php echo $randomUser->picture->large; ?>"></dd>
    <!-- <dt>Info</dt>
    <dd>Seed: <?php echo $randomUser2->seed; ?></dd>
    <dd>Seed: <?php echo $randomUser2->page; ?></dd>
    <dd>Seed: <?php echo $randomUser2->version; ?></dd> -->
  </dl>
</body>
</html>