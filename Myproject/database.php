<?php


// database connection config
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'curier';

// Create connection
$dbConn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);


// Check connection
if ($dbConn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



function dbQuery($dbConn,$sql)
{
	
	$result = mysqli_query($dbConn, $sql) or die(mysqli_error($sql));
	
	return $result;
}

function dbAffectedRows()
{
	global $dbConn;
	
	return mysql_affected_rows($dbConn);
}

function dbFetchArray($result, $resultType = MYSQL_NUM) {
	return mysql_fetch_array($result, $resultType);
}

function dbFetchAssoc($result)
{
	return mysqli_fetch_assoc($result);
}

function dbFetchRow($result) 
{
	return mysql_fetch_row($result);
}

function dbFreeResult($result)
{
	return mysql_free_result($result);
}

function dbNumRows($dbConn,$result)
{
	return mysqli_num_rows($result);
}

function dbSelect($dbName)
{
	return mysql_select_db($dbName);
}

function dbInsertId()
{
	return mysql_insert_id();
}
?>