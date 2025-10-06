<?php
$host = "localhost";
$user = "root";
$pass = "sql123";
$dbname = "bd_agenda_t343";

//utilização do bloco try catch para controlar melhor possíveis erros

try {
    $connxBD = new PDO("mysql:host=$host;dbname=$dbname", $user,$pass);

    //ATIVANDO O MODO DE ERROS
    //com os atributos abaixo, do PDO, o sistema irá parar e mostrar o erro caso exista algum erro na chamada do banco

    $connxBD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
   

} catch (PDOException $e) {
    $erro = $e->getMessage();
    echo "<h2>Ocorreu um erro na CONEXÃO com o Banco</h2>" . $erro;
}
