#!/usr/bin/php -q
<?php
// mirror.php MySQLicious implementation
// v1.0 - 3/23/2005

// MySQL configuration
$MySQL_Host		= "localhost";	// address of your MySQL server
$MySQL_Database	= "db";			// name of the MySQL database you want to use
$MySQL_Table	= "delicious";	// name of the MySQL table you want to put del.icio.us bookmarks in
$MySQL_Username	= "username";	// MySQL username
$MySQL_Password	= "password";	// MySQL password

// del.icio.us configuration
$delicious_Username		= "username";	// del.icio.us username
$delicious_Password		= "password";	// del.icio.us password
$delicious_TagFilter	= "";			// tag to mirror. if left blank, all bookmarks will be mirrored.


// ---------------------------------------------------------------
//  You shouldn't need to change anything below here
// ---------------------------------------------------------------


// import the MySQLicious code
$currentDir = dirname(__FILE__)."/";
require $currentDir."MySQLicious.php";

// initialize MySQLicious
$delicious = new MySQLicious($MySQL_Host, $MySQL_Database, $MySQL_Username, $MySQL_Password);


// perform the mirroring
$delicious->mirror($delicious_Username, $delicious_Password, $MySQL_Table, $delicious_TagFilter);

?>