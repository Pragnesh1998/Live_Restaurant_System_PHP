<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form name="fitem" action="itemcontroller.php" method="POST">
            <table border="1px">
                <tr>
                    <th colspan="3">food item</th>
                </tr>
                <tr>
                    <td>Food_name</td>
                    <td><input type="text" name="txtfname">
                </tr>
                <tr>
                    <td>Food_price</td>
                    <td><input type="text" name="txtprice">
                </tr>
                <tr>
                    <td>Subcategory</td>
                    <td>
                        <select name="drdscategory" value="drdscategory">
                            <option value="2">Panjabi</option>
                            <option value="3">vegetable</option>
                            <option value="4">Roti</option>
                            <option value="5">Naan<option></td>
                        </select>                    
                </tr>
                <tr>
                    <td colspan="3" align="center"><input type="submit" name="btnsubmit"></td>
                </tr>
            </table>
        </form>       
       
    </body>
</html>
