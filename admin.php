<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/admin.css">
</head>
<body>
    <?php echo "Добрый день, ".$_SESSION['username'];?>
    <div class="block">    <h1 class="hi">АДМИН-ПАНЕЛЬ</h1>
    <a href="admin/uslugi.php"class="hi">Редактирование услуг</a>
</div>

</body>
</html>