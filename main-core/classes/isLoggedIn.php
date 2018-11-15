<?php
/**
Hydrid CAD/MDT.
Copyright (C) 2018 s11k and Hydrid.
 Credit is not allowed to be removed from this program, doing so will
 result in copyright takedown.
 WE DO NOT SUPPORT CHANGING CODE IN ANYWAY, AS IT WILL MESS WITH FUTURE
 UPDATES. NO SUPPORT IS PROVIDED FOR CODE THAT IS EDITED.
**/
//Pull variables
$user_id = $_SESSION['user_id'];
$stmt    = $pdo->prepare("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(
    ":user_id" => $user_id
));
$userRow = $stmt->fetch(PDO::FETCH_ASSOC);

//Define variables
$user_username = $userRow['username'];
$user_email  = $userRow['email'];
$user_usergroup      = $userRow['usergroup'];
$user_departments  = $userRow['departments'];
$user_ip         = $userRow['join_ip'];
$user_joindate   = $userRow['join_date'];

//Module Defines
if (discordModule_isInstalled) {
  $user_discord   = $userRow['discord'];
}

//Get usergroup permissions
if ($user_usergroup === "Banned") {
  define("banned", true);
  define("panel_access", false);
  define("staff_approveUsers", false);
  define("staff_access", false);
  define("staff_viewUsers", false);
  define("staff_editUsers", false);
  define("staff_siteSettings", false);
}
if ($user_usergroup === "Unverified") {
  define("banned", false);
  define("panel_access", false);
  define("staff_approveUsers", false);
  define("staff_access", false);
  define("staff_viewUsers", false);
  define("staff_editUsers", false);
  define("staff_siteSettings", false);
}
  elseif ($user_usergroup === "User") {
    define("banned", false);
  define("panel_access", true);
  define("staff_approveUsers", false);
  define("staff_access", false);
  define("staff_viewUsers", false);
  define("staff_editUsers", false);
  define("staff_siteSettings", false);
} elseif ($user_usergroup === "Moderator") {
  define("banned", false);
  define("panel_access", true);
  define("staff_approveUsers", true);
  define("staff_access", true);
  define("staff_viewUsers", true);
  define("staff_editUsers", false);
  define("staff_siteSettings", false);
} elseif ($user_usergroup === "Admin") {
  define("banned", false);
  define("panel_access", true);
  define("staff_approveUsers", true);
  define("staff_access", true);
  define("staff_viewUsers", true);
  define("staff_editUsers", true);
  define("staff_siteSettings", false);
} elseif ($user_usergroup === "Management") {
  define("banned", false);
  define("panel_access", true);
  define("staff_approveUsers", true);
  define("staff_access", true);
  define("staff_viewUsers", true);
  define("staff_editUsers", true);
  define("staff_siteSettings", true);
} elseif ($user_usergroup === "Developer") {
  define("banned", false);
  define("panel_access", true);
  define("staff_approveUsers", true);
  define("staff_access", true);
  define("staff_viewUsers", true);
  define("staff_editUsers", true);
  define("staff_siteSettings", true);
}


//ban check
if (banned) {
  session_destroy();
  header('Location: ' . $url_login . '?account=banned');
  exit();
}
if ($settings_panel_suspended != "No") {
  session_destroy();
  header('Location: ' . $url_login . '?panel=banned');
  exit();
}

if ($update_in_progress === "Yes") {
  if ($user_usergroup === "Developer") {
    //do nothing
  } else {
    session_destroy();
    header('Location: ' . $url_login . '?update=ip');
    exit();
  }
}

function logme ($action, $username) {
  $username_c        = strip_tags($username);
  $action_c        = strip_tags($action);

  global $pdo;
  global $time;
  global $us_date;

  $log_sql          = "INSERT INTO logs (action, username, timestamp) VALUES (:action, :username, :timedate)";
  $log_stmt         = $pdo->prepare($log_sql);
  $log_stmt->bindValue(':action', $action_c);
  $log_stmt->bindValue(':username', $username_c);
  $log_stmt->bindValue(':timedate', $time . ' ' . $us_date);
  $log_result = $log_stmt->execute();
}
