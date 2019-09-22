 <!-- configration file for all pages   -->

 <?php
   session_start();
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='';
$database = 'booking_system';
$db=mysqli_connect($mysql_host,$mysql_user,$mysql_password,$database);                   //creating the datbase connection
if($db->connect_error)
{
 die("Connection failed: " . $db->connect_error);
}
 

if(isset($_POST['register']))                                                    //if register button click then will run
{
     
 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $email=$_POST['email'];
 $cnumber=$_POST['cnumber'];
 $password =$_POST['password'];
 $repassword = $_POST['repassword'];
 if($password == $repassword)
 {
   $check_query = "SELECT * FROM user_info WHERE  Email ='$email' ";     //this will check  user already exits in database
   $result = mysqli_query($db, $check_query);
  // $user = mysqli_fetch_assoc($result);
   if (mysqli_num_rows($result) > 0)
   {
     echo '<script language="javascript">';
     echo 'alert("  email alredy exits")';
     echo '</script>';
   }
   else
    {

        $sql="INSERT INTO `user_info`(`UID`, `First_Name`, `Last_Name`, `Email`, `Contact_No`, `Password`) VALUES (NULL,'$fname','$lname','$email', '$cnumber','$password')";
     //$sql="INSERT INTO user_info (Fist_Name,  email,password) VALUES ('$username','$email','$password')"; //enter the userdata in database
     $result=mysqli_query($db, $sql);
     if( $result== TRUE)
          {
       $_SESSION['First_Name']=$fname;                                         
       $_SESSION['sucess']=" You are now logged in";
      header('location:profile.php');
      
    }
   }
}
   else
   {
        echo 'error';
   }
}


 
