<?php
echo '<pre>';
if($_SERVER['REQUEST_METHOD']== 'POST') {
    $nome=htmlspecialchars($_REQUEST['nome']);
    $db = new PDO('mysql:host=localhost;dbname=Oficina','root','');
    $db=$db->prepare("INSERT INTO Clientes (nome) VALUES ('$nome');");
    $db->execute();


   $db = new PDO('mysql:host=localhost;dbname=Oficina','root','');
    $db=$db->prepare("SELECT nome FROM Clientes ORDER BY id DESC LIMIT 5;");
    $db->execute();
    $result = $db->fetchAll(PDO::FETCH_ASSOC);    
    print_r($result); 
}