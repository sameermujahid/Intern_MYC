<?php 

$username = $_POST['uname'];
$password = $_POST['user_password'];
 //echo "Username ::".$username."  password ::".$password;

if($username == 'Tasneem' && $password == 'kouser'){
    header('Location: http://localhost/tasneem/index.php');

}
else {
  echo "invalid login";
}

?>