<?php
$socket = stream_socket_server("tcp://127.0.0.1:54167", $errno, $errstr);
while (1) {
    $conn = @stream_socket_accept($socket,60);
    if ($conn) {
        $message = fread($conn,1024);
        echo 'Received: '.$message.'---END'.PHP_EOL;
        fclose($conn);
    }
}
