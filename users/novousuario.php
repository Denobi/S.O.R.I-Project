<h1 class="h1title" >Cadastrar Novo Cliente </h1>
<div class='container text-center vrs1' >
    <div class='row text-start pesq'>
        <div class="col-9 text-start">
            <form action="?page=salvar" method="POST" class='inputs '>
                <input type="hidden" name="acao" value="cadastrar">
                
                <div class="mb-3">
                    <label class='labelTitles' for="nomeCliente">Nome do Cliente</label>
                    <input type="text" required class="form-control" name="nomeCliente" id="nomeCliente" data-index="new">
                </div>
                <div class="mb-3">
                    <label class='labelTitles' for="telefoneCliente">Telefone Cliente</label>
                    <input type="number" required class="form-control" name="telefoneCliente" id="telefoneCliente">
                </div>
                            
                <div class="mb-3">
                    <label class='labelTitles' for="cmoCliente">Numero Matrícula</label>
                    <input type="number" required class="form-control" name="cmoCliente" id="cmoCliente">
                </div>
                <div class="mb-3">
                <button type='submit' class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>