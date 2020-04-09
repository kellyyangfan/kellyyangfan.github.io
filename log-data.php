<?php
  $log_file_name = 'data.log'; // Change to the log file name
  $say = $_POST['say']; // incoming message
  file_put_contents($log_file_name, $say, FILE_APPEND);
  //header('Location: /');

  echo $say;
>
