<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HEMA</title>
</head>
<body>
        <?php
        include 'src/connect.php';
        if ($_POST["product"] != NULL) {
                $q= $hemadb->prepare("SELECT * FROM products WHERE id=".$_POST["product"]."");
                $q->execute();
        } else {
                echo "No product has been selected...";
        }
        ?>
</body>
</html>