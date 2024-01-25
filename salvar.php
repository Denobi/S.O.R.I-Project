<?php
// Declaração das ações que cada botão executa
// Create ou Criar usuario ou produto na lista
// Update ou Atualizar as informções dos respectivo
// Delete ou deletar as informções dos respectivo

    switch ($_REQUEST["acao"]) {
        // A tag acao é enviada atraves de uma informação invisivel 
        case 'cadastrar':
            $nomeCliente = $_POST["nomeCliente"];
            $telefoneCliente = $_POST["telefoneCliente"];
            $cmocliente = $_POST["cmoCliente"];
            $codigoCliente = md5($nomeCliente);
         
            

            $sql = "INSERT INTO clientes (nomeCliente,
                telefoneCliente,
                cmocliente,
                codigoCliente
 
                ) VALUES ('{$nomeCliente}',
                '{$telefoneCliente}',
                '{$cmocliente}',
                '{$codigoCliente}'
            )";
            $res = $conn->query($sql);
            if($res==true){
                print"<script>alert('Cadastrado com sucesso');</script>";
                print"<script>location.href='?page=listar';</script>";
            }else{
               
                print"<script> console.log(err)</script>";
                print"<script>alert('Não foi possivel cadastrar');</script>";
                print"<script>location.href='?page=listar';</script>";
            }

            break;
        case 'cadastrarUsers':
            $codeUser = $_POST["codeUser"];
            $passUser = md5($_POST["passUser"]);
            $typeUser = $_POST["typeUser"];
            
         
            

            $sql = "INSERT INTO acessusers (codeUser,
                passUser,
                typeUser
                ) VALUES ('{$codeUser}',
                '{$passUser}',
                '{$typeUser}'
              
            )";
            $res = $conn->query($sql);
            if($res==true){
                print"<script>alert('Cadastrado com sucesso');</script>";
                print"<script>location.href='?page=index.php';</script>";
            }else{
               
                print"<script> console.log(err)</script>";
                print"<script>alert('Não foi possivel cadastrar');</script>";
                // print"<script>location.href='?page=index.php';</script>";
            }

            break;

            case 'cadastrarmedic':
                $nomedomedicamento = $_POST["nomedomedicamento"];
                $qtdetipo = $_POST["qtdmedic"];
                $typemb = $_POST["typeEmb"];
                $codigocliente = $_POST["id"];
               
    
                $sql = "INSERT INTO clientesmedicamentos (nomedomedicamento,
                    qtdetipo,
                    typemb,
                    codigocliente
     
                    ) VALUES ('{$nomedomedicamento}',
                    '{$qtdetipo}',
                    '{$typemb}',
                    '{$codigocliente}'
                )";
                $res = $conn->query($sql);
                if($res==true){
                    print"<script>alert('$nomedomedicamento foi Cadastrado com sucesso');</script>";
                 
                    print"<script>location.href='?page=medicamentos&id=$codigocliente';</script>";
                }else{
                   
                    print"<script> console.log(erro)</script>";
                    print"<script>alert('Não foi possivel cadastrar');</script>";
                    // print"<script>location.href='?page=listar';</script>";
                }
    
                break;
        
        case 'editar':
            $nomeCliente = $_POST["nomeCliente"];
            $telefoneCliente = $_POST["telefoneCliente"];
            $cmocliente = $_POST["cmoCliente"];



            $sql = "UPDATE clientes SET 
                nomeCliente = '{$nomeCliente}',
                telefoneCliente = '{$telefoneCliente}',
                cmocliente = '{$cmocliente}'
            
            WHERE 
                id=".$_REQUEST["id"];

            $res = $conn->query($sql);
        
            if($res==true){
                print"<script>alert('Editado com sucesso');</script>";
                print"<script>location.href='?page=listar';</script>";
            }else{
               
                print"<script> console.log(erro)</script>";
                print"<script>alert('Não foi possivel Editar');</script>";
                print"<script>location.href='?page=listar';</script>";
            }
            break;
        case 'editarMedic':
            $nomedomedicamento = $_POST["nomedomedicamento"];
            $qtdetipo = $_POST["qtdmedic"];
            $typemb = $_POST["typeEmb"];

            $sql_code = "UPDATE clientesmedicamentos SET 
                nomedomedicamento = '{$nomedomedicamento}',
                qtdetipo = '{$qtdetipo}',
                typemb = '{$typemb}'
                
            
            WHERE 
                id=".$_REQUEST["id"];

            $sql_query = $conn->query($sql_code) or die("ERRO ao consultar! " . $conn->error);

      
            if($sql_query==true){
                print"<script>alert('Editado com sucesso');</script>";
                print"<script>location.href='?page=listar';</script>";
            }else{
               
                print"<script> console.log(erro)</script>";
                print"<script>alert('Não foi possivel Editar');</script>";
                print"<script>location.href='?page=listar';</script>";
            }
            break;
        
            case 'editarUser':
            $codeUser = $_POST["codeUser"];
            $passUser = md5($_POST["passUser"]);
            $typeUser = $_POST["typeUser"];

            $sql_code = "UPDATE acessusers SET 
                codeUser = '{$codeUser}',
                passUser = '{$passUser}',
                typeUser = '{$typeUser}'
                
            
            WHERE 
                id=".$_REQUEST["id"];

            $sql_query = $conn->query($sql_code) or die("ERRO ao consultar! " . $conn->error);

      
            if($sql_query==true){
                print"<script>alert('Editado com sucesso');</script>";
                print"<script>location.href='?page=edituser';</script>";
            }else{
               
                print"<script> console.log(erro)</script>";
                print"<script>alert('Não foi possivel Editar');</script>";
                print"<script>location.href='?page=edituser';</script>";
            }
            break;
        
        case 'excluir':
            $sql = "DELETE FROM clientes WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);
            if($res==true){
                print"<script>alert('Excluido com sucesso');</script>";
                print"<script>location.href='?page=listar';</script>";
            }else{
               
                print"<script> console.log(erro)</script>";
                print"<script>alert('Não foi possivel Excluir');</script>";
                print"<script>location.href='?page=listar';</script>";
            }
            break;
        case 'excluirUser':
            $sql = "DELETE FROM acessusers WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);
            if($res==true){
                print"<script>alert('Excluido com sucesso');</script>";
                print"<script>location.href='?page=deletuser';</script>";
            }else{
               
                print"<script> console.log(erro)</script>";
                print"<script>alert('Não foi possivel Excluir');</script>";
                print"<script>location.href='?page=deletuser';</script>";
            }
            break;
        case 'excluirMedic':
            
            $sql_code = "DELETE FROM clientesmedicamentos WHERE id=".$_REQUEST["id"];
            
            $sql_query = $conn->query($sql_code) or die("ERRO ao consultar! " . $conn->error);

            
            if($sql_query==true){
                print"<script>alert('Excluido com sucesso');</script>";
                print"<script>location.href='?page=listar';</script>"; 
            }else{
               
                print"<script> console.log(erro)</script>";
                print"<script>alert('Não foi possivel Excluir');</script>";
                print"<script>location.href='?page=listar';</script>";
            }
            break;
    }
    ?>