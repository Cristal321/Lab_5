<?php
    require_once 'config/connect.php';
    $product_id = $_GET['id'];
    $product = mysqli_query($connect, "SELECT * FROM `products` WHERE `id` = '$product_id'");
    $product = mysqli_fetch_assoc($product);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Product</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap');  
    body {
        
	    background-image: url("https://w-dog.ru/wallpapers/9/18/536327208934725/pejzazh-priroda-gavan-ozero-voda-otrazhenie-les-derevya-kamni-nebo-oblaka-kraski-cveta-1920x1200.jpg");
        min-height:100%;
        padding: 10px;
        background-size:cover;
    } 
      input[type=text] {
        background-color: white;
        border: 0.1;
        padding: 15px 30px;
        padding-left: 10px;
        margin: 4px 2px;
        width:250px;
        font-family:'Comfortaa';
      }
      input[type=submit] {
        background-color: #ddeeff;
        border: 0.1;
        padding: 15px 30px;
        padding-left: 10px;
        margin: 4px 2px;
        width:250px;
        font-family:'Comfortaa';
      }
      input[type=number] {
        font-family:'Comfortaa';
      }

</style>
</head>
<body>
<div style="background-color: #e6e6fa; font-family:'Comfortaa';text-align:center; border-radius: 300px; margin-left:100px; margin-right:100px; padding-bottom:30px; padding-top:10px; margin-top:45px;"> 
    <h3 style="font-size: 1.5em;">Изменение информации о туре</h3>
    <form action="vendor/update.php" method="post">
        <input type="hidden" name="id" value="<?= $product['id'] ?>">
        <p>Тур в ...</p>
        <input type="text" name="title" value="<?= $product['title'] ?>">
        <p>Описание тура</p>
        <textarea style="width:400px; height:250px; font-family:'Comfortaa';" name="description"><?= $product['description'] ?></textarea>
        <p>Цена</p>
        <input type="number" name="price" value="<?= $product['price'] ?>"> <br> <br>
        <button style="font-family:'Comfortaa';  background-color: #ddeeff; padding: 15px 30px; margin-bottom:10px;" type="submit">Изменить</button>
    </form>
    <a href="index.php"><input type="submit" value="Назад"></a>
</div>
</body>
</html>