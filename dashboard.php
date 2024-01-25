<?php

  session_start();
  if (empty($_SESSION)) {
    print"<script>location.href='../index.php'</script>";
  }




?>
<!-- Tela para não Admins -->
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>S.O.R.I</title>
    <link rel="shortcut icon" type="imagex/png" href="./imgs/settings.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg " id="nav-desq">
  <div class="container-fluid ">
    <a class="navbar-brand" href="dashboard.php">
      <img src="imgs/SORI.png" alt="Bootstrap" height="74">
    </a>
    <a class="nav-link active" aria-current="page" href="./login/logout.php" style="margin-right:2rem;">Logout <i class="bi bi-door-open"></i></a>
   
  </div>
</nav>
   <div class="container-fluid" id="bgmat">

   <div class="row">
    <div class="col mt-5">
      <div class='container vrs1 shadow-lg p-3 mb-5 rounded' >
              <div class='row'>
                <div class='col-7' >
                <img src='imgs/settings.png' class="img-fluid" >
                </div>
                <div class='col d-flex justify-content-center align-items-center flex-column'>
                  <div class='text-center'>
                  <h1 style='font-size: 3.5rem;font-weight: bold;'>S.O.R.I</h1>
                  <p style='font-weight: bold;'>Sistema Online de Recibos Instantâneos</p>
                  </div>
                  <div>
                    <p class='text-wrap fs-6'>
                              O SORI é uma plataforma revolucionária que simplifica a geração e envio instantâneo de recibos online. Permite a criação de recibos personalizados em segundos, agilizando o trabalho de profissionais. Elimina a burocracia e economiza tempo na criação manual de recibos, o que resulta em um aumento de produtividade.
                        </br>
                        </br>
                        Além disso, oferece armazenamento seguro e acesso instantâneo aos recibos de qualquer lugar. Ao emitir comprovantes, torna-se uma ferramenta essencial para a organização, proporcionando mais tempo para focar no que realmente importa no seu negócio.
                    </p>
                  </div>
                </div>
              </div>
            </div>
    </div>
   </div>
   
   </div>




   <script src="scripts.js"></script> 
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>