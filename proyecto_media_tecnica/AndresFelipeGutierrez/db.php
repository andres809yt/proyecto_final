<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'Hospital'
) or die(mysqli_erro($mysqli));

?>