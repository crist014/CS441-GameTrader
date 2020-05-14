<!-- 
    AUTHOR: Collin deKorne
 -->
 <html>
    <?php
    include 'dbh.php';
    session_start();

    if(!empty($_SESSION['username']))
    {
        include 'memberheader.php';
    }
    else{
        include 'indexheader.php';
    }
    ?>
    <div>
        <?php
            if(isset($_POST['submit-search'])){
                $search = mysqli_real_escape_string($conn, $_POST['search']);
                $sql = "SELECT * FROM Listings WHERE item_name LIKE '%$search%' OR item_propose LIKE '%$search%' OR 
                    seller LIKE '%$search%'";
                $result = mysqli_query($conn, $sql);
                $queryResult = mysqli_num_rows($result);
                echo "<p class='search-results'>Search for \"".$search."\" came back with ".$queryResult." results.</p>";
                if($queryResult > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<div class='userlisting'>
                                    <h3>".$row['item_name']."</h3>
                                    <p class='price'>Price: $".$row['item_price']."</p>
                                    <p class='seller'>Seller: ".$row['seller']."</p>
                                    <footer class='info'>
                                    <div class='w3-container'>
                                        <button onclick=\"document.getElementById('id1".$row['item_id']."').style.display='block'\" class='more-info button w3-button w3-blue-grey'>More Info</button>
                                        <div id='id1".$row['item_id']."' class='w3-modal'>
                                            <div class='quick-look w3-modal-content w3-card-4 w3-animate-top' style='max-width:600px'>
                                                <div class='w3-center'><br>
                                                    <span onclick=\"document.getElementById('id1".$row['item_id']."').style.display='none'\" class='close w3-button w3-xlarge w3-hover-red w3-display-topright' title='Close Modal'>&times;</span>
                                                    <div class='w3-section'>
                                                        <ul>
                                                            <li><h3>".$row['item_name']."</h3></li>
                                                            <li><p class='ql-desc'>Description: ".$row['item_desc']."</p></li>
                                                            <li><h4 class='ql-price'>Price: $".$row['item_price']."</h4></li>
                                                            <li><p class='ql-seller'>Seller: ".$row['seller']."</p></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </footer>
                                </div>";
                    }
                }else{
                    echo "<p>No items found with your search!</p>";
                }
            }
        ?>
    </div>
</html>