

<?php



    $idclient = $_GET["id"];

    $sql = "SELECT * FROM clientes WHERE id =".$idclient;
    
    $res =  $conn->query($sql) or die ($conn->error);
    
    $row = $res->fetch_object();
   
    // gerar pdf

  

?>  

<div id="relatoriosClient" class=" container shadow-lg p-3 mb-5 rounded">
    <!-- Image and text -->
    <div class="card" >
        <div class="d-flex justify-content-around align-items-center ">
            
            <img src="imgs/logo.svg" style="height:10vh;" class="" alt="">
            <h1>Escritório </h1>
        </div>
        
        
    </div>
    <div class="card" id="cardsProtoE" style="margin-top:1rem;">
        <div class="card-body">
            <h1 class="d-flex justify-content-center">Protocolo de Entrega</h1>
            <div class="disclaime">
                <p>Declaro que recebi da<strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. </strong>os medicamentos abaixo solicitados nas receitas anexas de 
                    <strong style="font-size:1.3rem;"> <?php print $row->nomeCliente; ?> - Numero de Matrícula <?php print $row->cmocliente; ?></strong> 
                </p>
            </div>
        </div>
        <div class="card-body" style="margin-top:-0.3rem;">
            <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Nome do Medicamento</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Tipo do Produto</th>
                
                </tr>
            </thead>
            <tbody id="tr">
                <?php 
                    $codeClient=$row->codigoCliente;
                    $sql_code = "SELECT * FROM  clientesmedicamentos WHERE codigocliente LIKE '%$codeClient%'";
                    
                    $sql_query = $conn->query($sql_code) or die ($conn->error);

                    while($dados = $sql_query->fetch_assoc()) {
                    ?>
                        <tr >
                            <td><?php echo $dados['nomedomedicamento'] ;?></td>
                            <td><?php echo $dados['qtdetipo'] ;?></td>
                            <td><?php echo $dados['typemb'] ;?></td>

                        </tr>
                    <?php
                }
                
                
                ?>
                
                
            </tbody>
            </table>
        </div>
    </div>
    
    
    
</div>
<button type="button" id="generatorPDF" class="btn btn-success" onclick='gerarPDFS()' style=" width:70%; margin:1.3rem 15%;" >Criar PDF</button>

<script>

function gerarPDFS(){
    const baseRelatorio = document.querySelector('#cardsProtoE').innerHTML;


    let estilo="<style>";
    estilo += "table{width:100%; font:1.1rem Calibri;padding-top:-1.2rem;}";
    estilo += "table, th, td{border:solid 2px #292929; border-collapse: collapse;}";
    estilo += "th{background-color: #A6A6A6;color: #292929;}";
    estilo += "footer{display:flex;position:absolute;bottom:0;justify-content:center;align-items:center;flex-direction: column;width:100%;}";
    estilo += "#div-logo{display:flex;justify-content:space-around;align-items:center;width:100%;}";
    estilo += "#div-veri{margin-top:1.6rem;}";
    estilo += "</style>";
    const win = window.open('', '', 'height=auto,width=auto');
    win.document.write(estilo);
    win.document.write('<div id="div-logo">');
    win.document.write('<img src="imgs/logo.svg" style="height:10vh;" class="" alt="">');
    win.document.write('<h1>Escritório </h1>');
    win.document.write('</div>');
    win.document.write(baseRelatorio);
    win.document.write('<div id="div-veri">');
    win.document.write('<h4>Nome:______________________________</h4>');
    win.document.write('<h4>CPF:______________________________</h4>');
    win.document.write('<h4>Assinatura:______________________________</h4>');
    win.document.write('<h4>Data:___/___/_____</h4>');
    win.document.write('</div>');
    win.document.write('<footer>');
    win.document.write('<p>1600 Amphitheatre Parkway, Mountain View, CA, 94043</p><p> São Paulo - SP- Tel.: 11940028922</h4>');
    win.document.write('</footer>');

    win.print();


    }
   
</script>