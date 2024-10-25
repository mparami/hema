<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HEMA</title>
</head>
<body>
        <form method="post" action="result.php">
                <table>
                        <tr>
                                <td><input type="radio" name="product" value=1/></td><td><label for="">handoek</label></td>
                        </tr>
                        <tr>
                                <td><input type="radio" name="product" value=2/></td><td><label for="">broek</label></td>
                        </tr>
                        <tr>
                                <td><input type="radio" name="product" value=3/></td><td><label for="">shirt</label></td>
                        </tr>
                        
                </table>
                <table>
                        <tr>
                               <td><label for="">Amount: </label></td><td><input type="number" name="inum" maxlength="1" size="1"/></td>
                        </tr>
                        <tr>
                                <td><input type="submit" name="submit" value="Confirm"/></td>
                        </tr>
                </table> 
        </form>
</body>
</html>