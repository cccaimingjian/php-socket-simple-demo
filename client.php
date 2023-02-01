<?php
while (1){
   $client = stream_socket_client('127.0.0.1:54167',$errno,$esg);
   $message = fgets(fopen('php://stdin', 'r'));
   echo 'send:'.$message.PHP_EOL;
   fwrite($client,$message);
   fclose($client);
}
