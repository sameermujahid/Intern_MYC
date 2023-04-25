<?php 

$username = $_POST['uname'];
$password = $_POST['user_password'];

if($username == 'lizy' && $password == 'lizy'){
    header('Location: http://localhost/lizy.php');

}
else {
  echo "invalid login";
}

?>