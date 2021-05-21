<?php

include get_template_directory() . '/php/visitor_connections.php';//the file with connection code and functions

$visitor_ip = getRealUserIp();
$visitor_browser = getBrowserType();
$visitor_hour = date("h");
$visitor_minute = date("i");
$visitor_date = date("Y-m-d H:i:s");
$visitor_day = date("d");
$visitor_month = date("m");
$visitor_year = date("Y");
$visitor_refferer = GetHostByName($HTTP_REFERER);
$visited_page = selfURL();

//write the required data to database
mysqli_select_db($visitors, $database_visitors);
$sql = "INSERT INTO visitors_table (visitor_ip, visitor_browser, visitor_hour,
 visitor_minute, visitor_date, visitor_day, visitor_month, visitor_year, 
 visitor_refferer, visitor_page) VALUES ('$visitor_ip', '$visitor_browser', 
 '$visitor_hour', '$visitor_minute', '$visitor_date', '$visitor_day', '$visitor_month', 
 '$visitor_year', '$visitor_refferer', '$visitor_page')";
mysqli_query($visitors, $sql);