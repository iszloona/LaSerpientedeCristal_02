<?php
include("conexao.php");

switch ($_REQUEST["acao"]){
    case 'cadastrar':
        $nome = $_POST["nome"];
        $telefone = $_POST["telefone"];
        $documento = $_POST["documento"];
        $email = $_POST["email"];

        $sql = "INSERT INTO cliente (nome, telefone, documento, email) VALUES(
            '{$nome}', '{$telefone}',  '{$documento}',  '{$email}'
        ) ";

        $res = $mysqli-> query($sql);

        IF($res==true){
            print "<script>alert('cadastro com sucess'); </script>";
            print "<script>location.href='index.php';</script>";
        }else{
            print "<script>alert('deu erro'); </script>";
        }
        break;

        case 'cadastrar_reserva':
            $data_checkin = $_POST["data_checkin"];
            $data_checkout = $_POST["data_checkout"];
    
        
                // Inserir a reserva
                $sql = "INSERT INTO reservas ( data_checkin, data_checkout) VALUES (
                     '{$data_checkin}', '{$data_checkout}'
                )";
        
                $res = $mysqli->query($sql);
        
                if ($res == true) {
                    print "<script>alert('Reserva e cliente cadastrados com sucesso!');</script>";
                    print "<script>location.href='reserva_cad.php';</script>";
                } else {
                    print "<script>alert('Erro ao realizar a reserva.');</script>";
                }
            
            break;
        

        case 'editar':
            break;

            case 'excluir':
                break;

}