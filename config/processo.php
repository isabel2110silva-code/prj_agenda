<?php
    //A secção deve ser iniciada para receber as mensagens

    session_start();

    include_once("url.php");
    include_once("conexao.php");

    //Objeto que conterá todos os registros da tabala de contato

    $contatos= [];

    $query = "SELECT * FROM tb_contatos";


    //O objeto result contém todos os dados da conexão com o banco + o comando que mostra os dados da tabela contato

    $result = $connxBD->prepare($query);

    $result->execute();

    //mostrar todos os dados por meio da PDO
    $contatos = $result->fetchall();

