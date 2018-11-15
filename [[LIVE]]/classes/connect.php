<?php
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', 'password');
define('MYSQL_HOST', 'localhost');
define('MYSQL_DATABASE', 'hydridus_cad');

$pdoOptions = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_SILENT,
    PDO::ATTR_EMULATE_PREPARES => false
);

$pdo = new PDO(
    "mysql:host=" . MYSQL_HOST . ";dbname=" . MYSQL_DATABASE,
    MYSQL_USER,
    MYSQL_PASSWORD,
    $pdoOptions
);


//This needs to be more optimzied later
//call connection for settings from db
$stmt    = $pdo->prepare("SELECT * FROM settings");
$stmt->execute();
$settingsRow = $stmt->fetch(PDO::FETCH_ASSOC);

//Define variables
$settings_site_name_db = $settingsRow['site_name'];
$settings_site_url_db  = $settingsRow['site_url'];
$settings_theme_db      = $settingsRow['theme'];
$settings_btntheme_db  = $settingsRow['button_theme'];
$settings_sign_up_verification_db  = $settingsRow['validation_enabled'];
$settings_identity_verification_db  = $settingsRow['identity_approval_needed'];
$settings_timezone_db  = $settingsRow['timezone'];
