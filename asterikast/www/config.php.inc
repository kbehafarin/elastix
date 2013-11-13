<?php
$db_engine="mysql"; //can be mysql or sqlite mysql recommended for production

###########################SQLite Options####################################
$sqlite_location="/var/database/asterikast.db";
###########################Mysql Options#####################################
$mysql_hostname="localhost";
$mysql_username="asteriskuser";
$mysql_password="admin";
$mysql_db="asterisk";
###########################Recording Options#################################
$recordings_location="/var/spool/asterisk/recordings";
$recordings_username="apache";
###########################Manager Options###################################
$manager_host = "127.0.0.1";
$manager_username = "admin";
$manager_password = "admin";
###########################Speaking Options##################################
$use_module=0;
?>
