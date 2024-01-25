<h1>Cadastrar Novo Produto </h1>
<?php
$id=$_GET['id'];


?>
<form  method="$_GET" class="d-flex">
    <input type="hidden" name="page" value="medicamentos">
    <input type="hidden" name="id" value="<?php print $id ?>">
   
    <input class="form-control me-2" type="text" name="buscar" placeholder=" Digite o Produto que deseja pesquisar">
    <button class="btn btn-outline-success"  type="submit">Pesquisar</button>
</form>
<div class='container text-center m-5' id="pesq">
    <div class='row text-start' >

    
        <div class="col-6 text-start">
            <form action="?page=salvar" method="POST">
                <input type="hidden" name="acao" value="cadastrarmedic">
                <input type="hidden" name="id" value="<?php print $id ?>">
            
                <div class="mb-3">
                    <label for="nomedomedicamento">Nome do Produto</label>
                    <input type="text" required class="form-control" placeholder="exemplo: Dipirona 300mg" name="nomedomedicamento" id="nomedomedicamento" data-index="new">
                </div>             
                <div class="mb-3">
                    <div class="row">
                        <div class="col">
                        <label for="qtdmedic">Quantidade</label>
                        <input type="text" placeholder="exemplo: 30" required class="form-control" name="qtdmedic" id="qtdmedic">
                        </div>
                        <div class="col">
                        <label for="typeEmb">Tipo do produto</label>
                        <input type="text" placeholder="exemplo: comprimidos" required class="form-control" name="typeEmb" id="typeEmb">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                <button type='submit' class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
        <div class="col text-start listarMedicamentos overflow-x-hidden overflow-y-auto" style="max-height: 60vh;">
        <H1>Selecione o Produto</H1>
            
            <?php
                if (!isset($_GET['buscar'])) {
                ?>
                    <div>
                        <h3>Digite o nome do Produto que deseja...</h3>
                    </div>
            <?php
            }else{
                $pesquisa = $conn->real_escape_string($_GET['buscar']);
                $sql_code = "SELECT * 
                FROM  listademedicamentos
                WHERE nomedomedicamento LIKE '%$pesquisa%'";
                $sql_query = $conn->query($sql_code) or die("ERRO ao consultar! " . $conn->error);
                if ($sql_query->num_rows == 0) {
                    ?>
                        <div>
                            <h3>Nenhum resultado encontrado...</h3>
                        </div>
                <?php
                } else {
                    while($Medic = $sql_query->fetch_assoc()) {
                        ?>
                        
                        <!-- <div >
                            <a class='text-start link-offset-2 link-underline link-underline-opacity-0' id="<?php print $Medic['id'] ?>"  onclick="nomedomedicamnto(event)"><?php echo $Medic['nomedomedicamento'];  ?></a>
                        </div> -->
                        <button type="button"  style="width: 100%;" class="btn btn-outline-dark m-2"id="<?php print $Medic['id'] ?>"  onclick="nomedomedicamnto(event)"><?php echo $Medic['nomedomedicamento'];  ?></button>
                        <!-- <div class="card">
                            <div class="card-body">
                                <a class='text-start link-dark link-underline-opacity-100-hover link-offset-2 link-underline link-underline-opacity-0' id="<?php print $Medic['id'] ?>"  onclick="nomedomedicamnto(event)"><?php echo $Medic['nomedomedicamento'];  ?></a>
                            </div>
                        </div> -->
                        <?php
                    }
                }
            }
                ?>
                <?php
                print " <script src='scripts.js'></script>";
                ?>
                
        </div>
    </div>
</div>

