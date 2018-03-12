<?php 
    include('way2sms-api.php');
    $client = new WAY2SMSClient();
    $client->login('username', 'password');
    $client->send('987654321', 'msg1');
    //Add sleep between requests to make this requests more human like! 
    //A blast of request's may mark the ip as spammer and blocking further requests.
    sleep(1);
    $client->send('9553650212,9502483035', 'msg2');
    sleep(1);
    $client->logout();
?>