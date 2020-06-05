<?php 
    require_once("includes/conexao/connection.php"); 
    //https://www.php.net/manual/pt_BR/function.require.php
    
    // echo "<br> Se falhar o require ele não executa aqui <br> <br> familia dinossauro"; 

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Aula PHP + BD </title>
</head>
<body>

<?php
    try {

        $parametroLogin = 'joca'; //$_POST['txtlogin'] ; 
        $parametroSenha = '123mudar'; //$_POST['txtsenha'] ; 

        $comandoSQL = 'select 
                                cd_usuario, nm_usuario, 
                                nm_login, nm_email 
                            from tb_usuario
                                where 
                        nm_login =  ' . $conn->quote($parametroLogin) . 
                        ' and  ds_senha = ' . $conn->quote($parametroSenha) ; 
         
        // var_dump ( $comandoSQL) ; die ;

        $dados = $conn->query( $comandoSQL ); 

        echo ("<br>Resultados<br>" ); 

        foreach($dados as $linha) {
            // echo ($linha[0] ."<br>" ); 
            echo ("Olá " . $linha["nm_usuario"] ."<br>" ); 
            // echo ($linha[2] ."<br>" ); 
            // echo ($linha[3] ."<br>" ); 
        }

        echo 'Sucesso!';
    } catch (PDOException  $Exception) {
        echo "Erro: " . $Exception->getMessage( ) . "  -  Codigo: " . $Exception->getCode( ) ;
    }

?>

</body>
</html>
