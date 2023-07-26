<?php include "db_conn.php";?>
<?php
  global $conn;

function show()
{
    global $conn;
    $query = "SELECT * FROM users";
    $result = mysqli_query($conn,$query);

    if(!$result)
    {
        die('Query failed' . mysqli_error($conn));
    }

    while($row = mysqli_fetch_assoc($result))
    {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}

function read()
{
    global $conn;
    $query = "SELECT * FROM users";
    $result = mysqli_query($conn,$query);
    if(!$result)
    {
        die('Query failed' . mysqli_error($conn));
    }
    while($row = mysqli_fetch_assoc($result))
    {
        print_r($row);
    
    }

}


function delete()
{
    global $conn;     
    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $query = "DELETE FROM db ";
        $query .= "WHERE id = $id ";

        $result =mysqli_query($conn, $query);
        if(!$result)
        {
            die("Query failed".mysqli_error($conn));
        }
        else 
        {
            echo "deleted";
        }
    }
}
function create()
{
    $errors=array();
    global $conn;
    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        $email= mysqli_real_escape_string($conn,$email);//sq; injection
        $password = mysqli_real_escape_string($conn,$password);//prevent from hackers    

        $password = md5($password);

        // if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
        //     array_push($errors,"! invalid format"); 
        //     }

        $msg = "hello  welcome to our Eshop .. GO & grab your fav once !!!";
        // use wordwrap() if lines are longer than 70 characters
        $msg = wordwrap($msg,70);
        $rec = $email;
        $sub = "Mail through localhost";

    
            $sql = "SELECT * FROM users WHERE email='$email' "; // checks wheather username exist or not
                $result1 = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result1) > 0) // checks wheather username exist or not
            {   
                
                echo "already user"; 
                header('location:../login.php');
                die('Query failed' . mysqli_error($conn));
            } 
            else
            {
                $query = "INSERT INTO users (email,password)";
                $query .= "VALUES ('$email','$password')";
                $result = mysqli_query($conn,$query);

                if(!$result)
                {
                    die('\n Query failed' . mysqli_error($conn));
                }
                else
                {
                    echo "Created";
                    mail($rec,$sub,$msg);
                }
            }
        }
    }

function contact()
{
    if(isset($_POST['submit']))
    {

    $msg = $_POST['message'];
    $username = $_POST['username'];

        // use wordwrap() if lines are longer than 70 characters
        $to = "arpita.selection@gmail.com";
        // $msg = "";
        $msg = wordwrap($msg,70);
        $sub = "For contact";
       
        mail($to,$sub,$msg);

        echo "mail sent ";
    }    
}

function login()
{
    global $conn;
    if(isset($_POST['submit']))
    {
        $email = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE email='$email' "; // checks wheather username exist or not
        $result2 = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result2) == 0) // checks wheather username exist or not
        {
            
            // die('Query failed' . mysqli_error($conn));
            header('location:register.php');
            echo "You need to register first";
        } 
        else
        {
            echo "Hello welcome to our website";
        }
      
    }
}

?>