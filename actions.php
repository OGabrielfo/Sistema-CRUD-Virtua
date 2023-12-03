<?php
    switch($_REQUEST["acao"]){
        case 'cadastrar':
            date_default_timezone_set('America/Sao_Paulo');
            $nome = $_POST["nome"];
            $quant = $_POST["quant"];
            $preco = $_POST["preco"];
            $descr = $_POST["descr"];
            $data = date('Y/m/d');
            $hora = date('h:i:s');

            $sql = "INSERT INTO produtos (nome, quantidade, preco, descricao, data_cadastro, hora_cadastro) VALUES ('{$nome}', '{$quant}', '{$preco}', '{$descr}', '{$data}', '{$hora}')";

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Cadastrado com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Erro ao cadastrar!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
        break;

        case 'editar':
            $nome = $_POST["nome"];
            $quant = $_POST["quant"];
            $preco = $_POST["preco"];
            $descr = $_POST["descr"];

            $sql = "UPDATE produtos SET nome='{$nome}', quantidade='{$quant}', preco='{$preco}', descricao='{$descr}' WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Editado com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Erro ao editar!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
        break;

        case 'excluir':
            $sql = "DELETE FROM produtos WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

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