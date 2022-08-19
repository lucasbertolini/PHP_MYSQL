<?php
$userName='root';
$password='';


$db = new PDO('mysql:host=localhost;dbname=Oficina','root','');

echo '<pre>';
if($_SERVER['REQUEST_METHOD']== 'POST') {
    $nome=htmlspecialchars($_REQUEST['nome']);
    $db=$db->prepare("INSERT INTO Clientes (nome) VALUES ('$nome');");
    $db->execute();


   $db = new PDO('mysql:host=localhost;dbname=Oficina','root','');
    $db=$db->prepare("SELECT nome FROM Clientes ORDER BY id DESC LIMIT 5;");
    $db->execute();
    $result = $db->fetchAll(PDO::FETCH_ASSOC);    
    print_r($result);
    
    
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP || MySQl</title>
</head>
<body>
    <form  method='post' action="<?php echo $_SERVER['PHP_SELF'];?>">
        nome:<input type="text" name='nome'>
        <input type="submit">
    </form>
    
</body>
</html>