<?php
//volunter.php
//File name Vol_<ddmmyy>.csv

$filename = "";
$data = "";

if($_POST["id"]==1)
{
$filename = "C:\\xampp\\reports\\"."Vol_" .date("dmY").".csv";
$data = $_POST["cname"] . "\t" 
        .$_POST["ccity"]."\t" 
        .$_POST["caddress"]."\t"
        .$_POST["cstate"]."\t"
        .$_POST["cmobile"]."\t"
        .$_POST["cemail"]."\t"
        .$_POST["floatingSelect"];
}
//file opening
        file_put_contents ($filename, $data.PHP_EOL, FILE_APPEND | LOCK_EX);
        
echo "Sucess";
        
        
//testing of data flow
//echo $_POST["cname"];
//echo $_POST["ccity"];
//echo $_POST["caddress"];
//echo $_POST["cstate"];
//echo $_POST["cmobile"];
//echo $_POST["cemail"];
//echo $_POST["floatingSelect"];

?>