<!-- 
    AUTHORS: Collin deKorne | Darnel Cristobal
 -->
<?php
include 'dbh.php';

$username = $_POST['uid'];
$email = $_POST['mail'];
$pass = $_POST['pwd']; //password
$confirmpass = $_POST['pwd-repeat'];

$hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

if(!empty($username) && !empty($email) && !empty($pass) && !empty($confirmpass))
{
    $SELECT = "SELECT username FROM users WHERE username = ? LIMIT 1"; //come back here to fix
    $INSERT = "INSERT INTO users (username, password, email) VALUES (?,?,?)";

    //Prepare statement
    $stmt = $conn->prepare($SELECT);
    $stmt->bind_param('s',$email);
    $stmt->execute();
    $stmt->bind_result($email);
    $stmt->store_result();
    $rnum = $stmt->num_rows;

    if($rnum==0)
    {
        $stmt->close();

        $stmt = $conn->prepare($INSERT);
        $stmt->bind_param("sss", $username, $hashed_pass, $email);
        $stmt->execute();
        header("Location: member.php");
    }else{
        echo "someone already register using this email";
    }
    $stmt->close();
    $conn->close(); 
}elseif(strcmp($pass, $confirmpass)){
        echo "Passwords do not match!";
}else{
    echo "All fields are required";
    die();
}

?>