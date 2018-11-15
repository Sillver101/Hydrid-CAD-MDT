<?php
/**
Hydrid CAD/MDT.
Copyright (C) 2018 s11k and Hydrid.
 Credit is not allowed to be removed from this program, doing so will
 result in copyright takedown.
 WE DO NOT SUPPORT CHANGING CODE IN ANYWAY, AS IT WILL MESS WITH FUTURE
 UPDATES. NO SUPPORT IS PROVIDED FOR CODE THAT IS EDITED.
**/
session_start();
include('classes/config.php');
$page_name = "New Account";
require 'classes/lib/password.php';

?>
<!DOCTYPE html>
<html>
<?php
$page_name = "Welcome";
include('includes/header.php')
?>
   <body>
      <div class="container">
         <div class="main">
            <img src="https://hydrid.us/main-core/assets/imgs/california.png" class="main-logo" draggable="false"/><br />
            <text>
              <strong>Thank you for signing up with Hydrid! </strong><br />
              <?php if ($settings_sign_up_verification_db === "yes"): ?>
                This community has validation enabled, meaning a staff member will have to validate your account. Please do not pester staff about validation. After your account is validated, you will be able to login and start using Hydrid!
              <?php else: ?>
                It appears that this community does not have validation enabled for new accounts. You are free to login, and start using Hydrid.
              <?php endif; ?>
            </text>
            <a href="<?php print($url_login) ?>"><button class="btn btn-block btn-primary" style="margin-top: 10px;">Continue to login</button></a>
            <?php include('includes/hydrid.php') ?>
         </div>
      </div>
   </body>
</html>
