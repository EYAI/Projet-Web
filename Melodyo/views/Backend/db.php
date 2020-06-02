<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'melodyo'
) or die(mysqli_erro($mysqli));

?>
