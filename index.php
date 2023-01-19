<?php
require_once 'config/connect.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap');
    th, td {
        padding: 10px;
        font-family:'Comfortaa';
    }

    th {
        background: #bccae0;
    }

    td {
        background: #ddeeff;
    }

    
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
</style>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Путёвка в ...</th>
            <th>Описание тура</th>
            <th>Стоимость</th>
        </tr>
        <div class="name" style="background-color: #e6e6fa; text-align:center; border-radius: 30px; padding-top: 1px; padding-bottom:1px; margin-bottom:20px; ">
                    <H2 style="font-size: 1.8em; font-family:'Comfortaa';">Туры по Росии</H2>
        </div>

        <?php
            $products = mysqli_query($connect, "SELECT * FROM `products`");
            $products = mysqli_fetch_all($products);
            foreach ($products as $product) {
                ?>
                    <tr>
                        <td><?= $product[0] ?></td>
                        <td><?= $product[1] ?></td>
                        <td><?= $product[3] ?></td>
                        <td><?= $product[2] ?>₽</td>
                        <td><a style="color: #0000CD;" href="update.php?id=<?= $product[0] ?>">Изменить</a></td>
                        <td><a style="color: #8b00ff;" href="vendor/delete.php?id=<?= $product[0] ?>">Удалить</a></td>
                    </tr>
                <?php
            }
        ?>
    </table>
    <div style="background-color: #e6e6fa; font-family:'Comfortaa';text-align:center; border-radius: 300px; margin-left:100px; margin-right:100px; padding-bottom:30px; padding-top:10px; margin-top:60px; margin-bottom:60px;"> 
    <h3 style="font-size: 1.5em;">Добавить новый тур</h3>
    <form action="vendor/create.php" method="post">
        <p>Путёвка в ...</p>
        <input type="text" name="title">
        <p>Описание тура</p>
        <textarea style="width:300px; height:150px; font-family:'Comfortaa';" name="description"></textarea>
        <p>Стоимость</p>
        <input style="font-family:'Comfortaa';" type="number" name="price"> <br> <br>
        <button style="font-family:'Comfortaa';  background-color: #ddeeff; padding: 15px 30px;" type="submit"> Добавить новый тур </buttom>
    </form>
    </div>
</body>
</html>
