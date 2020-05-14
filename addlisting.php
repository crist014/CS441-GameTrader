<!-- 
    AUTHORS: Collin deKorne | Darnel Cristobal
 -->
<?php
    include 'dbh.php';
    session_start();
    $item = $_POST['item_name'];
    $price = $_POST['item_price'];
    $proposal = $_POST['item_propose'];
    $id='';
    $itemDesc = mysqli_real_escape_string($conn, $_POST['item_description']);
    $seller = $_SESSION['username'];

    if(!empty($item) && !empty($itemDesc) && (!empty($price) || !empty($proposal)))
    {
        $SELECT = "SELECT item_name, seller FROM Listings WHERE item_name = ?";
        $INSERT = "INSERT INTO Listings (item_id, item_price, item_name, item_propose, item_desc, seller) VALUES (?,?,?,?,?,?)";
    
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param('s',$item);
        $stmt->execute();
        $stmt->bind_result($item);
        $stmt->store_result();
        $rnum = $stmt->num_rows;
    
        $stmt->close();
    
        $stmt = $conn->prepare($INSERT);
        $stmt->bind_param("idssss", $id ,$price, $item, $proposal, $itemDesc, $seller);
        $stmt->execute();
        header("Location: member.php");
        $stmt->close();
        $conn->close();
    }
?>