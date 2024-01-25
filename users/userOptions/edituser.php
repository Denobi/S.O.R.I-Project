<h1 class="h1title">Editar Usuarios</h1>
<form  method="$_GET" class="d-flex pesq">
    <input type="hidden" name="page" value="edituser">
    <input class="form-control me-2" type="text" name="buscar" placeholder=" Digite o Codigo Pessoal que deseja pesquisar">
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
                $sql_code="SELECT * FROM acessusers WHERE codeUser LIKE '%$pesquisa%'";
                $sql_query = $conn->query($sql_code) or die ($conn->error);
            

                if($sql_query != ""){
                    while ($dados = $sql_query->fetch_assoc()) {
                        
                        ?>
                        
                         <form action="?page=salvar" method="POST">
                            <input type="hidden" name="acao" value="editarUser">
                            <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                            <div class="mb-3">
                                <label for="codeUser">Codigo Pessoal</label>
                                <input type="text" name="codeUser" value="<?php echo $dados['codeUser']; ?>" id="codeUser" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="passUser">Senha Pessoal</label>
                                <input type="text" name="passUser" id="passUser" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class='labelTitles' for="typeUser">Nivel de Acesso</label>
                                <select id="typeUser" name="typeUser" class="form-control">
                                    <option >Opções</option>
                                    <option value="Admin">Admin</option>
                                    <option value="User">User</option>
                                </select>
                                
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Editar</button>
                            </div>
                        
                        </form>
                          <?php
                    }
                }
            }
          ?>
                        </div>
                    
    </div>
</div>
               