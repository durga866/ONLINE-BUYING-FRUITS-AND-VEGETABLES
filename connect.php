<?php      
    $host = "localhost";  
    $user = "root";  
    $password = "";  
    $db_name = "sign up";  
      
    $conn = mysqli_connect($host, $user, $password, $db_name);  

    if(!$conn) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    } 
    if(isset($_POST['btn']))
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];

        $sql_query = "INSERT INTO Registration  (username,email,password,confirmpassword)
        VALUES ('$username','$email','$password','$confirmpassword')";

        if (mysqli_query($conn, $sql_query))
        {
            echo "New Details Entry inserted successfully !";
        }
        else
        {
            echo "Error: " . $sql . "" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
        
?>  
