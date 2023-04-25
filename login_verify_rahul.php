<?php 

$username = $_POST['user_name'];
$password = $_POST['password'];


if($username == 'admin' && $password == 'admin'){
    header('Location: http://localhost/radom_talk/index.php');

}
else {
  echo "please check the username and password";
}

?>