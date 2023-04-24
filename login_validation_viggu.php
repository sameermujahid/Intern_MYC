

<?php 

$username = $_POST['uname'];
$password = $_POST['user_password'];
// echo "Username ::".$username."  password ::".$password;

if($username == 'vignesh' && $password == 'sripada'){
    header('Location: http://localhost/randomgame/index.php');

}
else {
  echo "invalid login";
}

?>