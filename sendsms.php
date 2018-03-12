<?php 
  
 /** 
4  * @author Kingster 
5  * @author SuyashBansal 
6  * @category SMS 
7  * @copyright 2015 
8  * @description Request this page with get or post params 
9  * @param uid = Way2SMS Username 
10  * @param pwd = Way2SMS Password 
11  * @param phone = Number to send to. Multiple Numbers separated by comma (,).  
12  * @param msg = Your Message ( Upto 140 Chars) 
13  */ 
  
 include('way2sms-api.php'); 
  
 if (isset($_REQUEST['uid']) && isset($_REQUEST['pwd']) && isset($_REQUEST['phone']) && isset($_REQUEST['msg'])) { 
     $res = sendWay2SMS($_REQUEST['uid'], $_REQUEST['pwd'], $_REQUEST['phone'], $_REQUEST['msg']); 
     if (is_array($res)) 
         echo $res[0]['result'] ? 'true' : 'false'; 
     else 
         echo $res; 
     exit; 
 } 
