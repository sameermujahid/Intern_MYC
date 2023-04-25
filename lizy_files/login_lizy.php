<?php 

$username = $_POST['uname'];
$password = $_POST['user_password'];

if($username == 'sameer' && $password == 'sameer'){
    header('Location: http://localhost/demo/hello.php');

}
else {
  echo "invalid login";
}

?>