<?php
  $log_file_name = 'data.log'; // Change to the log file name
  $message = $_POST['say']; // incoming message
  file_put_contents($log_file_name, $message, FILE_APPEND);
  header('Location: /');
>
