<!-- 
    AUTHORS: Collin deKorne | Darnel Cristobal
 -->
<?php
    include 'memberheader.php';
    session_start();
    $seller = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Profile</title>
    </head>

    <body>
        <?php
        echo "<b><center>Welcome ".$seller."! </b></center><br>";
        ?>
        <p>All of Your Listings</p>

        <table>
            <tr>   
                <th>Item ID</th>
                <th>Price</th>
                <th>Item</th>
            </tr>
            <?php
            //ATTENTION**** Store item_id in user information 
                $sql = "SELECT item_id, item_price, item_name, item_propose FROM Listings WHERE seller ='".$seller."'";
                $result = $conn-> query($sql);

                if($result->num_rows > 0)
                {
                    while($row = $result-> fetch_assoc())
                    {
                        echo "<tr><td>". $row["item_id"] ."</td><td>". $row["item_price"] ."</td><td>". $row["item_name"]."</td></tr>";
                    }
                    echo "</table>";
                
                }
                else
                {echo "0 results";}
                $conn-> close();
            ?>
        </table>

        <footer>
            <div class="levelup">© 2020 Level Up, Inc.</div>
        </footer>
    </body>
</html>