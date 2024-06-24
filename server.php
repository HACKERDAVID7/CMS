
<?php 
session_start();

$db = mysqli_connect('localhost', 'root', '', 'bca');

if (isset($_POST['signup'])) {							//Register User

  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password= mysqli_real_escape_string($db, $_POST['password']);
  $cpassword = mysqli_real_escape_string($db, $_POST['cpassword']);
  $mobile = mysqli_real_escape_string($db, $_POST['mobile']);
  $acc_type = mysqli_real_escape_string($db, $_POST['acc_type']);

  $user_check_query = "SELECT * FROM users WHERE name='$name' AND email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
    if ($user) { 

      if ($user['email'] == $email) {
        $register_message = "The user already registered the system!";
        echo "<script type='text/javascript'>alert('$register_message');</script>";
    }
  }
  else
  {
  	$password = md5($password);

    $query = "INSERT INTO users (name, email, password, phone, type) 
          VALUES('$name', '$email', '$password', '$mobile', '$acc_type')";
    mysqli_query($db, $query);
    echo "<script type='text/javascript'>alert('Successfully registered'); 
    window.location.href='login.php'; </script>";
  }


}

if (isset($_POST['faculty_login']))           // faculty login
{

  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  $password = md5($password);
  $query = "SELECT * FROM users WHERE email='$email'";
  $results = mysqli_query($db, $query);


  if(mysqli_num_rows($results) == 0)
  {

    echo "<script type='text/javascript'>alert('User not found!');</script>";

  }
  else if (isset($email) and isset($password) )
  {

    $row = mysqli_fetch_array($results); 
    $username = $row['name'];
    $account_type = $row['type'];


    if($password != $row['password'])
    {
      echo "<script type='text/javascript'>alert('Password is wrong, Please try again!');</script>";
    }
    else if($account_type == 'faculty' and $password == $row['password'])
    {
      $_SESSION['name'] = $username;
      $_SESSION['email'] = $email;
    
      echo "<script type='text/javascript'>alert('Login Success, Welcome ' + '$username'); 
      window.location.href='index.php'; </script>";
    }
    else
    {
      echo "<script type='text/javascript'>alert('The account type is not faculty!');</script>";
    }
  }
}

if (isset($_POST['student_login']))           // Student login
{

  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  $password = md5($password);
  $query = "SELECT * FROM users WHERE email='$email'";
  $results = mysqli_query($db, $query);


  if(mysqli_num_rows($results) == 0)
  {

    echo "<script type='text/javascript'>alert('User not found!');</script>";

  }
  else if (isset($email) and isset($password) )
  {

    $row = mysqli_fetch_array($results); 
    $username = $row['name'];
    $account_type = $row['type'];


    if($password != $row['password'])
    {
      echo "<script type='text/javascript'>alert('Password is wrong, Please try again!');</script>";
    }
    else
    {
      $_SESSION['name'] = $username;
      $_SESSION['email']= $email;
    
      echo "<script type='text/javascript'>alert('Login Success, Welcome ' + '$username'); 
      window.location.href='index.php'; </script>";
    }
  }
}


if (isset($_POST['log_out']))					//Log out
{
    session_destroy();
    //unset($_SESSION['username']);
    header("location: login.php");
	    // echo "<script type='text/javascript'>alert('Login Success, Welcome); 
      // window.location.href='login.php'; </script>";
}    



 ?>

