<h1>Editar Produto </h1>

<?php
    
    $sql_code = "SELECT * FROM clientesmedicamentos WHERE id =".$_REQUEST["id"];
    
    $sql_query = $conn->query($sql_code) or die("ERRO ao consultar! " . $conn->error);
    
    $dados = $sql_query->fetch_object();
    

?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editarMedic">
    <input type="hidden" name="id" value="<?php print $dados->id; ?>">
    <div class="mb-3">
        <label for="nomedomedicamento">Nome do Produto</label>
        <input type="text" value="<?php print $dados->nomedomedicamento; ?>" required class="form-control" placeholder="exemplo: Dipirona 300mg" name="nomedomedicamento" id="nomedomedicamento" data-index="new">
    </div>

    <div class="mb-3">
        <div class="row">
            <div class="col">
            <label for="qtdmedic">Quantidade</label>
            <input type="text" value="<?php print $dados->qtdetipo; ?>" placeholder="exemplo: 30" required class="form-control" name="qtdmedic" id="qtdmedic">
            </div>
            <div class="col">
            <label for="typeEmb">Tipo do produto</label>
            <input type="text" value="<?php print $dados->typemb; ?>" placeholder="exemplo: comprimidos" required class="form-control" name="typeEmb" id="typeEmb">
            </div>
        </div>
    </div>
 
    <div class="mb-3">
    <button type='submit' class="btn btn-primary">Enviar</button>
    </div>

</form>