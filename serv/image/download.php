<?php
  if(isset($_REQUEST["file"])){

      // Get parameters
      $file = urldecode($_REQUEST["file"]); // Decode URL-encoded string
      //echo $file;
      $filepath = "../../img/" . $file;
      //echo $filepath;
      echo basename($filepath);
      if(file_exists($filepath)) {
          header('Content-Description: File Transfer');
          header('Content-Type: application/octet-stream');
          header('Content-Disposition: attachment; filename='. basename($filepath));
          header('Expires: 0');
          header("Content-Transfer-Encoding: binary");
          header('Cache-Control: must-revalidate');
          header('Pragma: public');
          header('Content-Length: ' . filesize($filepath));
          flush();
          readfile($filepath);
          exit;
      }
  }
?>