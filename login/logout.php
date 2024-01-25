<?php
session_start();
  unset($_SESSION['codeUser']);
  unset($_SESSION['passUser']);
  unset($_SESSION['typeUser']);
  session_destroy();
  header("location:index.php");
  exit;


