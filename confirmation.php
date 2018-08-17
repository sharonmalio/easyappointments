<?php
try
{
set_time_limit(10000);
//Set the response content type to application/json
header("Content-Type:application/json");

$resp = '{"ResultCode":0,"ResultDesc":"Confirmation received successfully"}';
//read incoming request
$postData=file_get_contents('php://input');
//log file
// $filePath=”\messages.log”;
$filePath=”messages.log”;
//error log
// $errorLog=”\errors.log”;
$errorLog=”errors.log”;
//Parse payload to json
$jdata=json_decode($postData,true);
//perform business operations on $jdata here

$TransactionType= $jdata["TransactionType"];
$TransID=$jdata["TransID"];
$TransTime= $jdata["TransTime"];
$TransAmount = $jdata["TransAmount"];
$BusinessShortCode = $jdata["BusinessShortCode"];
$BillRefNumber = $jdata["BillRefNumber"];
$InvoiceNumber = $jdata["InvoiceNumber"];
$OrgAccountBalance = $jdata["OrgAccountBalance"];
$ThirdPartyTransID= $jdata["ThirdPartyTransID"];
$MSISDN= $jdata["MSISDN"];
$FirstName = $jdata["FirstName"];
$MiddleName = $jdata["MiddleName"];
$LastName = $jdata["LastName"];

$host=”localhost”; // Host name
$username=”root”; // Mysql username bigsofts_userm
$password=”malio1234”; // Mysql password
$db_name=”stonewebdeveloper”; // Database name
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
mysql_connect("$host", "$username", "$password")or die("cannot connect");

// Selecting Database
mysql_select_db("$db_name")or die("cannot select DB");

mysql_query( "INSERT INTO mpesa_api(TransactionType, TransID, TransTime, TransAmount, BusinessShortCode,BillRefNumber,InvoiceNumber,MSISDN,First_Name,Middle_Name,Last_Name,OrgAccountBalance,status,statussms) VALUES ('$TransactionType',
'$TransID', '$TransTime','$TransAmount','$BusinessShortCode','$BillRefNumber','$InvoiceNumber','$MSISDN','$FirstName','$MiddleName','$LastName','$OrgAccountBalance','0','0')")
or die("Something went wrong while sending details, try again…" .mysql_error());

//open text file for logging messages by appending
$file = fopen($filePath,"a");
//log incoming request
fwrite($file, $postData);
fwrite($file,"\r\n");
//log response and close file
fwrite($file,$resp);
fclose($file);
} catch (Exception $ex){
//append exception to errorLog
$logErr= fopen($errorLog,"a");
fwrite($logErr, $ex->getMessage());
fwrite($logErr,"\r\n");
fclose($logErr);
}
//echo response
echo $resp;
?>