<?php

// Function to log errors to a file
function errorLog($log, $self, $get, $line){
    
    // Open the file for appending (a+ mode) or create it if it doesn't exist
    $fp = fopen($_SERVER['DOCUMENT_ROOT'] . '/StiopaNet/developer/plugins/errors_logs/errors_logs.txt', 'a+');

    // Read all lines from the log file to get the current number of lines
    $fileLines=file($_SERVER['DOCUMENT_ROOT'] . '/StiopaNet/developer/plugins/errors_logs/errors_logs.txt');
    $numberLines= count($fileLines) + 1;

     // Get the current date and time
    $date = date("d-m-Y");
    $hours = date("H:i");

    // Move the file pointer to the end of the file
    fseek($fp,SEEK_END);

    // Prepare the log message to be written in the log file
    $newLine = 'ERROR'.'['.$numberLines.']'.' '.$date.' '.$hours.' '.$log.' '.' in '.$self.' ROUTER-> '.$get.' -- LINE '.$line. "\r\n";
    // EX : ERROR[1] 20-01-2023 00:06 [PHP][MODEL] Problem with condition function selectInBDD for NAV STICK  in /StiopaNet/index.php ROUTER-> memory -- LINE 212

    // Write the log message to the log file
    fputs($fp,$newLine);

    // Close the file after writing
    fclose($fp);
}