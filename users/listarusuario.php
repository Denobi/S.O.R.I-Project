

<h1 class="h1title">Lista de usuarios</h1>
<form  method="$_GET" class="d-flex pesq">
    <input type="hidden" name="page" value="listar">
    <input class="form-control me-2" type="text" name="buscar" placeholder=" Digite o Cliente ou Numero Matrícula que deseja pesquisar">
    <button class="btn btn-outline-success"  type="submit">Pesquisar</button>
</form>
<div class='container text-center m-5 container-f shadow-lg p-3 mb-5 rounded' >
    <div class='row text-start'>
        
        <?php
        if(!isset($_GET['buscar'])){
            ?> 
                <div class="card-footer text-center">
                    Digite algo para pesquisar
                </div>
                <?php
        }else{
                $pesquisa = $conn->real_escape_string($_GET['buscar']);
                $sql_code="SELECT * FROM clientes WHERE nomeCliente LIKE '%$pesquisa%' OR cmocliente LIKE '%$pesquisa%'  ";
                $sql_query = $conn->query($sql_code) or die ($conn->error);
            

                if($sql_query != ""){
                    while ($dados = $sql_query->fetch_assoc()) {
                        
                        ?>
                         <div class="col-6 text-start">
                            <p class='text-start'> Nome do cliente <h1><?php echo $dados['nomeCliente'];  ?></h1></p>
                            <p class='text-start'>Telefone do cliente <h3><?php echo $dados['telefoneCliente'];?></h3></p>
                            <p class='text-start'>Numero Matrícula <h3><?php echo $dados['cmocliente'];?></h3></p>
                            <?php
                                 print "<td>
                                 <button onclick=\" location.href='?page=editar&id=".$dados['id']."' \" class='btn btn-success'>Editar</button>
                                 <button onclick=\" if(confirm('Tem certeza que deseja excluir')){location.href='?page=salvar&acao=excluir&id=".$dados['id']."'}else{false;}\" class='btn btn-danger'>Excluir</button>
                                </td>";
                            ?>
                        </div>
                        <div class="col text-start " >
                            <h1 class="pb-4">Lista de Itens</h1>
                            <div class="overflow-auto p-2" style="height:70vh">
                            <?php
                                if (!isset($dados['codigoCliente'])) {
                                    ?>
                                <div>
                                    <h3>Digite algo para pesquisar...</h3>
                                </div>
                                <?php
                                }else{
                                    $pesquisa = $dados['codigoCliente'];
                                    $sql_code = "SELECT * 
                                    FROM  clientesmedicamentos
                                    WHERE codigocliente LIKE '%$pesquisa%'";
                                    $sql_query = $conn->query($sql_code) or die("ERRO ao consultar! " . $conn->error);
                                }
                                if ($sql_query->num_rows == 0) {
                                    ?>
                                <div>
                                    <h3>Nenhum resultado encontrado...</h3>
                                </div>
                                <?php
                                } else {
                                    while($dadosMedic = $sql_query->fetch_assoc()) {
                                        ?>
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <p class='text-start' >Nome do Produto <h1><?php echo $dadosMedic['nomedomedicamento'];  ?></h1></p>
                                                <p class='text-start'>Quantidade por embalagem <h3><?php echo $dadosMedic['qtdetipo'];?></h3></p>
                                                <p class='text-start'>Tipo do produto <h3><?php echo $dadosMedic['typemb'];?></h3></p>
                                            <?php
                                                print "<td>
                                                <button onclick=\" location.href='?page=editarmedic&id=".$dadosMedic['id']."' \" class='btn btn-success'>Editar</button>
                                                <button onclick=\" if(confirm('Tem certeza que deseja excluir')){location.href='?page=salvar&acao=excluirMedic&id=".$dadosMedic['id']."'}else{false;}\" class='btn btn-danger'>Excluir</button>
                                                </td>";
                                            ?>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>

                            </div>
                            <?php

                                 print "
                                 <div class='m-3'>
                                 <button onclick=\" location.href='?page=medicamentos&id=".$dados['codigoCliente']."' \" class='btn btn-success'>Adicionar </button>
                                 <button class='btn btn-danger' onclick=\" location.href='?page=revisar&id=".$dados['id']."' \" >Criar Relatorio </button>
                                 </div>
                                ";
                                
                            ?>
                            <script src="scripts.js"></script>
                        </div>

                    
                    <?php
                    }
                }else{
                     
                    
                    ?> 
                    
                        <div class="card-footer border border-primary text-start">
                            NENHUM CLIENTE ENCONTRADO
                        </div> 
                    <?php
                }
                ?>


            
            <?php
        }
            ?>
    </div>
</div>
