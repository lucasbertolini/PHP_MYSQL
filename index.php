<?php
require 'db_info.php';
require 'request.php';

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