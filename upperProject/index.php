<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP page</title>
</head>
<body>

<form action="upload_img.php" method="post" enctype="multipart/form-data">
    <input type="text" placeholder="Тип фильтра" name="typeFilter"> <br><br>
    <input type="text" placeholder="Название проекта" name="nameProject"> <br><br>
    <input type="text" placeholder="Ссылка" name="link"> <br><br>
    <input type="file" name="image"> <br><br>
    <input type="text" placeholder="Пароль" name="password"> <br><br>
    <button type="submit" name="submit">Загрузить </button> <br><br>
</form> <br><br> <br><br>

<form action="front_img.php" method="get">
    <button type="submit">Показать JSON</button>
</form> <br><br><br><br>

<form action="delete_img.php" method="post">
    <input type="number" placeholder="Удалить по ID" name="deleteId"> <br><br>
    <button type="submit">Удалить</button>
</form>

</body>
</html>