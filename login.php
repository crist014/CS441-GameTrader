<!-- 
    AUTHOR: Darnel Cristobal | Collin deKorne
-->
<?php 
include 'dbh.php';
session_start();

if(isset($_POST['mailuid'])){
    
    //Setting up variables from the html form
    $uname=$_POST['mailuid'];
    $password=$_POST['pwd'];
    $_SESSION['username']=$uname;
    
    //Creating a query statement for mySQL to run
    $sql="SELECT username, password FROM users WHERE username='".$uname."' limit 1";
    
    //mysqli_query is a bool
    //Will return 1 if result is found or will return error
    $result=mysqli_query($conn,$sql) or die(mysqli_error($conn));

    //If found...
    if(mysqli_num_rows($result)==1){
        //Running a second query to pull password for the current username
        $sql_password = "SELECT password FROM users WHERE username='".$uname."'";
        $result2=mysqli_query($conn,$sql_password);
        $row = mysqli_fetch_array($result2);
        
        $row = $row['password']; //Finds the in query matching password with the selected user
        
        //Unhashing, verifying password matches
        if(password_verify($password, $row))
        {echo "You Have Successfully Logged in";
            $_SESSION["login"] = true; //Global boolean that sets login to true
            header("Location: member.php"); //redirects here
        //exit();
        }
        else
        {echo "password incorrect!";}
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>