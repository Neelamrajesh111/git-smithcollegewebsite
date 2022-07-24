<html>
    <body>
        <?php
        include 'db_con.php';
         $result = mysqli_query($conn, "SELECT * FROM studentdetails");
        ?>
        <table border="1">
            <tr>
                <td>ID</td>
                <td>First name</td>
                <td>Last Name</td>
                <td>City name</td>
                <td>Email</td>
                <td>Created on</td>

            </tr>
            <?php
            $i=0;
            while($row=mysqli_fetch_array($result)){
            ?>
            <tr>
              <td><?php echo $row['id']?></td>  
              <td><?php echo $row['first_name']?></td>
              <td><?php echo $row['last_name']?></td>
              <td><?php echo $row['city_name']?></td>
              <td><?php echo $row['email']?></td>
              <td><?php echo $row['time'];?></td>
              </tr>

              <?php
              $i++;
            }
              ?>
            
        </table>

    </body>
</html>







