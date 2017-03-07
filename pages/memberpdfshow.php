<?php
  $file = 'http://www.pdf995.com/samples/pdf.pdf';
  $filename = 'filename.pdf';
  header('Content-type: application/pdf');
  header('Content-Disposition: inline; filename="' . $filename . '"');
  header('Content-Transfer-Encoding: binary');
  header('Accept-Ranges: bytes');
  @readfile($file);
?>