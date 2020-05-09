<!DOCTYPE html>
<html>
    <head>
        <style>
            tr{
                background-color: brown;
            }
            .tr1:hover{
                background-color: yellow;
            } 


            .tr2{
                background-color:red;
            }
            .tr3{
                background-color:blue;
            }
        </style>

        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form name="ftable" action="tablecontroller.php" method="POST">
            <table border="1px" solid black>
                <tr>
                    <th colspan="2">Table</th>
                <tr>
                <tr>
                    <td class="tr1">Table Name</td>
                    <td><input type="text" name="txttblname"></td>

                </tr>
                <tr>
                    <td class="tr2">Table Capacity</td>
                    <td><input type="text" name="txtcapacity"></td>
                </tr>
                <tr>
                    <td class="tr3" colspan="2" align="center"><input type="submit" name="btnsubmit"></td>
                </tr>
            </table>
        </form>

    </body>
</html>
