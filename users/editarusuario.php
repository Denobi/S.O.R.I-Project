<h1>Editar Cliente</h1>

<?php
    $sql = "SELECT * FROM clientes WHERE id=".$_REQUEST["id"];

    $res =  $conn->query($sql);
    
    $row = $res->fetch_object();

?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row ->id; ?>">
    <div class="mb-3">
        <label for="nomeCliente">Nome do Cliente</label>
        <input type="text" value="<?php print $row ->nomeCliente; ?>" required class="form-control" name="nomeCliente" id="nomeCliente" data-index="new">
    </div>
    <div class="mb-3">
        <label for="telefoneCliente">Telefone Cliente</label>
        <input type="number" value="<?php print $row ->telefoneCliente; ?>" required class="form-control" name="telefoneCliente" id="telefoneCliente">
    </div>
                
    <div class="mb-3">
        <label for="cmoCliente">Código CMO</label>
        <input type="number" required value="<?php print $row ->cmocliente; ?>" class="form-control" name="cmoCliente" id="cmoCliente">
    </div>
 
    <div class="mb-3">
    <button type='submit' class="btn btn-primary">Enviar</button>
    </div>

</form>