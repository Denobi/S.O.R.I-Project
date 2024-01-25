<?php
session_start();
if(empty($_POST)or(empty($_POST['codeUser'])or(empty($_POST['passUser'])))){
  print"<script>location.href='index.php'</script>";
}
 include('../config.php');

 $usuario = $_POST['codeUser'];
 $senha = md5($_POST['passUser']);

 $sql="SELECT * FROM acessusers WHERE codeUser = '{$usuario}' AND passUser = '{$senha}'";
 $res = $conn->query($sql) or die($conn->error);

 $row = $res->fetch_object();

 $qtd = $res->num_rows;

 if ($qtd>0) {
  $_SESSION['codeUser']=$usuario;
  $_SESSION['passUser']=$senha;
  $_SESSION['typeUser']=$row->typeUser;
  if ($row->typeUser === 'Admin') {
    print"<script>location.href='../index.php'</script>";
  }
  else{
    print"<script>location.href='../dashboard.php'</script>";
  }

 }else{
  print"<script>alert('Usuario ou Senha Incorretos')</script>";
  print"<script>location.href='index.php'</script>";

 }
 ?>