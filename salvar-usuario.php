<?php
include_once 'C:\xampp\htdocs\ProjectPHP\DAL\conexao.php';
    switch ($_REQUEST["acao"]){
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $data_nasc = $_POST["data_nasc"];

        $sql = "INSERT INTO cadastro usuario (nome, email, senha, data_nasc) VALUES('{$nome}'
        ,'{$email}', '{$senha}', '{$data_nasc}')";

        
        $res = $conn -> query($sql);

        if($res==true){
            print "<script>alert('Cadastro com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";
        }else{
            print "<script>alert('Não foi possível cadastrar');</script>";
            print "<script>location.href='?page=listar';</script>";
        }
            break;
        case 'editar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $data_nasc = $_POST["data_nasc"];

            $sql = "UPDATE usuarios SET
                        nome='{$nome}',
                        email='{$email}',
                        senha={$senha}',
                        data_nasc='{$data_nasc}'
                    WHERE
                        id=".$REQUEST["id"];

            $res = $conn -> query($sql);

            if($res==true){
                print "<script>alert('Editado com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possível editar');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

            break;
        case 'excluir':
            
            $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

            if($res==true){
                print "<script>alert('Excluido com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possível excluir');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

            break;
    }