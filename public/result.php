<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HEMA</title>
</head>
<body>
        <?php
        include "src/connect.php";
        if ($_POST["product"] != NULL) {
                $q= $hemadb->prepare("SELECT * FROM products WHERE id=:product");
                $q->bindParam(":product", $_POST["product"]);
                $q->execute();
                $products=$q->fetchAll(PDO::FETCH_ASSOC);
                
        } else {
                echo "No product has been selected...";
        }
        foreach ($products as $prod):?>
        <?php 
        switch ($prod['id']) {
                case 1: $sale = 0.2;
                        break;
                case 2: $sale = 0.3;
                        break;
                case 3: $sale = 0.5;
                        break;
                default: $sale = NULL;
                        break;
        }
        ?>
        <b><?=$prod['name']?></b><span style="color:red;"> -<?=$sale * 100?>%</span><hr>
        <span>Amount: </span><b><?=$_POST["inum"]?></b>
        <?php endforeach;?>
</body>
</html>