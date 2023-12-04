<?php
    switch($_REQUEST["acao"]){
        case 'cadastrar':
            // Set de timezone para correta inserção de hora e data de cadastro
            date_default_timezone_set('America/Sao_Paulo');
            // Get de informações passadas
            $nome = $_POST["nome"];
            $quant = $_POST["quant"];
            $preco = $_POST["preco"];
            $descr = $_POST["descr"];
            // Set de data e hora do cadastro
            $data = date('Y/m/d');
            $hora = date('h:i:s');

            // Comando SQL que será executado
            $sql = "INSERT INTO produtos (nome, quantidade, preco, descricao, data_cadastro, hora_cadastro) VALUES ('{$nome}', '{$quant}', '{$preco}', '{$descr}', '{$data}', '{$hora}')";

            // Conexão com o banco de dados com execução do comando SQL
            $res = $conn->query($sql);

            // Alertas de sucesso ou erro ao salvar e redirecionamento de página
            if($res==true){
                print "<script>alert('Cadastrado com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Erro ao cadastrar!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
        break;

        case 'editar':
            // Get de informações passadas
            $nome = $_POST["nome"];
            $quant = $_POST["quant"];
            $preco = $_POST["preco"];
            $descr = $_POST["descr"];

            // Comando SQL que será executado
            $sql = "UPDATE produtos SET nome='{$nome}', quantidade='{$quant}', preco='{$preco}', descricao='{$descr}' WHERE id=".$_REQUEST["id"];

            // Conexão com o banco de dados com execução do comando SQL
            $res = $conn->query($sql);

            // Alertas de sucesso ou erro ao salvar e redirecionamento de página
            if($res==true){
                print "<script>alert('Editado com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Erro ao editar!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
        break;

        case 'excluir':
            // Comando SQL que será executado com o id enviado
            $sql = "DELETE FROM produtos WHERE id=".$_REQUEST["id"];

            // Conexão com o banco de dados com execução do comando SQL
            $res = $conn->query($sql);

            // Alertas de sucesso ou erro ao salvar e redirecionamento de página
            if($res==true){
                print "<script>alert('Excluído com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Erro ao excluir!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
        break;
    }
?>