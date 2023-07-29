<?php
class logger
  {
    private function __construct(){}
    private function __clone(){}
    public function log(string $message): void
    {
      file_put_content(filename:date(format:'Y-m-d').'log', $message, flags:FILE_APPEND);
    }
  }
?> 


?>
