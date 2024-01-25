<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>S.O.R.I</title>
    <link rel="shortcut icon" type="imagex/png" href="../imgs/settings.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    
    
</head>
<body class="body" style=" overflow: hidden;">
    <div class="login">
        <div class="container-fluid ctnDados" >
            <div class="rowsInfos">
                <div id="cardsInfos">
                    <div class="">
                        <h3>Acesso Restrito</h3>
                    
                        <form action="login.php" method="POST">
                            
                                <div class="mb-3">
                                    <label for="codeUser">Codigo Pessoal</label>
                                    <input type="text" name="codeUser" id="codeUser" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="passUser">Senha Pessoal</label>
                                    <input type="password" name="passUser" id="passUser" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">ACESSAR</button>
                                </div>
                            
                        </form>
                    </div>
                    
                        
                
                </div>
                <div id="cardsImg">
                    <div class="text-content">
                        <img src="../imgs/SORI.png" class="imgs">
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>