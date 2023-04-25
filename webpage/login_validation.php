<?php 

$username = $_POST['uname'];
$password = $_POST['user_password'];
// echo "Username ::".$username."  password ::".$password;

if($username == 'arhaan@gmail.com' && $password == 'admin'){
    header('Location: http://localhost/webpage/index_arhaan.php');

}
else {
  echo "invalid login";
}

?>
