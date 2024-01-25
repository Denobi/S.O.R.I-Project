<h1 class="h1title" >Cadastrar Novo Usuario </h1>
<!-- Form usuado para criar novos usuarios -->
<div class='container text-center vrs1' >
    <div class='row pesq'>
        <div class="col-9 text-start">
            <form action="?page=salvar" method="POST" class='inputs'>
                <input type="hidden" name="acao" value="cadastrarUsers">
                
                <div class="mb-3">
                    <label class='labelTitles' for="codeUser">Codigo Pessoal</label>
                    <input type="text" required class="form-control" name="codeUser" id="codeUser" data-index="new">
                </div>
                <div class="mb-3">
                    <label class='labelTitles' for="passUser">Senha Pessoal</label>
                    <input type="text" required class="form-control" name="passUser" id="passUser">
                </div>
                            
                <div class="mb-3">
                    <label class='labelTitles' for="typeUser">Nivel de Acesso</label>
                    <select id="typeUser" name="typeUser" class="form-control">
                        <option selected>Opções</option>
                        <option value="Admin">Admin</option>
                        <option value="User">User</option>
                    </select>
                    
                </div>
             
                <div class="mb-3">
                <button type='submit' class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
        <div class="pb-3 col-3 d-flex justify-content-center align-items-center flex-column-reverse">
            
            <h3 class="text-center order-3 mb-3"> Outras Opções </h3>
            <button class="btn btn-lg btn-warning order-2 mb-3" onclick="location.href='?page=edituser'">Editar Acesso</button>
            <button class="btn btn-lg btn-danger mb-3" onclick="location.href='?page=deletuser'">Excluir Acesso</button>
    
        
        </div>
    </div>
</div>