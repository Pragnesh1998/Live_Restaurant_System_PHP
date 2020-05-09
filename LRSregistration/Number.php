<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>


            <?php
            include '\connection.php';
            $query = "select * from tbl_number limit 6,1";
            $query1="select max(id) As id from tbl_number";
            $query2="select * from tbl_number limit 5,1";
            $query3="select * from tbl_number limit 7,1";

            $result = mysqli_query($conn, $query);
            $result1=mysqli_query($conn,$query1);
            $result2=mysqli_query($conn,$query2);
            $result3=mysqli_query($conn,$query3);
            
            if ($result) {
                while ($row= mysqli_fetch_array($result)) {
                    echo "second highest number is:" . $row['id']."<br/>";
                 
                }
            }
                if($result1){
                    while($row1=mysqli_fetch_array($result1)){
                        echo "highest number is:".$row1['id']."<br/>";
                    }
                }
   if($result2){
                    while($row2=mysqli_fetch_array($result2)){
                        echo " third highest number is:".$row2['id']."<br/>";
                    }
                }
            if($result3){
                    while($row3=mysqli_fetch_array($result3)){
                        echo "last number is:".$row3['id'];
                    }
                }
   
            ?>
    </body>
</html>
